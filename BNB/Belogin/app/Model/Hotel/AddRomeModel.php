<?php

namespace App\Model\Hotel;

use Illuminate\Database\Eloquent\Model;

class AddRomeModel extends Model
{
    protected $table = 'hotel_manage';
    protected $fillable = ['id','area','location','hotel_name','title','discription','price','image_one','image_two','image_three','image_four','facilites','commission','area','location','status'];
}
