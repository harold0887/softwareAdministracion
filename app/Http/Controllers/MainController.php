<?php

namespace App\Http\Controllers;

use App\Models\Condominio;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }







    public function dashboard()
    {
        $condominios = Condominio::where('name', 'Privada Coralina (demo)')->get();
        return view('dashboard');
    }

    public function demo($name)
    {
        $condominio = Condominio::where('name', 'Privada Coralina (demo)')->get();


        return view('demo', compact('condominio'));
    }
}
