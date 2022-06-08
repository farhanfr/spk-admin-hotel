<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $table        = 'alternatif';
    protected $fillable     = ['kode_alternatif','nama_alternatif','keterangan'];
    public $timestamps = false;

    public function relateCrip()
    {
        return $this->belongsToMany(Crip::class,'nilai_alternatif','alternatif_id','crip_id');
    }
}
