<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWalkRequest;
use App\Http\Requests\UpdateWalkRequest;
use App\Models\Walk;
use App\Services\WalkService;
use Illuminate\Http\JsonResponse;

class WalkController extends Controller
{
    public function __construct(private WalkService $ws)
    {
        
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $walks = $this->ws->all();

        return response()->json($walks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWalkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Walk $walk)
    {
        //
        return response()->json($walk);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWalkRequest $request, Walk $walk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Walk $walk)
    {
        //
    }
}
