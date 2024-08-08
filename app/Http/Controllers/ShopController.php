<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ShopController extends Controller
{

    public function prodetail(Request $request)
    {
        //lay categories
        $categories = Category::Categories(10);
        $id = $request->id;
        //lay sp chitiet
        $product = Product::getProductById($id);
        //lay sp lien quan
        $productId = $product->id;
        $product_cate = $product->category_id;
        $related = Product::GetRelatedProducts($productId, $product_cate);

        //show sp ban chay
        $productbest = Product::Bestseller(8);


        return view('prodetail', compact('product', 'related', 'categories', 'productbest'));
    }





    //sp theo dm
    public function shop(Request $request)
    {

        //show sp ban chay
        $productbest = Product::Bestseller(8);

        $keyword = $request->input('keyword');
        $sortBy = $request->input('sort_by');
        //lay categories
        $categories = Category::Categories(10);
        $title = 'Tất cả sản phẩm ';

        //sapxep
        $products = Product::query();
        if ($request->has('sort_by')) {
            switch ($request->sort_by) {
                case 'name_asc':
                    $products = $products->sortByNameAsc();
                    break;
                case 'name_desc':
                    $products = $products->sortByNameDesc();
                    break;
                case 'price_asc':
                    $products = $products->sortByPriceAsc();
                    break;
                case 'price_desc':
                    $products = $products->sortByPriceDesc();
                    break;
            }
        }

        $products = $products->paginate(9);
        return view('shop', compact('title', 'categories', 'products', 'keyword','productbest'));
    }


    public function category(Request $request)
    {
        //show sp ban chay
        $productbest = Product::Bestseller(8);

        $keyword = $request->input('keyword');
        //lay categories
        $categories = Category::Categories(10);
        //lay sp theo dm
        $category_id = $request->category_id;
        $products = Product::getProductsByCategory($category_id);
        $category = Category::find($category_id);
        $title = 'Kết quả tìm kiếm với: ' . $category->name;

        return view('shop', compact('title', 'categories', 'products', 'keyword','productbest'));
    }



    public function search(Request $request)
    {
        //show sp ban chay
        $productbest = Product::Bestseller(8);

        $keyword = $request->input('keyword');
        $products = Product::searchProductByName($keyword);
        $title = 'Kết quả tìm kiếm với: ' . $keyword;
        $categories = Category::Categories(10);
        return view('shop', compact('title', 'categories', 'products', 'keyword','productbest'));
    }


    public function wishlist()
    {
        return view('wishlist');
    }
}
