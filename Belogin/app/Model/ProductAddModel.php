<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductAddModel extends Model
{
    protected $table = 'product_add';
    public $fillable = ['id','product_id','main_category','sub_category','product_name','code_no','quantity','buying_price','selling_price','commission','discount','supplier_name','product_details','publish','available','viewer','created_at'];
}
