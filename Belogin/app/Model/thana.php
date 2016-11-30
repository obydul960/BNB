<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class thana extends Model
{
    protected $table = 'upazilas';
    protected $fillable = ['id','district_id','name','bn_name'];
}
