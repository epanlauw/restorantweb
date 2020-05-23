@extends('layouts.main')
@section('title','History')
@section('content')
<div class="container">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h3 class="card-title">History Pembelian</h3>
              </div>
              <div class="card-body table-responsive">
                  <div class="row">
                      <div class="col-md-12">
                          <table class="table table-bordered table-hover">
                              <thead>
                                  <tr class="text-center">
                                      <th>#</th>
                                      <th>Makanan</th>
                                      <th>Jumlah Makanan</th>
                                      <th>Minuman</th>
                                      <th>Jumlah Minuman</th>
                                      <th>Tanggal Pesan</th>
                                      <th>Tanggal Kirim</th>
                                      <th>Alamat</th>
                                      <th>Kota</th>
                                      <th>Sub Total</th>
                                </tr>
                              </thead>
                              @php
                                $i=1;
                              @endphp
                              <tbody>
                                @foreach($transaksis as $transaksi)
                                @if ($transaksi->customer_id == auth()->id())
                                  <tr>
                                        <th scope="row">{{$i}}</th>
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
                                        <td>{{$transaksi->tgl_pesan}}</td>
                                        <td>On Process</td>
                                        <td>{{$transaksi->alamat}}</td>
                                        <td>{{$transaksi->kota}}</td>
                                        <td>Rp {{$transaksi->total_harga}},-</td>
                                  </tr>
                                  @php
                                    $i++;
                                  @endphp
                                @endif
                              @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
