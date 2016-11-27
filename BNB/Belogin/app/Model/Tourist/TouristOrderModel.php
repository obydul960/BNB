<?php

namespace App\Model\Tourist;

use Illuminate\Database\Eloquent\Model;

class TouristOrderModel extends Model
{
    protected $table = 'tourist_order';
    protected $fillable = ['id','tourist_name','phone','address','package_name','hotel_name','familly_member','cheackin_date','cheackout_date','status'];
}
