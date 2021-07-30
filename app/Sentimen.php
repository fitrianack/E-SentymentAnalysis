<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Sentimen extends Model
{
    protected $table = 'sentimens';
    protected $primaryKey = 'id';
    protected $fillable = ['sentimen, twitter_account, tgl_waktu, kategori_id'];

    public function kategoris(){
    	return $this->belongsTo('App\Kategori', 'kategori_id', 'id');
    }
}
