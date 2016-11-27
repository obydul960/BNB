<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
      protected $table = 'slider';
      public $fillable = ['id','company_name','image_title','image_indexing','image_name','status'];
}
