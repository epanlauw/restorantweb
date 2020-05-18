@extends('admin.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <form method="POST" action="{{url('/admin/makanans/'.$makanan->id)}}" enctype="multipart/form-data">
            @method('patch')
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
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Makanan" name="nama" value="{{$makanan->nama}}">
                                @error('nama')
                                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stock">Stock Makanan</label>
                                <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" placeholder="Masukkan Stock Makanan" name="stock" value="{{$makanan->stock}}">
                                @error('stock')
                                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="harga">Harga Makanan</label>
                                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Masukkan Harga Makanan" name="harga" value="{{$makanan->harga}}">
                                @error('harga')
                                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis">Jenis Makanan</label><br/>
                                <select id="jenis" name="jenis" class="form-control @error('jenis') is-invalid @enderror">
                                @foreach ($categories as $category)
                                  <option value="{{$category->id}}" {{ ( $category->id == $makanan->category_id) ? 'selected' : '' }}>{{$category->nama}}</option>
                                @endforeach
                                </select>
                                @error('jenis')
                                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="vendor">Vendor Makanan</label>
                                <select id="vendor" name="vendor" class="form-control @error('vendor') is-invalid @enderror">
                                @foreach ($suppliers as $supplier)
                                  <option value="{{$supplier->id}}" {{ ( $supplier->id == $makanan->supplier_id) ? 'selected' : '' }}>{{$supplier->nama}}</option>
                                @endforeach
                                </select>
                                @error('vendor')
                                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gambar">Gambar Makanan</label>
                                <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" placeholder="Masukkan Gambar Makanan" name="gambar" value="{{$makanan->image}}">
                                @error('gambar')
                                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama">Deskripsi Makanan</label>
                                <textarea name="deskripsi" class="form-control  @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Masukkan Deskripsi Makanan">{{$makanan->deskripsi}}</textarea>
                                @error('deskripsi')
                                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
