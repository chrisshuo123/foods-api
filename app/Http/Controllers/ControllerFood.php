<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class ControllerFood extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Food::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Food::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        return $food;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Food $food)
    {
        $food->update($request->all());

        return $food;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        $food->delete();

        return response()->noContent();
    }
}
