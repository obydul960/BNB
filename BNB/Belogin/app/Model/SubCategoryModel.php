<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubCategoryModel extends Model
{
    protected $table = 'sub_category';
    protected $fillable = ['id','main_category','sub_category_name'];
}
