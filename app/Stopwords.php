<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stopwords extends Model
{
    protected $table = 'stopwords';
    protected $fillable = ['kata'];

}
