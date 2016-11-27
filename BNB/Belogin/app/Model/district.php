<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    protected $table = 'districts';
    protected $fillable = ['id','division_id','name','bn_name'];
}
