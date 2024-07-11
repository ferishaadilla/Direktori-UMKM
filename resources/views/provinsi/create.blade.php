<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
    <x-slot name="title">Form Data Provinsi</x-slot> 
    <x-slot name="card_title">Daftar Provinsi</x-slot> 
    <x-slot name="card_footer"></x-slot>
    <form class="forms-sample" action="{{ route('provinsi.store') }}" method="POST">
        @csrf        
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Provinsi</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan Nama Provinsi">
                </div>
            </div>
            <div class="form-group row">
                <label for="kec_id" class="col-sm-4 col-form-label">Kecamatan Id</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kec_id" name="kec_id"
                        placeholder="Masukkan Id Kecamatan">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
</x-layout>