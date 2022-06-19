<?php

namespace App\Http\Controllers\Perhitungan;

use App\Alternatif;
use App\Crip;
use App\Kriteria;
use App\PenjabaranNilai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerhitunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriteria = Kriteria::all();
        foreach ($kriteria as $keyK => $dataK) {
            $kriteriaId[] = $dataK->id;
        }
        $crip = Crip::all();
        foreach ($crip as $keyK => $dataCr) {
            $cripId[] = $dataCr->id;
        }
        $alternatif = Alternatif::all();
        foreach ($alternatif as $keyK => $dataAl) {
            $alternatifId[] = $dataAl->id;
        }

        $alterCrip= Alternatif::with(['crip'])->get();
        $penjabaranNilai = PenjabaranNilai::with(['crip','alternatif'])->get();


        $jmlh_kriteria = $kriteria->count();
        $jmlh_alternatif = $alternatif->count();
        $jmlh_crip = $crip->count();
        $jmlhAlterCrip = $alterCrip->count();
        $jmlhPenjabaranNilai = $penjabaranNilai->count();

        $bobot = [];
        foreach ($kriteria as $krit){
            $bobot[$krit->id] = $krit->bobot;
        }

        $kode_krit = [];
        $normalisasi = [];

        foreach ($kriteria as $krit)
        {
            $kode_krit[$krit->id] = [];
            $normalisasi[$krit->id] = [];
            foreach ($alternatif as $al)
            {
                foreach ($al->crip as $crip)
                {
                    if ($crip->kriteria->id == $krit->id)
                    {
                        $kode_krit[$krit->id][] = pow($crip->nilai_crip,2);
                    }
                }
            }
            $kode_krit[$krit->id] = array_sum($kode_krit[$krit->id]);

//            if ($krit->atribut == 'cost')
//            {
//                $kode_krit[$krit->id] = min($kode_krit[$krit->id]);
//            } elseif ($krit->atribut == 'benefit')
//            {
//                $kode_krit[$krit->id] = max($kode_krit[$krit->id]);
//            }
        }
//        return $kode_krit;


        return view('perhitungan.index')->with([
            'kriterias' => $kriteria,
            'alternatif' => $alternatif,
            'penjabaran' => $alterCrip,
            'kode_krit'     => $kode_krit
        ]);

    }

    public function getNilai($alternatif,$kriteria){
        $penjabaranNilai = PenjabaranNilai::with(['crip','alternatif'])
            ->where('alternatif_id','=',$alternatif)
            ->where('crip_id','=',$kriteria)->get();
        foreach ($penjabaranNilai as $key => $value){
            return $value->crip->nilai_crip;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
