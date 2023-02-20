<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entertainment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'bandImage','category','unitPrice','bandName','suppliers_id','companyName'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
