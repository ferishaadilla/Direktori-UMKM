<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Kategori UMKM</x-slot> 
<x-slot name="card_title">Daftar Kategori UMKM Aktif</x-slot> 
<h2 class="text-center">Data Kategori UMKM</h2>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>  
            <th>Aksi</th>          
        </tr>
    </thead>
    <tbody>
        @foreach($list_kategori as $kategori_umkm)
        <tr>
            <td>{{ $kategori_umkm->id }}</td>
            <td>{{ $kategori_umkm->nama }}</td>
            <td>
               <form action="{{ route('kategori.destroy', $kategori_umkm->id) }}" method="post">
               <a href="{{ route('kategori.view', $kategori_umkm->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
               <a href="{{ route('kategori.edit', $kategori_umkm->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-transparant"><i class="fas fa-trash text-danger"></i></button>
               </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>