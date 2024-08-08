<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable = ['name'];
    public function scopeCategories($query,$limit)
    {
      
        return $query->withCount('products')->limit($limit)->get(); 

    }

    public function scopeGetCategory($query)
    {
      
        return $query->orderBy('id', 'desc')->paginate(6); 

    }

    public static function searchCategoryByName($keyword)
    {
        return self::where('name', 'like', '%' . $keyword . '%')

            ->paginate(3);
    }


  

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
