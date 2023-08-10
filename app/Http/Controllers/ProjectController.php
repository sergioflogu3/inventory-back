<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $projects = Project::orderBy('id', 'desc')
            ->with('agency')
            ->get();
        return response()->json($projects);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(): JsonResponse
    {
        request()->validate([
            'id_agency' => 'required|numeric',
            'name' => 'required|string',
            'star_date' => 'required|date',
            'star_end' => 'required|date',
        ]);
        $project = Project::create([
            'id_agency' => request()->id_agency,
            'name' => request()->name,
            'star_date' => request()->star_date,
            'star_end' => request()->star_end,
            'user_register' => auth()->user()->user_name,
            'number_ip' => request()->ip(),
        ]);
        return response()->json($project);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): JsonResponse
    {
        $project = Project::findOrFail($id);
        return response()->json($project);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(int $id): JsonResponse
    {
        request()->validate([
            'id_agency' => 'required|numeric',
            'name' => 'required|string',
            'star_date' => 'required|date',
            'star_end' => 'required|date',
        ]);
        $project = Project::findOrFail($id);
        $project->update([
            'id_agency' => request()->id_agency,
            'name' => request()->name,
            'star_date' => request()->star_date,
            'star_end' => request()->star_end,
            'user_register' => auth()->user()->user_name,
            'number_ip' => request()->ip(),
        ]);
        return response()->json($project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return response()->json([], 204);
    }
}
