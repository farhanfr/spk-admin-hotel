<?php

namespace App\Http\Controllers\Penjabaran;

use App\Alternatif;
use App\Kriteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PenjabaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriteria = Kriteria::all();
        $alternatif = Alternatif::with(['crip'])->get();
        return view('penjabaran.index')->with([
            'kriteria'      => $kriteria,
            'alternatif'    => $alternatif,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $kriterias = Kriteria::all();
        return view('penjabaran.add',['kriterias' => $kriterias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $data = array_values($request->except('_token'));
        $alternatif = Alternatif::find($id);
        $alternatif->crip()->sync($data);
        return redirect(route('alternatif'));
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
        $selectedCrip = DB::table('penjabaran_nilai')
            ->select('crip_id')
            ->where('alternatif_id',$id)
            ->get();
        $kriteria = Kriteria::all();
        $arrayCrip = [];
        foreach ($selectedCrip as $a) {
            $arrayCrip[] = $a->crip_id;
        }
        return view('penjabaran.edit',[
            'kriterias'   => $kriteria,
            'selected_crip'     => $arrayCrip
        ]);
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
        $request = $request->except('_token');
        $data = array_values($request);
        $alternatif = Alternatif::find($id);
        $alternatif->crip()->sync($data);
        return redirect(route('penjabaran'));
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
