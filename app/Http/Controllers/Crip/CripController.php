<?php

namespace App\Http\Controllers\Crip;

use App\Crip;
use App\Kriteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $kriteria   = Kriteria::all();
        $crips      = collect([]);

        if ($req->kriteria) {
            $crips = Kriteria::find($req->kriteria)->crip;

        }
//        echo $crips;
        return view('crips.index')->with([
            'kriteria'  => $kriteria,
            'crips'     => $crips,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kriteria = Kriteria::all();
        return view('crips.add',['kriteria' => $kriteria]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kriteria = Kriteria::find($request->kriteria);
        $saveCrip = $kriteria->crip()->create($request->except(['kriteria']));
        if (!$saveCrip)
        {
            return back();
        }
        return redirect(route('crip'))->with(['msg'=>'Crip Ditambahkan']);
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
        $kriteria   = Kriteria::all();
        $crip       = Crip::find($id);
        return view('crips.edit',[
            'kriteria'  => $kriteria,
            'crip'     => $crip,
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
        $krit = Kriteria::find((int) $request->kriteria);
        $crip = Crip::find($id);
        $updated = $crip->update($request->except(['kriteria']));
        if ($updated)
        {
            $crip->kriteria()->associate($krit)->save();
            return redirect(route('crip')."?kriteria=".$request->kriteria)->with(['msg'=>'Crip Diubah']);;
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crip = Crip::destroy($id);
        return redirect(route('crip'))->with(['msg'=>'Crip Dihapus']);
    }
}
