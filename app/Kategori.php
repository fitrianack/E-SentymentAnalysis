<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $primaryKey = 'id';
    protected $fillable = ['kategori'];

    public function sentimens(){
    	return $this->hasMany('App\Sentimen');
    }
}
