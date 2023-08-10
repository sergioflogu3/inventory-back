<?php

namespace App\Http\Controllers;

use App\Models\Active;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ActiveController extends Controller
{
    private int $long = 5;
    private string $patternNumeral = '1234567890';
    private string $patternString = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $actives = Active::orderBy('id', 'desc')
            ->with('project', 'property')
            ->get();
        return response()->json($actives);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(): JsonResponse
    {
        request()->validate([
            'id_property' => 'required|numeric|exists:properties,id',
            'id_project' => 'required|numeric|exists:projects,id',
            'number_series' => 'required',
            'date_acquisition' => 'required',
            'detail' => 'required',
            'amount' => 'required',
            'location' => 'required',
            'buy_value' => 'required'
        ]);
        $active = Active::create([
            'id_property' => request()->id_property,
            'id_project' => request()->id_project,
            'number_series' => request()->number_series,
            'date_acquisition' => request()->date_acquisition,
            'literal_code' => $this->getCode($this->patternString, false),
            'number_code' => $this->getCode($this->patternNumeral, true),
            'detail' => request()->detail,
            'amount' => request()->amount,
            'location' => request()->location,
            'buy_value' => request()->buy_value,
            'observation' => request()->observation,
            'user_register' => auth()->user()->user_name,
            'number_ip' => request()->ip(),
        ]);
        return response()->json($active);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): JsonResponse
    {
        $active = Active::findOrFail($id);
        return response()->json($active);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(int $id): JsonResponse
    {
        request()->validate([
            'id_property' => 'required|numeric|exists:properties,id',
            'id_project' => 'required|numeric|exists:projects,id',
            'number_series' => 'required',
            'date_acquisition' => 'required',
            'detail' => 'required',
            'amount' => 'required',
            'location' => 'required',
            'buy_value' => 'required'
        ]);
        $active = Active::findOrFail($id);
        $active->update([
            'id_property' => request()->id_property,
            'id_project' => request()->id_project,
            'number_series' => request()->number_series,
            'date_acquisition' => request()->date_acquisition,
            'detail' => request()->detail,
            'amount' => request()->amount,
            'location' => request()->location,
            'buy_value' => request()->buy_value,
            'observation' => request()->observation,
            'user_register' => auth()->user()->user_name,
            'number_ip' => request()->ip(),
        ]);
        return response()->json($active);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        $project = Active::findOrFail($id);
        $project->delete();
        return response()->json([], 204);
    }


    private function getCode($pattern, $type): string
    {
        $key = '';
        $max = strlen($pattern)-1;
        $flag = true;
        while($flag){
            for($i=0;$i < $this->long;$i++) $key .= $pattern[mt_rand(0,$max)];
            if ($type) $active = Active::where('number_code',$key)
                ->first();
            else $active = Active::where('literal_code',$key)
                ->first();
            if (!$active) $flag = false;
        }
        return $key;
    }
}
