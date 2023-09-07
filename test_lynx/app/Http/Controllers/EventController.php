<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Inertia\Inertia;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create(){
        return inertia::render('CreerEvent');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'description' => 'required|max:255',
            'localisation' => 'required|max:255',
        ]);

        // Créez un nouvel événement en utilisant le modèle Event
         $event = Event::create($validatedData);

        // Retournez une réponse appropriée, par exemple, une redirection ou un message de succès
        return response()->json(['message' => 'Événement créé avec succès', 'event' => $event]);
    }

    /**
     * Store a newly created resource in storage.
     */
    
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
