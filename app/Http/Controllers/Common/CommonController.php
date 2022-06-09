<?php

namespace App\Http\Controllers\Common;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
