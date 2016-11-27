<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
     protected $table = 'product_image';
     public $fillable = ['id','product_id','product_image'];
}
