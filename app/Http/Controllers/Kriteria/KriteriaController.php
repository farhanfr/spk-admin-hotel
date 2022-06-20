<?php

namespace App\Http\Controllers\Kriteria;

use App\Kriteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriteriaData = Kriteria::all();
        return view('kriteria.index',compact('kriteriaData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kriteria.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add = Kriteria::create($request->all());
        if (!$add) {
            return back();
        }
        return redirect(route('kriteria'))->with(['msg'=>'Kriteria ditambahkan']);
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
        $kriteriaData = Kriteria::find($id);
        return view('kriteria.edit',compact('kriteriaData'));
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
        $update = Kriteria::find($id)->update($request->all());
        if (!$update) {
            return back();
        }
        return redirect(route('kriteria'))->with(['msg'=>'Kriteria diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kriteria::destroy($id);
        return redirect(route('kriteria'))->with(['msg'=>'Kriteria dihapus']);;
    }
}
