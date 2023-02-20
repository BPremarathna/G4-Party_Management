<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;
    protected $fillable = [
        'hallName','capacity','unitPrice','description','hallImage','venueName'
    ];

    /*public function venue()
    {
        return $this->hasMeny(Venue::class);
    }*/
}
