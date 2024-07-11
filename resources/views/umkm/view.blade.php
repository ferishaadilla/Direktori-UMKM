<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail UMKM</x-slot> 
<x-slot name="card_title">Detail UMKM :: {{ $umkm->id }} -  {{ $umkm->nama }}</x-slot> 
<x-slot name="card_footer"></x-slot>
<table class="table table-striped table-sm">
    <tr><th>Nama UMKM</th><td>{{ $umkm->nama }}</td></tr>
    <tr><th>Modal UMKM</th><td>{{ $umkm->modal }}</td></tr>
    <tr><th>Pemilik UMKM</th><td>{{ $umkm->pemilik }}</td></tr>
    <tr><th>Alamat</th><td>{{ $umkm->alamat }}</td></tr>
    <tr><th>Website</th><td>{{ $umkm->website }}</td></tr>
    <tr><th>Email</th><td>{{ $umkm->email }}</td></tr>
    <tr><th>Rating</th><td>{{ $umkm->rating }}</td></tr> 
</table>
<div>
    <a href="{{ route('umkm.show') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
