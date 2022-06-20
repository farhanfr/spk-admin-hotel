<?php

namespace App\Http\Controllers\Common;

use App\Alternatif;
use App\Crip;
use App\Kriteria;
use App\PenjabaranNilai;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\Integer;

class CommonController extends Controller
{
    public function index(){
        $id = Session::get('id');
        if (empty($id)){
            return view('common.login');
        }else{
            return view('index');
        }
    }

    public function user(){
        $dataKriteria = Kriteria::all();
        return view('home', compact('dataKriteria'));
    }

    public function userSearch(Request $request){
        $kriteria = Kriteria::all();
        for ($i=0; $i < count($kriteria); $i++){
            $kriteria[$i]->bobot = (double)$request[$kriteria[$i]->kode];
        }

        foreach ($kriteria as $keyK => $dataK) {
            $kriteriaId[] = $dataK->id;
        }
        $crip = Crip::all();
        foreach ($crip as $keyK => $dataCr) {
            $cripId[] = $dataCr->id;
        }
        $alternatif = Alternatif::with(['crip'])->get();
        foreach ($alternatif as $keyK => $dataAl) {
            $alternatifId[] = $dataAl->id;
        }
        $alterCrip= Alternatif::with(['crip'])->get();
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
        }


        return view('search')->with([
            'kriterias' => $kriteria,
            'alternatif' => $alternatif,
            'penjabaran' => $alterCrip,
            'kode_krit'     => $kode_krit
        ]);
    }

    public function login(Request $request){
        $data=[
            'username'=>$request->input('username'),
            'password'=>$request->input('password')
        ];

        if (!$user=User::where('username','=',$data['username'])->first()) {
            return redirect('/')->with(['msgErr'=>'Username tidak diketahui']);
        }

        if (!Hash::check($data['password'], $user->password)) {
            return redirect('/')->with(['msgErr'=>'Password tidak diketahui']);;
        }else{
            Session::put('id',$user->id);
            Session::put('name',$user->name);
            return redirect(route('dashboard'));
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }

}
