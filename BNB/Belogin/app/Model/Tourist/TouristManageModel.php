<?php

namespace App\Model\Tourist;

use Illuminate\Database\Eloquent\Model;

class TouristManageModel extends Model
{
    protected $table = 'tourist_manage';
    protected $fillable = ['id','package_id','title','turist_name','phone','address','package_name','price','commission','image_first','image_secund','discription','location','start_date','end_date','date','publish','available','book','status'];
}
