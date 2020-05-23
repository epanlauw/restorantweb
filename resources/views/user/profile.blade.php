@extends('layouts.main')
@section('title','My Profile')
@section('content')
  <div class="container">
  	<div class="row">
  		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
      	 <div class="well profile">
              <div class="col-sm-12">
                  <div class="col-xs-12 col-sm-8">
                      <img src="{{asset('users/image/'.auth()->user()->image)}}" alt="" width="300">
                      <center><h2>{{auth()->user()->first_name .' '. auth()->user()->last_name}}</h2></center>
                      <p><strong>Email: </strong> {{auth()->user()->email}} </p>
                      <p><strong>Alamat: </strong>{{auth()->user()->alamat}}</p>
                      <p><strong>Kota: </strong>{{auth()->user()->kota}}</p>
                      <p><strong>No Telpon: </strong>{{auth()->user()->no_tlp}}</p>
                      <p><strong>Tanggal Lahir : </strong>{{auth()->user()->bod}}</p>
                  </div>
              </div>
              <div class="col-xs-12 divider text-center" style="padding:10px;">
                  <div class="col-xs-12 col-sm-4 emphasis">
                      <a href="{{url('/profile/edit/'.auth()->id())}}" class="btn btn-success btn-block"><span class="fa fa-pencil"></span> Edit </a>
                  </div>
              </div>
      	 </div>
  		</div>
  	</div>
  </div>
@endsection
