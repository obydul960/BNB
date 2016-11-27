<?php

namespace App\Model\Hotel;

use Illuminate\Database\Eloquent\Model;

class BookingOrderModel extends Model
{
    protected $table = 'booking_order';
    protected $fillable = ['id','client_name','phone','address','hotel_name','rome_number','family_member','cheack_in','cheack_out','status'];
}
