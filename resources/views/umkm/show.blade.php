            <x-layout>
                <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
                <x-slot name="title">Data UMKM</x-slot>
                <x-slot name="card_title">Daftar UMKM Aktif</x-slot>
                <x-slot name="card_footer"></x-slot>

                <h2 class="text-center">Data UMKM</h2>
                <a href="{{ route('umkm.create') }}"><button class="btn btn-primary"><i class="fas fa-plus">Tambah
                            Data</i></button></a>
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama UMKM</th>
                            <th>Modal UMKM</th>
                            <th>Pemilik</th>
                            <th>Alamat</th>
                            <th>Website</th>
                            <th>Email</th>
                            <th>Rating</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_umkm as $umkm)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ strtoupper($umkm->nama) }}</td>
                            <td>{{ $umkm->modal }}</td>
                            <td>{{ $umkm->pemilik }}</td>
                            <td>{{ $umkm->alamat }}</td>
                            <td>{{ $umkm->website }}</td>
                            <td>{{ $umkm->email }}</td>
                            <td>{{ $umkm->rating }}</td>
                            <td>
                                <form action="{{ route('umkm.destroy', $umkm->id) }}" method="post">
                                    <a href="{{ route('umkm.view', $umkm->id) }}" class="btn btn-transparant"><i
                                            class="fas fa-eye text-info"></i></a>
                                    <a href="{{ route('umkm.edit', $umkm->id) }}" class="btn btn-transparant"><i
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