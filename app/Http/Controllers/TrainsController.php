<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainsController extends Controller

    {
        public function index(){
            $trains = Train::orderBy('codice_treno')->get();
            return view('home', compact('trains'));
        }
}
