@extends('admin.admin')

@section('subtitle','Menambah Daftar Minuman')

@section('content')
<div class="row">
    <div class="col-12">
        <form method="POST" action="{{url('/admin/minumans')}}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Minuman</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama Minuman</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Minuman" name="nama">
                                @error('nama')
                                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stock">Stock Minuman</label>
                                <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" placeholder="Masukkan Stock Minuman" name="stock">
                                @error('stock')
                                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="harga">Harga Minuman</label>
                                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Masukkan Harga Minuman" name="harga">
                                @error('harga')
                                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis">Jenis Minuman</label><br/>
                                <select id="jenis" name="jenis" class="form-control @error('jenis') is-invalid @enderror">
                                @foreach ($categories as $category)
                                  <option value="{{$category->id}}">{{$category->nama}}</option>
                                @endforeach
                                </select>
                                @error('jenis')
                                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="vendor">Vendor Minuman</label>
                                <select id="vendor" name="vendor" class="form-control @error('vendor') is-invalid @enderror">
                                @foreach ($suppliers as $supplier)
                                  <option value="{{$supplier->id}}">{{$supplier->nama}}</option>
                                @endforeach
                                </select>
                                @error('vendor')
                                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gambar">Gambar Minuman</label>
                                <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" placeholder="Masukkan Gambar Minuman" name="gambar">
                                @error('gambar')
                                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama">Deskripsi Minuman</label>
                                <textarea name="deskripsi" class="form-control  @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Masukkan Deskripsi Minuman"></textarea>
                                @error('deskripsi')
                                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
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
