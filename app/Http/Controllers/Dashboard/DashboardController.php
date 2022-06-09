<?php

namespace App\Http\Controllers\Dashboard;

use App\Alternatif;
use App\Crip;
use App\Kriteria;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $alternatif = Alternatif::all()->count();
        $crips = Crip::all()->count();
        $kriteria = Kriteria::all()->count();
        $user = User::all()->count();

        return view('dashboard.dashboard')->with([
            'countAlternatif' => $alternatif,
            'countCrips'=>$crips,
            'countKriteria' => $kriteria,
            'countUser'=>$user
        ]);
    }
}
