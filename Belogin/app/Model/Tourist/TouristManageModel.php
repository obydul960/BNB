<?php

namespace App\Model\Tourist;

use Illuminate\Database\Eloquent\Model;

class TouristManageModel extends Model
{
    protected $table = 'turiest_manage';
    protected $fillable = ['id','marchent_id','package_id','title','tourist_name','phone','address','package_name','price','commission','discription','facilities','location','start_date','end_date','date','package_status','storeage_status','book','status'];
}
