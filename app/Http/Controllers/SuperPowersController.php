<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//authentifications
use Illuminate\Support\Facades\Auth;
use App\Models\superpowers;

class SuperPowersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superpowers = superpowers::where('user_id',Auth::id())
        ->where('active', 1)
        ->select('id','name','description')
        ->get();
        //Corroborar el que funcione el comando y regresa un array abierto a la vista
        //dd($superpowers);
        return view('superpowers.index', compact('superpowers'));
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
