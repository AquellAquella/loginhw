<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//import model parents
use App\Models\parents;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parents = parents::where('user_id', Auth::id())
            ->where('active', 1)
            ->select('id','name','gender')
            -> get();

        //dd($parents);
        return view('parents.index', compact('parents'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('parents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        parents::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'gender' => $request -> gender,
            'active' => 1,
        ]);

        return redirect()->route('parents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $parents = parents::where('user_id', Auth::id())
            ->where('id', $id)
            ->where('active', 1)
            ->select('id','name','gender')
            -> firstOrFail();

        return view('parents.show', compact('parents'));    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $parent = parents::where('user_id', Auth::id())
            ->where('id', $id)
            ->where('active', 1)
            ->select('id','name','gender')
            -> firstOrFail();

        return view('parents.edit', compact('parent'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $parent = parents::where('user_id', Auth::id())
            ->where('id', $id)
            ->where('active', 1)
            ->select('id','name','gender')
            -> firstOrFail();

        $parent->update([
            'name' => $request->name,
            'gender' => $request->gender
        ]);  
        
        return redirect()->route('parents.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $parent = parents::where('user_id', Auth::id())
            ->where('id', $id)
            ->where('active', 1)
            ->select('id','name','gender')
            -> firstOrFail();

        $parent->update([
            'active' => 0,
        ]);
        
        return redirect()->route('parents.index');
    }
}
