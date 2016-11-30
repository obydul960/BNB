<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MarchentRegModel extends Model
{
    protected $table = 'merchant';
    protected $fillable = ['id','user_id','company_name','company_logo','shopping_mohol','email','password','phone','contact_person_phone','address','good_pick_up_address',
        'city','status','hotel_marchent_status'];
}
