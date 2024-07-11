<!-- resources/views/pembina/show.blade.php -->

<x-layout>
    <x-slot name="title">Data Pembina</x-slot> 
    <x-slot name="card_title">Daftar Pembina</x-slot> 
    <x-slot name="card_footer"></x-slot>

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Id Pembina</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Keahlian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_pembina as $pembina)
            <tr>
                <td>{{ $pembina->id }}</td>
                <td>{{ $pembina->nama }}</td>
                <td>{{ $pembina->gender }}</td>
                <td>{{ $pembina->tgl_lahir }}</td>
                <td>{{ $pembina->tmp_lahir }}</td>
                <td>{{ $pembina->keahlian }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
