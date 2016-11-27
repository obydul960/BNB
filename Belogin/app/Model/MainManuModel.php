<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MainManuModel extends Model{
    protected $table = 'main_manu';
    protected $fillable = ['id','manu_name','status'];
}
