<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    //
    protected $table='bonuses';
    protected $primaryKey='id';
    protected $fillable=['b_offer','b_description','image'];
}
