<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    use HasFactory;

    protected $fillable = [
        'cakeImage'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

}
