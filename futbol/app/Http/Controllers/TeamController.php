<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $footballTeams = TeamController::all();
        return response()->json($footballTeams);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        // Los datos ya están validados en StoreFootballTeamRequest
        $footballTeam = TeamController::create($request->validated());

        return response()->json($footballTeam, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $footballTeam = TeamController::findOrFail($id);
        return response()->json($footballTeam);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, string $id)
    {
        $footballTeam = TeamController::findOrFail($id);

        // Los datos ya están validados en UpdateFootballTeamRequest
        $footballTeam->update($request->validated());

        return response()->json($footballTeam);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $footballTeam = TeamController::findOrFail($id);

        // Eliminar el equipo de fútbol
        $footballTeam->delete();

        return response()->json(['message' => 'Equipo de fútbol eliminado con éxito.']);
    }
}
