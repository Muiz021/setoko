<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use App\Models\Celana;
use App\Models\BajuMuslim;
use Illuminate\Http\Request;

class TampilController extends Controller
{
    public function index()
    {
        $baju = Baju::all();
        $bajuMuslim = BajuMuslim::all();
        $celana = Celana::all();
        $baju4 =  Baju::orderBy('harga', 'DESC')->take(4)->get();
        $bajuMuslim4 = BajuMuslim::orderBy('harga', 'DESC')->take(4)->get();
        $celana4 =  Celana::orderBy('harga', 'DESC')->take(4)->get();;
        return view('welcome',compact('baju','bajuMuslim','celana','baju4','bajuMuslim4','celana4'));
    }
}
