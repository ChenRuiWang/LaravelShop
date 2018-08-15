<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = ['amount'];
    public $timestamps = false;

    // 一对一
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 一对一
    public function productSku()
    {
        return $this->belongsTo(ProductSku::class);
    }
}
