<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'hallImage','hallName','description','capacity','unitPrice',
    ];

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
}
