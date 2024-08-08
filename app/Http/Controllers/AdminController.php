<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.admin');
    }


    //user
    public function user(Request $request)
    {
        $keyword = $request->input('keyword');
        if ($keyword) {
            $users = User::searchUserByName($keyword);
        } else {
            $users = User::GetUsers();

        }

        return view('admin.user', compact('users', 'keyword'));
    }

    public function uduser($id)
    {
        $users = User::GetUsers();
        $user = User::findOrFail($id);
        return view('admin.uduser', compact('users', 'user'));
    }


    public function UpdateUs(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->only(['role']);


        $user->update($data);

        return redirect()->route('admin.user')->with('success', 'User updated successfully!');
    }

    public function adduser()
    {
        $users = User::GetUsers();
        return view('admin.adduser', compact('users'));
    }

    public function store_user(Request $request)
    {
        $data = $request->only(['name', 'email', 'password', 'address', 'phone', 'role']);


        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/' . $imageName;
            $image->move(public_path('uploads'), $imageName);
            $data['img'] = url($imagePath);
        }
        User::create($data);
        return redirect()->route('admin.user')->with('success', 'User added successfully!');

    }

    public function toggleStatus($id)
    {
        // Tìm người dùng theo id
        $user = User::findOrFail($id);

        // Thay đổi trạng thái của tài khoản
        $user->status = $user->status == 1 ? 0 : 1;
        $user->save();


        return redirect()->route('admin.user');
    }









    //products
    public function products(Request $request)
    {
        $categories = Category::Categories(10);
        $category_id = $request->category_id;
        $keyword = $request->input('keyword');
        if ($keyword) {
            $products = Product::searchProductByName($keyword);
        } else if ($category_id) {
            $products = Product::getProductsByCategory($category_id);
        } else {

            $products = Product::getProducts();

        }


        return view('admin.products', compact('products', 'keyword', 'categories', 'category_id'));
    }



    public function addproducts(Request $request)
    {
        $categories = Category::all();
        $products = Product::getProducts();
        return view('admin.addproducts', compact('products', 'categories'));
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'description', 'price', 'category_id']);

        // Upload hình ảnh

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/' . $imageName;
            $image->move(public_path('uploads'), $imageName);
            $data['img'] = url($imagePath);
        }

        Product::create($data);
        return redirect()->route('admin.products')->with('success', 'Sản phẩm được thêm thành công!');




    }

    public function udproducts($id)
    {
        $products = Product::getProducts(); //show cac sp da co
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.udproducts', compact('product', 'categories', 'products'));


    }


    public function updatepro(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $data = $request->only(['name', 'description', 'price', 'category_id']);

        // Upload hình ảnh mới nếu có
        if ($request->hasFile('img')) {
            if ($product->img) {
                $imagePath = public_path($product->img);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/' . $imageName;
            $image->move(public_path('uploads'), $imageName);
            $data['img'] = url($imagePath);
        }

        $product->update($data);

        return redirect()->route('admin.products')->with('success', 'Sản phẩm được cập nhật thành công!');
    }





    public function destroypro($id)
    {
        $product = Product::findOrFail($id);

        if ($product->img) {
            $imagePath = public_path($product->img);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Sản phẩm được xóa thành công!');
    }




    // categories
    public function categories(Request $request)
    {
        $keyword = $request->input('keyword');
        if ($keyword) {
            $categories = Category::searchCategoryByName($keyword);
        } else {
            $categories = Category::GetCategory();

        }

        return view('admin.categories', compact('categories', 'keyword'));
    }



    public function addcategories()
    {
        $categories = Category::GetCategory();
        return view('admin.addcategories', compact('categories'));
    }

    public function store_categories(Request $request)
    {
        $data = $request->only(['name']);

        Category::create($data);
        return redirect()->route('admin.categories')->with('success', 'Danh mục được thêm thành công!');
    }

    public function udcategories($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::GetCategory(); //show dm da co
        return view('admin.udcategories', compact('categories', 'category'));
    }

    public function update_category(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->only(['name']);
        $category->update($data);
        return redirect()->route('admin.categories')->with('success', 'Danh mục được cập nhật thành công!');
    }



    public function destroycate($id)
    {
        // Tìm danh mục với ID tương ứng
        $category = Category::findOrFail($id);

        // Kiểm tra nếu danh mục có sản phẩm
        if ($category->products()->count() > 0) {
            // Trả về thông báo lỗi nếu danh mục có sản phẩm
            return redirect()->route('admin.categories')->with('error', 'Danh mục này có sản phẩm và không thể xóa!');
        }

        // Xóa danh mục nếu không có sản phẩm nào trong đó
        $category->delete();

        // Trả về thông báo thành công
        return redirect()->route('admin.categories')->with('success', 'Danh mục đã được xóa thành công!');
    }




    //don hàng
    public function order(Request $request)
    {
        $keyword = $request->input('keyword');
        if ($keyword) {
            $order = Order::searchOrder($keyword);
        } else {
            $order = Order::GetOrder();

        }


        return view('admin.order', compact('order', 'keyword'));
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $newStatus = $request->input('newStatus');
        $order->status = $newStatus;
        $order->save();

        return redirect()->back()->with('success', 'Order status updated successfully.');
    }

    public function ordetail($id)
    {
        $id_order = $id;
        $cartItems = Cart::where('id_order', $id)->get();
        return view('admin.ordetail', compact('cartItems','id_order'));
    }






    //binh luan
    public function comment()
    {
        return view('admin.comment');
    }

    public function commentdetail()
    {
        return view('admin.commentdetail');
    }


    //thong ke

    public function thongke()
    {
        return view('admin.thongke');
    }










}
