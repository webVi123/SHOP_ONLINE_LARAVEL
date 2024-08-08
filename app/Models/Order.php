<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'receiver_name',
        'receiver_phone',
        'receiver_address',
        'customer_name',
        'customer_email',
        'customer_address',
        'customer_phone',
        'status',
        'payment_method',
        'total_amount',


    ];

    public function scopeGetOrder($query)
    {
        return $query->orderBy('id', 'desc')->paginate(9);
    }

    public static function searchOrder($keyword)
    {
        return self::where('created_at', 'like', '%' . $keyword . '%')
            ->where('id', 'like', '%' . $keyword . '%')
            ->paginate(6);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
