<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singkatan extends Model
{
     protected $table = 'singkatans';
    protected $fillable = ['singkatan', 'normal'];

}
