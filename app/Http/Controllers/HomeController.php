<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rol_admin = DB::select('select id_rol from users where id_rol = ?', [1]);
        $rol_beneficiario = DB::select('select id_rol from users where id_rol = ?', [3]);
        $rol_voluntario = DB::select('select id_rol from users where id_rol = ?', [2]);
        
        if (Auth::User()->id_rol == 1) {
            return view('inicio-admin');
        }

        if (Auth::User()->id_rol == 2) {
            return view('inicio-voluntario');
        }
        if (Auth::User()->id_rol == 3) {
            return view('inicio-Beneficiario');
        }
    }
}
