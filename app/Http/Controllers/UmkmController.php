<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Umkm;
use App\Models\Provinsi;
use App\Models\Kategori;
use App\Models\Pembina;
use App\Models\Kab;

class UmkmController extends Controller
{
    // Menampilkan daftar UMKM
    public function show()
    {
        $list_umkm = Umkm::all();
        return view('umkm.show', ['list_umkm' => $list_umkm]);
    }

    // Menampilkan form untuk menambah UMKM baru
    public function create()
    {
        $list_provinsi = Provinsi::all();
        $umkm = new Umkm();
        $kategori = Kategori::all();
        $pembina = Pembina::all();
        $kabkota = Kab::all();
        
        return view('umkm.form', [
            'umkm' => $umkm, 
            'list_provinsi' => $list_provinsi,
            'list_pembina' => $pembina,
            'list_kategori' => $kategori,
            'list_kabkota' => $kabkota,
        
        ]);
    }

    // Menyimpan UMKM baru atau mengupdate yang sudah ada
    public function store(Request $request)
    {
        if ($request->id) {
            Umkm::find($request->id)->update($request->all());
            return redirect(route('umkm.show'))->with('pesan', 'Data berhasil diupdate');
        } else {
            Umkm::create($request->all());
            return redirect(route('umkm.show'))->with('pesan', 'Data berhasil disimpan');
        }
    }

    // Menampilkan form untuk mengedit UMKM
    // Menampilkan form untuk mengedit UMKM
    // Menampilkan form untuk mengedit UMKM
    public function edit($id)
    {
        $umkm = Umkm::find($id);
        $list_provinsi = Provinsi::all();
        $list_pembina = Pembina::all();
        $list_kategori = Kategori::all();
        $list_kabkota = Kab::all();
        return view('umkm.form', compact('umkm', 'list_provinsi', 'list_pembina', 'list_kategori', 'list_kabkota'));
    }

    // Mengupdate data UMKM yang sudah diubah
    public function update(Request $request, $id)
    {
        $umkm = Umkm::find($id);
        $umkm->update($request->all());
        return redirect(route('umkm.show'))->with('pesan', 'Data berhasil diupdate');
    }

    // Menampilkan detail UMKM
    public function view($id)
    {
        $umkm = Umkm::find($id);
        $list_pembina = Pembina::all();
        $list_kategori = Kategori::all();
        $list_kabkota = Kab::all();
        return view('umkm.view', [
            'umkm' => $umkm,
            'list_pembina' => $list_pembina,
            'list_kategori' => $list_kategori,
            'list_kabkota' => $list_kabkota,
        ]);
    }


    // Menghapus UMKM
    public function destroy($id): RedirectResponse
    {
        Umkm::find($id)->delete();
        return redirect(route('umkm.show'))->with('pesan', 'Data berhasil dihapus');
    }
}