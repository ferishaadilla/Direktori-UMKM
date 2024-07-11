<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Data Provinsi</x-slot>
    <x-slot name="card_title">Daftar Provinsi</x-slot>
    <x-slot name="card_footer"></x-slot>

    <h2 class="text-center">Data Provinsi</h2>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Ibu Kota</th>
                <th>Latitude</th>
                <th>longitude</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_provinsi as $unit_provinsi)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $unit_provinsi->nama }}</td>
                <td>{{ $unit_provinsi->ibukota }}</td>
                <td>{{ $unit_provinsi->latitude }}</td>
                <td>{{ $unit_provinsi->longitude }}</td>
                <td>
                    <form action="{{ route('provinsi.destroy', $unit_provinsi->id) }}" method="post">
                        <a href="{{ route('provinsi.show', $unit_provinsi->id) }}" class="btn btn-transparant"><i
                                class="fas fa-eye text-info"></i></a>
                        <a href="{{ route('provinsi.edit', $unit_provinsi->id) }}" class="btn btn-transparant"><i
                                class="fas fa-edit text-warning"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-transparant"><i
                                class="fas fa-trash text-danger"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>