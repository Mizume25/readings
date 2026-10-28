<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReadingRequest;
use App\Models\Reading;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readings = Reading::all();

        if ($readings->isEmpty()) {
            return response()->json(['message' => 'No hay readings']);
        }

        return response()->json($readings, 201);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReadingRequest $request)
    {
        $reading = Reading::create($request->validated());

        $message = "Se ha creado correctamente la obra titulada:" . $reading->title; 

        return response()->json(['message' => $message,
                                 'reading' => $reading]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reading = Reading::findOrFail($id);

        if ($reading == null) {
            return response()->json(['message' => 'No existe ese reading']);
        }

        return response()->json($reading, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, ReadingRequest $request)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id , ReadingRequest $data)
    {
    
        $reading = Reading::findOrFail($id);

        $reading->update($data->validated());


        return response()->json(['mesage' => 'Se ha actualizado correctamente',
                                 'reading' => $reading,   ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $reading = Reading::findOrFail($id);
        

         $message = "La obra" . $reading->title . " se ha eliminado correctamente";

         $reading->delete();

         return response()->json(['message' => $message]);
    }
}
