<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Tambah Kabupaten</x-slot>
    <x-slot name="card_title">Form Tambah Kabupaten</x-slot>
    <x-slot name="card_footer"></x-slot>
    <form action="{{ route('kab_kota.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="id">Id</label>
            <input type="number" name="id" id="id" value="{{ $kab_kota->id}}" class="form-control"
                required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ $kab_kota->nama}}" class="form-control"
                required>
        </div>
        
        <input type="hidden" name="id" value="{{ $kab_kota->id }}">
        <a href="{{ route('kab_kota.show') }}" class="btn btn-success mr-2">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>