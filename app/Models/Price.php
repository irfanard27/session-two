<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $table = 'prices';

    protected $fillable = ['selling_price', 'price', 'product_id'];
  
    public function product()
    {
      return $this->belongsTo(Product::class);
    }
}
