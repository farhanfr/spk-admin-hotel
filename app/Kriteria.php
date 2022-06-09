<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table        = 'kriteria';
    protected $fillable     = ['kode','nama','atribut','bobot'];
    public $timestamps = false;

    public function crip() {
        return $this->hasMany(\App\Crip::class);
    }
}
