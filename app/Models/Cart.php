<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    const Type = [
        'cake' => 1,
        'decoration' => 2,

    ];

    protected $fillable = [
        'product_id',
        'type',
        'customer_id',
        'quantity',
        'status',
    ];


}
