<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorRumusController extends Controller
{
    //
    public function data(Request $request)
    {
        $first = $request ->input('first');
        $second = $request ->input('second');
        $thirds = $request ->input('third');
        $result = 0;

        if('hitung'){
            $result = $first*$second*$thirds*3.14; 
        }
        return redirect('/kalkul')->with('info', 'hasilnya adalah: ' .$result);
    }

    public function home()
    {
        return view('home');
    }
}
