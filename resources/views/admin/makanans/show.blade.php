@extends('admin.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <img src="{{ ('../../images/makanan/'.$makanan->image) }}" width="100%">
        </div>
          <div class="card-body">
            <center><h2 class="card-subtitle"><b>{{$makanan->nama}}</b></h2></center>
            <table class="table table-bordered">
              <tr>
                <td><h6 class="card-text">Stock Makanan</h6></td>
                <td><h6 class="card-text">{{$makanan->stock}}</h6></td>
              </tr>
              <tr>
                <td><h6 class="card-text">Harga Makanan</h6></td>
                <td><h6 class="card-text"> Rp {{$makanan->harga}},-</h6></td>
              </tr>
              <tr>
                <td><h6 class="card-text">Jenis Makanan</h6></td>
                <td><h6 class="card-text">{{$makanan->category->nama}}</h6></td>
              </tr>
              <tr>
                <td><h6 class="card-text">Vendor Makanan</h6></td>
                <td><h6 class="card-text">{{$makanan->supplier->nama}}</h6></td>
              </tr>
              <tr>
                <td><h6 class="card-text">Deskripsi Makanan</h6></td>
                <td><h6 class="card-text">{{$makanan->deskripsi}}</h6></td>
              </tr>
            </table>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
