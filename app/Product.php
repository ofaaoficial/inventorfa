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

    public function history(){
        History::create([
            'quantity' => $this->quantity,
            'product_id' => $this->id,
            'user_id' => auth()->user()->id
        ]);

        return true;
    }

    public function addProduct(){
        $this->quantity++;
        $this->history();
        return $this->save();
    }

    public function deductProduct(){
        if($this->quantity > 0) {
            $this->quantity--;
            $this->history();
            return $this->save();
        }

        return false;
    }
}
