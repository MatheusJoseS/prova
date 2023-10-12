<?php

namespace App\Http\Controllers;

use App\Models\Animel;
use Illuminate\Http\Request;

class AnimelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo csrf_token();
        $animal= Animel::all();
        return $animal;
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
        Animel::create($request->all());
        return $request;
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
    public function update(Request $request, Animel $animel)
    {
        $animel->fill($request->all());
        $animel->save();
        return ('atualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animel $animel)
    {
        Animel::destroy($animel->id);
        return ('deleta');
    }
}
