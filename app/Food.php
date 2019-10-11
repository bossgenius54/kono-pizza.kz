<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{
    use SoftDeletes;
    //
    protected $table='foods';
    protected $primaryKey='id';
    protected $fillable=['f_name','f_description','category_id','price','image'];
}
