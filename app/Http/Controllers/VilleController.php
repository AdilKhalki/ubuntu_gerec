<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $villes=Ville::paginate(15);
        return view('villes.index',compact('villes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('villes.create');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Ville::create($request->all());
        return redirect()->route('villes.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Ville $ville)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ville $ville)
    {
        return view('villes.edit',compact('ville'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ville $ville)
    {
        $ville->update($request->all());
        return redirect()->route('villes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ville $ville)
    {
        $ville->delete();
        return redirect()->route('villes.index');
    }
}
