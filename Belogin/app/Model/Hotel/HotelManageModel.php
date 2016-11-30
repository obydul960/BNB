<?php

namespace App\Model\Hotel;

use Illuminate\Database\Eloquent\Model;

class HotelManageModel extends Model
{
    protected $table = 'hotel_image';
    protected $fillable = ['id','room_id','image_one','image_two','imge_three','image_four'];
}
