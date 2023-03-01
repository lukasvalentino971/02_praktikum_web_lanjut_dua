<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return 'Selamat Datang';
    }

    public function about(){
        return '2141720032 / Lukas Valentino';
    }

    public function articles($id){
        return 'Artikel dengan ID '. $id;
    }       
}