<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Kab; // Import the Kab class

class KabController extends Controller
{
    //
    public function show(){
        $list_kab_kota = Kab::all();
        return view('kab.show', ['list_kab'=>$list_kab_kota]);
    }
    
    public function create()
    {
        $list_kab_kota = Kab::all();
        $kab_kota = new Kab();
        return view('kab.form', ['kab'=>$kab_kota, 'list_kab'=>$list_kab_kota]);
    }
    
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'id' => 'required',
            'nama' => 'required',
        ]);

        if($request->id){  
            Kab::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('kab.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new Kab instance with the validated data
            Kab::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('kab.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $kab_kota = Kab::find($id);
        $list_kab_kota = Kab::all();
        return view('kab_kota.form', ['kab_kota'=>$kab_kota, 'list_kab_kota'=>$list_kab_kota]);
    }
    
    public function view($id)
{
    $kab_kota = Kab::find($id);
    return view('kab_kota.view', ['kab_kota'=>$kab_kota]);
}

public function destroy($id): RedirectResponse
{
    Kab::find($id)->delete();
    return redirect(route('kab_kota.show'))->with('pesan', 'Data berhasil dihapus');
}

}