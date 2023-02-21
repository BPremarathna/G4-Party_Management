<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'venueImage','venueName','location','suppliers_id','companyName'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }


}
