            <x-layout>
                <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
                <x-slot name="title">Data Kabupaten</x-slot>
                <x-slot name="card_title">Daftar Kabupaten Aktif</x-slot>
                <x-slot name="card_footer"></x-slot>

                <h2 class="text-center">Data Kabupaten</h2>
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_kab as $kab_kota)
                        <tr>
                            <td>{{ $kab_kota->id }}</td>
                            <td>{{ $kab_kota->nama}}</td>
                            <td>
                                <a href="{{ route('kab.view', $kab_kota->id) }}" class="btn btn-transparent"><i
                                        class="fas fa-eye text-info"></i></a>
                                <a href="{{ route('kab.edit', $kab_kota->id) }}" class="btn btn-transparent"><i
                                        class="fas fa-edit text-warning"></i></a>
                                <form action="{{ route('kab.destroy', $kab_kota->id) }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-transparent"><i
                                            class="fas fa-trash text-danger"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-layout>
