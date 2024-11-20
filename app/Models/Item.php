<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // Указываем поля таблицы (без поля id, created_at и updated_at)
    protected $fillable = [
        'quantity',
        'price',
        'order_id',
        'product_id',
    ];

    // Связь с моделью Order M:1
    public function order() {
        return $this->belongsTo(Order::class);
    }

    // Связь с моделью Product M:1
    public function product() {
        return $this->belongsTo(Product::class);
    }
}