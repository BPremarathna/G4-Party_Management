<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photograph extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'photoImage','package','description','unitPrice','suppliers_id','companyName',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
