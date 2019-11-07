<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\History;

class Product extends Model
{
    protected $fillable = [
        'name',
        'quantity',
        'description'
    ];

    public function history($type_quantity){
        History::create([
            'quantity' => $type_quantity,
            'product_id' => $this->id,
            'user_id' => auth()->user()->id
        ]);

        return true;
    }

    public function addProduct(){
        $this->quantity++;
        $this->history('+1');
        return $this->save();
    }

    public function deductProduct(){
        if($this->quantity > 0) {
            $this->quantity--;
            $this->history('-1');
            return $this->save();
        }

        return false;
    }

    public function histories(){
        return $this->hasMany(History::class);
    }
}
