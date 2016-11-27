<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AllUserModel extends Model
{
    protected $table = 'all_user';
    protected $fillable = ['id','user_id','email','password','name','phone','gender','city','district'];
}
