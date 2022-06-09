<?php

namespace App\Http\Controllers\Perhitungan;

use App\Alternatif;
use App\Kriteria;
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
        $alternatif = Alternatif::all();
        $penjabaran = Alternatif::with(['crip'])->get();

        $kode_krit = [];
        foreach ($kriteria as $krit)
        {
            $kode_krit[$krit->id] = [];
            foreach ($alternatif as $al)
            {
                foreach ($al->crip as $crip)
                {
                    if ($crip->kriteria->id == $krit->id)
                    {
                        $kode_krit[$krit->id][] = $crip->nilai_crip;
                    }
                }
            }

            if ($krit->atribut == 'cost')
            {
                $kode_krit[$krit->id] = min($kode_krit[$krit->id]);
            } elseif ($krit->atribut == 'benefit')
            {
                $kode_krit[$krit->id] = max($kode_krit[$krit->id]);
            }
        };

        $bobot = [];
        $rangking = [];
        $total = 0;

        foreach ($kriteria as $krit){
            $bobot[$krit->id] = $krit->bobot;
        }

        return view('perhitungan.index')->with([
            'kriterias' => $kriteria,
            'alternatif' => $alternatif,
            'penjabaran' => $penjabaran,
            'kode_krit'     => $kode_krit
        ]);
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
