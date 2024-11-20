<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    // Указываем поля таблицы (без поля id, created_at и updated_at)
    protected $fillable = [
        'city',
        'street',
        'house',
        'apartment',
        'entrance',
        'floor',
        'intercom',
        'user_id',
    ];

    // Связь с моделью User M:1
    public function user() {
        return $this->belongsTo(User::class);
    }
}
