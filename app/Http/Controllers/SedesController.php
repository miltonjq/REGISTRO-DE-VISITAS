<?php

namespace App\Http\Controllers;

use App\Models\sedes;
use Illuminate\Http\Request;

class SedesController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
    }

    public function index()
    {
        return view('modulos.agregar-sedes');
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
    public function show(sedes $sedes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sedes $sedes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sedes $sedes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sedes $sedes)
    {
        //
    }
}
