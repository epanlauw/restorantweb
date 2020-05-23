@extends('admin/admin')

@section('subtitle','Daftar Transasksi')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Transaksi Customer</h3>
            </div>
            <div class="card-body table-responsive">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>Makanan</th>
                                    <th>Jumlah Makanan</th>
                                    <th>Minuman</th>
                                    <th>Jumlah Minuman</th>
                                    <th>Rating</th>
                                    <th>Total Harga</th>
                                    <th>Tanggal Pesan</th>
                                    <th>Alamat</th>
                                    <th>Kota</th>
                              </tr>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($transaksis as $transaksi)
                              <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$transaksi->customer->first_name. ' '.$transaksi->customer->last_name}}</td>
                                    @if ($transaksi->makanan_id == '')
                                      <td>Tidak Ada</td>
                                    @else
                                      <td>{{$transaksi->makanan->nama}}</td>
                                    @endif
                                    <td>{{$transaksi->jml_makanan}}</td>
                                    @if ($transaksi->minuman_id == '')
                                      <td>Tidak Ada</td>
                                    @else
                                      <td>{{$transaksi->minuman->nama}}</td>
                                    @endif
                                    <td>{{$transaksi->jml_minuman}}</td>
                                    <td>{{$transaksi->rating->nama}}</td>
                                    <td>Rp {{$transaksi->total_harga}},-</td>
                                    <td>{{$transaksi->tgl_pesan}}</td>
                                    <td>{{$transaksi->alamat}}</td>
                                    <td>{{$transaksi->kota}}</td>
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
