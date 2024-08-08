<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;


class CartController extends Controller
{
    //gio hang
    public function cart()
    {
        $cart = session()->get('cart', []);
        $totalAmount = 0;
        // Tính tổng thành tiền
        foreach ($cart as $item) {
            $totalAmount += $item['total'];
        }
        return view('cart', compact('cart', 'totalAmount'));
    }
    public function addProduct(Request $request)
    {

        $id = $request->input('product_id');
        $product = Product::find($id);
        $totalPrice = $product->price * (1 - $product->discount_percent / 100) * $request->input('quantity');
        $cartItem = [
            'id_product' => $product->id,
            'name' => $product->name,
            'img' => $product->img,
            'price' => $product->price,
            'discount_percent' => $product->discount_percent,
            'quantity' => $request->input('quantity'),
            'size' => $request->input('size') ?? null,
            'total' => $totalPrice,
        ];

        $cart = session()->get('cart', []);

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        $found = false;
        foreach ($cart as &$item) {
            if ($item['id_product'] == $cartItem['id_product'] && $item['size'] == $cartItem['size']) {
                // Cập nhật số lượng và tổng thành tiền
                $item['quantity'] += $cartItem['quantity'];
                $item['total'] = $item['price'] * $item['quantity'];
                $found = true;
                break;
            }
        }
        if (!$found) {
            $cart[] = $cartItem;
        }

        session()->put('cart', $cart);


        return redirect()->back();

    }



    public function removeProduct($id)
    {
        $cart = session()->get('cart', []);

        foreach ($cart as $key => $item) {
            if ($item['id_product'] == $id) {
                unset($cart[$key]);
            }
        }

        session()->put('cart', $cart);

        return redirect()->route('cart');
    }


    public function clearCart()
    {
        session()->forget('cart');


        return redirect()->route('cart');
    }









    //THANH TOAN
    public function chackout()
    {


        $cart = session()->get('cart', []);
        $totalAmount = 0;
        // Tính tổng thành tiền
        foreach ($cart as $item) {
            $totalAmount += $item['total'];
        }

        return view('chackout', compact('cart', 'totalAmount'));
    }


    public function payment(Request $request)
    {

        if (Auth::check()) {
            $id_user = Auth::id();
        } else {

            $user = User::create([
                'name' => $request->input('customer_name'),
                'email' => $request->input('customer_email'),
                'address' => $request->input('customer_address'),
                'phone' => $request->input('customer_phone'),
            ]);
            $id_user = $user->id;

        }
        $data = $request->only(['receiver_name', 'receiver_phone', 'receiver_address', 'customer_name', 'customer_email', 'customer_address', 'customer_phone', 'payment_method']);

        $cart = session()->get('cart', []);
        $totalAmount = 0;
        foreach ($cart as $item) {
            $totalAmount += $item['total'];
        }
        $data['total_amount'] = $totalAmount;
        $data['id_user'] = $id_user;
        $order = Order::create($data);

        
        $order_id = $order->id;
        foreach ($cart as $item) {
            $itemData = [
                'id_product' => $item['id_product'],
                'name' => $item['name'],
                'image' => $item['img'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'size' => $item['size'],
                'total' => $item['total'],
                'id_order' => $order_id,
            ];

            // Thêm mục vào giỏ hàng
            Cart::create($itemData);
        }

        // Xóa giỏ hàng sau khi tạo đơn hàng
        session()->forget('cart');





        return redirect()->route('payment_success');
    }





    public function orderhistory()
    {

        if (Auth::check()) {
            $id_user = Auth::id();
        }
        $get_order = Order::where('id_user', $id_user)->get();
        return view('orderhistory', compact('get_order'));
    }



    public function detailOrder(Request $request, $id)
    {
        if (Auth::check()) {
            $id_user = Auth::id();
        }
        $id_order = $id;
        $get_order = Order::where('id_user', $id_user)->findOrFail($id);

        $cartItems = Cart::where('id_order', $id)->get();

        return view('order_detail', compact('get_order', 'cartItems', 'id_order'));
    }




    public function dowload($id)
    {

        $id_order = $id;
        $get_order = Order::findOrFail($id);

        $cartItems = Cart::where('id_order', $id)->get();
        $logoPath = public_path('img/logo3.png');
        $data = [
            'title' => 'Chi tiết đơn hàng',
            'get_order' => $get_order,
            'cartItems' => $cartItems,
            'logoPath' => $logoPath,
            'id_order' => $id_order, // Sử dụng id_order thay vì $id_order
        ];
        $dompdf = new Dompdf();

        // Load blade view và render thành HTML
        $html = view('dowloadpdf', $data)->render();

        // Set nội dung HTML cho Dompdf
        $dompdf->loadHtml($html);

        // Render PDF
        $dompdf->render();

        // Trả về file PDF
        return $dompdf->stream('chi-tiet-don-hang.pdf');
    }





    public function updateQuantity(Request $request)
    {
        // Trích xuất dữ liệu từ request
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $cart = session()->get('cart', []);
        // Tìm sản phẩm trong giỏ hàng
        foreach ($cart as $key => $item) {
            if ($item['id_product'] == $productId) {
                // Cập nhật số lượng sản phẩm
                $cart[$key]['quantity'] = $quantity;
                $cart[$key]['total'] = $cart[$key]['price'] * (1 - $cart[$key]['discount_percent'] / 100) * $cart[$key]['quantity'];

                session()->put('cart', $cart);


                return redirect()->back()->with('success', 'Số lượng đã được cập nhật thành công.');
            }
        }

        // Xử lý nếu sản phẩm không tồn tại trong giỏ hàng
        return redirect()->back()->with('error', 'Sản phẩm không tồn tại trong giỏ hàng.');
    }





}
