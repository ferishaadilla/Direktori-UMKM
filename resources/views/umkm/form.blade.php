<x-layout>
    <!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Tambah UMKM</x-slot>
    <x-slot name="card_title">Form Tambah UMKM</x-slot>
    <x-slot name="card_footer"></x-slot>
    <form action="{{ route('umkm.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nama">Nama UMKM</label>
            <input type="text" name="nama" id="nama" value="{{ $umkm->nama }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="modal">Modal UMKM</label>
            <input type="number" name="modal" id="modal" value="{{ $umkm->modal}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="pemilik">Pemilik</label>
            <input type="text" name="pemilik" id="pemilik" value="{{ $umkm->pemilik}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control">{{ $umkm->alamat }}</textarea>
        </div>
        <div class="form-group">
            <label for="website">Webstie</label>
            <input type="text" name="website" id="website" value="{{ $umkm->website}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ $umkm->email}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="number" name="rating" id="rating" value="{{ $umkm->rating}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="pembina_id">Pembina</label>
            <select name="pembina_id" class="form-select form-select-lg mb-3">
                <option>--Pilih--</option>
                @foreach($list_pembina as $pembina)
                <option value="{{ $pembina->id }}" {{ $umkm->pembina_id==$pembina->id ? 'selected': ''}}>
                    {{ $pembina->nama }}
                </option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="kategori_id">Kategori UMKM</label>
                <select name="kategori_id" class="form-select form-select-lg mb-3">
                    <option>--Pilih--</option>
                    @foreach($list_kategori as $kategori)
                    <option value="{{ $kategori->id }}" {{ $umkm->kategori_id==$kategori->id ? 'selected': ''}}>
                        {{ $kategori->nama }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <select name="provinsi" class="form-select form-select-lg mb-3">
                    <option>--Pilih--</option>
                    @foreach($list_provinsi as $provinsi)
                    <option value="{{ $provinsi->id }}" {{ $umkm->provinsi_id==$provinsi->id ? 'selected': ''}}>
                        {{ $provinsi->nama }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="kabkota_id">Kabupaten/Kota</label>
                <select name="kabkota_id" class="form-select form-select-lg mb-3">
                    <option>--Pilih--</option>
                    @foreach($list_kabkota as $kabkota)
                    <option value="{{ $kabkota->id }}" {{ $umkm->kabkota_id==$kabkota->id ? 'selected': ''}}>
                        {{ $kabkota->nama }}
                    </option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" name="id" value="{{ $umkm->id }}">
            <a href="{{ route('umkm.show') }}" class="btn btn-success mr-2">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>