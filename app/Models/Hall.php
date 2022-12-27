<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;
    protected $fillable = [
        'hallImage'
    ];

    public function venue()
    {
        return $this->hasMeny(Venue::class);
    }
}
