@extends('admin/admin')

@section('subtitle','Daftar Makanan')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Barang</h3>
                <div class="card-tools">
                    <a href="{{ URL::to('/admin/makanans/create')}}" class="btn btn-tool">
                        <i class="fa fa-plus"></i>
                        &nbsp; Add
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Stock</th>
                                    <th>Harga</th>
                                    <th>Jenis</th>
                                    <th>Gambar</th>
                                    <th>Vendor</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($makanans as $makanan)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$makanan->nama}}</td>
                                    <td>{{$makanan->stock}}</td>
                                    <td>{{$makanan->harga}}</td>
                                    <td>{{$makanan->category->nama}}</td>
                                    <td>{{$makanan->supplier->nama}}</td>
                                    <td>
                                        <center><img src="{{ ('../images/makanan/'.$makanan->image) }}" width="200"></center>
                                    </td>
                                    <td>
                                        <form action="{{"makanans/".$makanan->id}}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <div class="btn-group">
                                            <a class="btn btn-info" href="{{url('/admin/makanans/'.$makanan->id).'/edit'}}"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-success" href="{{url('/admin/makanans/'.$makanan->id)}}"><i class="fa fa-eye"></i></a>
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
