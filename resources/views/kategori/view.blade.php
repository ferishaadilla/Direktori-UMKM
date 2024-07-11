<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Kategori UMKM</x-slot> 
<x-slot name="card_title">Detail Kategori UMKM :: {{ $kategori->id }} -  {{ $kategori->nama }}</x-slot> 
<table class="table table-striped table-sm">
    <tr><th class="w-25">Id</th><td>{{ $kategori->id }}</td></tr>
    <tr><th>Nama</th><td>{{ $kategori->nama }}</td></tr>
</table>
<div>
    <a href="{{ route('kategori.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>


