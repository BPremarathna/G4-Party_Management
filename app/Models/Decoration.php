<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decoration extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'decoImage','description','decoName','unitPrice','suppliers_id','companyName'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
