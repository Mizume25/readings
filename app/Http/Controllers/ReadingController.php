<?php

namespace App\Http\Controllers;

use App\Models\Reading;
use Illuminate\Http\Request;

class ReadingController extends Controller
{
    public function index () 
    {
        $readings = Reading::all();

        return view('readings/index', compact('readings'));
    }
}
