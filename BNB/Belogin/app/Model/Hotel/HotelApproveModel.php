<?php

namespace App\Model\Hotel;

use Illuminate\Database\Eloquent\Model;

class HotelApproveModel extends Model
{
    protected $table = 'category';
    protected $fillable = ['id','category_name'];
}
