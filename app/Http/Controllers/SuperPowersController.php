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

        $page_title = "Superpowers";
        return view('superpowers.index', compact('superpowers','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_title = "Create Superpower";
        return view('superpowers.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        superpowers::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'description' => $request->description,
            'active' => 1,
        ]);

        return redirect()->route('superpowers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //evitar regresar un array, primer resultado
        $superpowers = superpowers::where('user_id',Auth::id())
            ->where('id',$id)
            ->where('active', 1)
            ->select('id','name','description')
            ->firstOrFail();

        //dd($superpowers); 

        $page_title="Show Superpower";
        return view('superpowers.show', compact('superpowers', 'page_title'));   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $superpower = superpowers::where('user_id',Auth::id())
            ->where('id',$id)
            ->where('active', 1)
            ->select('id','name','description')
            ->firstOrFail();

        $page_title="Edit Superpower";
        return view('superpowers.edit', compact('superpower', 'page_title')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request);
        $superpower = superpowers::where('user_id',Auth::id())
            ->where('id',$id)
            ->where('active', 1)
            ->select('id','name','description')
            ->firstOrFail();

        $superpower->update([
            'name' => $request->name,
            'description' => $request->description
        ]);    

        return redirect()->route('superpowers.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $superpower = superpowers::where('user_id',Auth::id())
            ->where('id',$id)
            ->where('active', 1)
            ->select('id','name','description')
            ->firstOrFail();

        $superpower->update([
            'active' => 0
        ]);

        return redirect()->route('superpowers.index');
    }
}
