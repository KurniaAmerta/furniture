<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'cart_id', 'product_id'];

    public function product()
    {
        return Product::find($this->product_id);
    }
}
