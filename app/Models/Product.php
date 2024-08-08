<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name', 'description', 'price', 'discount_percent','img', 'category_id'];

    public function scopeNew($query, $limit)
    {
        return $query->orderBy('id', 'desc')->limit($limit)->with('category')->get();
    }

    public function scopeBestseller($query, $limit)
    {
        return $query->where('sold', '>', 200)->limit($limit)->get();
    }

    public function scopeView($query, $limit)
    {
        return $query->where('view', '>', 500)->limit($limit)->get();
    }

    public static function getProductById($id)
    {
        return self::find($id);
    }

    public function scopeGetRelatedProducts($query, $productId, $product_cate)
    {
        return $query->where('id', '!=', $productId)
            ->where('category_id', $product_cate)
            ->get();
    }

   
    public static function getProductsByCategory($category_id)
    {
        return self::where('category_id', $category_id)->paginate(6);
    }

    public function scopegetProducts($query)
    {
        return $query->orderBy('id', 'desc')->with('category')->paginate(9);
    }



    public static function searchProductByName($keyword)
    {
        return self::where('name', 'like', '%' . $keyword . '%')

            ->paginate(9);
    }


    //Sap xep
    public function scopeSortByNameAsc($query)
    {
        return $query->orderBy('name', 'asc');
    }

    public function scopeSortByNameDesc($query)
    {
        return $query->orderBy('name', 'desc');
    }

    public function scopeSortByPriceAsc($query)
    {
        return $query->orderByRaw('price * (1 - discount_percent / 100) ASC');
    }
    

    public function scopeSortByPriceDesc($query)
    {
        return $query->orderByRaw('price * (1 - discount_percent / 100) DESC');
       
    }

    //ket thuc sap xep
    // public static function deleteProduct($id)
    // {
    //     $product = self::find($id);
    //     if ($product) {
    //         $product->delete();
    //         return true;
    //     }
    //     return false;
    // }








    public function category()
    {
        return $this->belongsTo(Category::class);
    }



    public function discountedPrice()
    {
        
        $discountedPrice = $this->price - ($this->price * ($this->discount / 100));
        return round($discountedPrice, 2);
    }







}
