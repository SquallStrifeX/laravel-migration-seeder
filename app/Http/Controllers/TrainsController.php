<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainsController extends Controller
{
    public function index()
    {


        $filtered_trains = Train::where('orario_di_partenza', '=', '2024-02-16')->get();

        return view('home', compact('filtered_trains'));
    }
};
