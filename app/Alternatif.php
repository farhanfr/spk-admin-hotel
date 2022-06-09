<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $table        = 'alternatif';
    protected $fillable     = ['kode_alternatif','nama_alternatif','keterangan'];
    public $timestamps = FALSE;

    public function crip()
    {
        return $this->belongsToMany(Crip::class,'penjabaran_nilai','alternatif_id','crip_id');
    }
}
