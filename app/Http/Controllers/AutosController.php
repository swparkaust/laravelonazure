<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;

class AutosController extends Controller
{
    public function list() {
        $autos = Auto::all();

        //dd($autos);

        return view('autos', ['autos' => $autos]);
    }

}
