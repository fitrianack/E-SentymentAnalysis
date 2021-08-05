<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RawSentimen extends Model
{
    protected $table = 'raw_sentimens';
    protected $primaryKey = 'id';
    protected $fillable = ['sentimen, twitter_account, tgl_waktu, kategori_id', 'predict_kategori'];

    public function kategoris()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id', 'id');
    }
}
