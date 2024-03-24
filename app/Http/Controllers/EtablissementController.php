<?php

namespace App\Http\Controllers;

use App\Models\Etablissement;
use Illuminate\Http\Request;

class EtablissementController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etablissements=Etablissement::paginate(10);
        return view('etablissements.index',compact('etablissements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etablissements.create');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Etablissement::create($request->all());
        return redirect()->route('etablissements.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Etablissement $etablissement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etablissement $etablissement)
    {
        return view('etablissements.edit',compact('etablissement'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etablissement $etablissement)
    {
        $etablissement->update($request->all());
        return redirect()->route('etablissements.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etablissement $etablissement)
    {
        $etablissement->delete();
        return redirect()->route('etablissements.index');
    }
}
