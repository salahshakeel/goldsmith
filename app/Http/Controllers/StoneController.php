<?php

namespace App\Http\Controllers;

use App\Models\stone;
use App\Http\Requests\StorestoneRequest;
use App\Http\Requests\UpdatestoneRequest;

class StoneController extends Controller
{
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
    public function store(StorestoneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(stone $stone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stone $stone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestoneRequest $request, stone $stone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stone $stone)
    {
        //
    }
}
