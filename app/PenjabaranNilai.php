<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenjabaranNilai extends Model
{
    protected $table        = 'nilai_alternatif';
    protected $fillable     = ['alternatif_id','crip_id'];
    public $timestamps = false;

    public function crip() {
        return $this->belongsTo(\App\Crip::class,'crip_id');
    }
    public function alternatif() {
        return $this->belongsTo(\App\Alternatif::class,'alternatif_id');
    }
}
