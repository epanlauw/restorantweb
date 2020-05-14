@extends('admin.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <form method="POST" action="{{url('/admin/makanans')}}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Makanan</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama Makanan</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Makanan" name="nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stock">Stock Makanan</label>
                                <input type="number" class="form-control" id="stock" placeholder="Masukkan Stock Makanan" name="stock">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="harga">Harga Makanan</label>
                                <input type="number" class="form-control" id="harga" placeholder="Masukkan Harga Makanan" name="harga">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis">Jenis Makanan</label>
                                <input type="number" class="form-control" id="jenis" placeholder="Masukkan Jenis Makanan" name="jenis">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="vendor">Vendor Makanan</label>
                                <input type="number" class="form-control" id="vendor" placeholder="Masukkan Vencor Makanan" name="vendor">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gambar">Gambar Makanan</label>
                                <input type="file" class="form-control" id="gambar" placeholder="Masukkan Gambar Makanan" name="gambar">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama">Deskripsi Makanan</label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukkan Deskripsi Makanan"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection