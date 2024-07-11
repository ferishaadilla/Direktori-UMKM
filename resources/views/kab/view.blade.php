<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Detail Kabupaten</x-slot>
    <x-slot name="card_title">Detail Kabupaten :: {{ $kab_kota->id }} - {{ $kab_kota->nama }}</x-slot>
    <x-slot name="card_footer"></x-slot>
    <table class="table table-striped table-sm">
        <tr>
            <th>Id Kabupaten</th>
            <td>{{ $kab_kota->id }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $kab_kota->nama }}</td>
        </tr>
        </tr>
    </table>
    <div>
        <a href="{{ route('kab.show') }}" class="btn btn-success mt-2">Kembali</a>
    </div>
</x-layout>