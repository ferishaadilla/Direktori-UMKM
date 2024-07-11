<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Tambah Kategori UMKM</x-slot> 
<x-slot name="card_title">Form Tambah Kategori UMKM</x-slot> 
<form action="{{ route('kategori.store') }}" method="post">
    @csrf
    
    <div class="form-group">
        <label for="nama">Pembina</label>
        <select name="nama" class="form-select form-select-lg mb-3">
            <option>--Pilih--</option>
            @foreach($list_pembina as $pembina)
            <option value="{{ $pembina->nama }}" {{ $kategori->nama==$pembina->nama ? 'selected': ''}}>
                {{ $pembina->nama }}
            </option>
            @endforeach
        </select>
    </div>
    <input type="hidden" name="id" value="{{ $kategori->id }}">
    <a href="{{ route('kategori.show') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>