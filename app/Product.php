<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'quantity',
        'description'
    ];

    public function addProduct(){
        $this->quantity++;
        return $this->save();
    }

    public function deductProduct(){
        if($this->quantity > 0) {
            $this->quantity--;
            return $this->save();
        }

        return false;
    }
}
