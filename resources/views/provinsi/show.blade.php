<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Data Provinsi</x-slot>
    <x-slot name="card_title">Daftar Provinsi</x-slot>
    <x-slot name="card_footer"></x-slot>
    <table class="table table-striped table-sm">
        <tr>
            <th>Id Provinsi</th>
            <td>{{ $provinsi->id }}</td>
        </tr>
        <tr>
            <th class="w-25">Nama Provinsi</th>
            <td>{{ $provinsi->nama }}</td>
        </tr>
        <tr>
            <th>Ibu Kota</th>
            <td>{{ $provinsi->ibukota }}</td>
        </tr>
        <tr>
            <th>Latitude</th>
            <td>{{ $provinsi->latitude }}</td>
        </tr>
        <tr>
            <th>Longitude</th>
            <td>{{ $provinsi->longitude }}</td>
        </tr>
    </table>
</x-layout>
