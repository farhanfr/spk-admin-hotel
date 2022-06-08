<?php

namespace App\Http\Controllers\Alternatif;

use App\Alternatif;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alternatifData = Alternatif::all();
        return view('alternatif.index',compact('alternatifData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alternatif.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alternatif::create($request->all());
        return redirect(route('alternatif'))->with(['msg'=>'Alternatif ditambahkan']);
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
        $alternatifData = Alternatif::find($id);
        return view('alternatif.edit',compact('alternatifData'));
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
        $update = Alternatif::find($id)
            ->update($request->all());
        if (!$update) {
            return back();
        }
        return redirect(route('alternatif'))->with(['msg'=>'Alternatif diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alternatif::destroy($id);
        return redirect(route('alternatif'))->with(['msg'=>'Alternatif dihapus']);;
    }

}
