<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crip extends Model
{
    protected $table        = 'crip';
    protected $fillable     = ['nama_crip','nilai_crip'];
    public $timestamps = FALSE;

    public function kriteria() {
        return $this->belongsTo(Kriteria::class,'kriteria_id');
    }
    public function PenjabaranNilai() {
        return $this->belongsTo(PenjabaranNilai::class);
    }
}
