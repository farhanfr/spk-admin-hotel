<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crip extends Model
{
    protected $table        = 'crip';
    protected $fillable     = ['nama_crip','nilai_crip'];
    public $timestamps = false;

    public function relateKriteria() {
        return $this->belongsTo(Kriteria::class,'kriteria_id');
    }
    public function relatePenjabaranNilai() {
        return $this->belongsTo(PenjabaranNilai::class);
    }
}
