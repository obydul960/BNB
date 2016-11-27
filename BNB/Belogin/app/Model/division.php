<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class division extends Model
{
    protected $table = 'divisions';
    protected $fillable = ['id','name','bn_name'];
}
