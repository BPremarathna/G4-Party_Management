<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    /* public function user()
    {
        return $this->hasOne(User::class);
    } */

    public function cake()
    {
        return $this->hasMany(Cake::class);
    }

    public function decoration()
    {
        return $this->hasMany(Decoration::class);
    }

    public function entertainment()
    {
        return $this->hasMany(Entertainment::class);
    }

    public function invitation()
    {
        return $this->hasMany(Invitation::class);
    }

    public function photograph()
    {
        return $this->hasMany(Photograph::class);
    }

    public function venue()
    {
        return $this->hasMany(Venue::class);
    }
}
