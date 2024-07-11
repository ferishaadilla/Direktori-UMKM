<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_provinsi = Provinsi::all();
        return view('provinsi.index', ['list_provinsi' => $list_provinsi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinsi = new Provinsi();
        return view('provinsi.form', ['list_provinsi' => $provinsi]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'ibukota' => 'required|string'
        ]);

        Provinsi::create($validated);
        return redirect(route('provinsi.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $provinsi = Provinsi::find($id);
    
        if (!$provinsi) {
            return redirect(route('provinsi.index'))->with('error', 'Provinsi tidak ditemukan');
        }
    
        return view('provinsi.show', ['list_provinsi' => $provinsi]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $provinsi = Provinsi::find($id);
        return view('provinsi.form', ['provinsi' => $provinsi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'id' => 'required|string',
            'nama' => 'required|string',
            'ibukota' => 'required|string'
        ]);

        Provinsi::find($id)->update($validated);
        return redirect(route('provinsi.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Provinsi::find($id)->delete();
        return redirect(route('provinsi.index'));
    }
}