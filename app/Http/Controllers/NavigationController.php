<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public  function home(){
        return view('site.home');
    }
    public function contacto(){
        return view ('site.contacto');

    }   
    public function galeria(){
        return view ('site.galeria');
    
    }
    public function servico(){
        return view('site.servico');
    }

}
