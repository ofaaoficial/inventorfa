<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackagesProducts extends Model
{
    protected $fillable = [
        'package_id',
        'product_id',
        'quantity',
    ];

    public function package(){
        return $this->belongsTo(Package::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
