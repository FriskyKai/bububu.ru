<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Указываем поля таблицы (без поля id, created_at и updated_at)
    protected $fillable = [
        'name',
    ];

    // Связь с моделью Product M:1
    public function products()  {
        return $this->hasMany(Product::class);
    }
}
