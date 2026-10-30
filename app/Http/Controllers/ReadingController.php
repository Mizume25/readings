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

    public function toggle (string $id)
    {
        $reading = Reading::findOrFail($id);

        $reading->update([
            'like' => !$reading->like 
        ]);

        return back()->with('success', 'Cambio de estado completado');

    }
}
