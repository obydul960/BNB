<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductOrderManageModel extends Model
{
    protected $table = 'product_order';
    public $fillable = ['id','product_name','product_code_no','price','quentity','phone','address','date','courier_selection','status'];
}
