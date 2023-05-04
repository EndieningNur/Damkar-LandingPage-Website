<?php

namespace App\Http\Controllers\DetailBerita;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class detailBeritaController extends Controller
{
    public function index(){
        return view('Detail Berita.detailBerita');
        
    }
}
