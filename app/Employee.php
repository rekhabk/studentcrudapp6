<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table='employees';
    Protected $fillable=['name','email','post','image'];
}
