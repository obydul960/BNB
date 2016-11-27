<?php

namespace App\Model\Tourist;

use Illuminate\Database\Eloquent\Model;

class PackageImageModel extends Model
{
    protected $table = 'package_image';
    protected $fillable = ['id','package_id','category_image','details_image','home_image_one','home_image_two'];
}
