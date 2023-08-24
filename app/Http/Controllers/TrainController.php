<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $today = now()->toDateString();
        $trains = Train::whereDate('orario_partenza', $today)->get();
        
        return view('home', compact('trains'));
    }
}