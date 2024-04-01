<?php

namespace App\Http\Controllers;

use App\Models\actividad;
use App\Models\animaal;
use Illuminate\Http\Request;

class actividadController extends Controller
{

    public function asociarAnimal($actividadId, $animalId)
{
    $actividad = actividad::findOrFail($actividadId);
    $animal = animaal::findOrFail($animalId);

    $actividad->animales()->attach($animal);

    return response()->json(['message' => 'Animal asociado con éxito a la actividad']);
}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
