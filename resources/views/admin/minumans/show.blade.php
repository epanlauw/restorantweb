@extends('admin.admin')

@section('subtitle','Detil Minuman')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <img src="{{ ('../../images/minuman/'.$minuman->image) }}" width="100%">
        </div>
          <div class="card-body">
            <center><h2 class="card-subtitle"><b>{{$minuman->nama}}</b></h2></center>
            <table class="table table-bordered">
              <tr>
                <td><h6 class="card-text">Stock Minuman</h6></td>
                <td><h6 class="card-text">{{$minuman->stock}}</h6></td>
              </tr>
              <tr>
                <td><h6 class="card-text">Harga Minuman</h6></td>
                <td><h6 class="card-text"> Rp {{$minuman->harga}},-</h6></td>
              </tr>
              <tr>
                <td><h6 class="card-text">Jenis Minuman</h6></td>
                <td><h6 class="card-text">{{$minuman->category->nama}}</h6></td>
              </tr>
              <tr>
                <td><h6 class="card-text">Vendor Minuman</h6></td>
                <td><h6 class="card-text">{{$minuman->supplier->nama}}</h6></td>
              </tr>
              <tr>
                <td><h6 class="card-text">Deskripsi Minuman</h6></td>
                <td><h6 class="card-text">{{$minuman->deskripsi}}</h6></td>
              </tr>
            </table>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
