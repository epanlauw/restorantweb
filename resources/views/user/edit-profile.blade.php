@extends('layouts.main')
@section('title','Register')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                <div class="signup-form">
                    <h2><center>User Edit Profile!</center></h2>
                    <form method="POST" action="{{url('/profile/update')}}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Depan') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Nama Depan" id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{auth()->user()->first_name}}" required autocomplete="fist_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Belakang') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Nama Belakang" id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{auth()->user()->last_name}}" autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Alamat" id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{auth()->user()->alamat}}" required autocomplete="alamat" autofocus>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kota" class="col-md-4 col-form-label text-md-right">{{ __('Kota') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Kota" id="kota" type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" value="{{auth()->user()->kota}}" required autocomplete="kota" autofocus>

                                @error('kota')
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_tlp" class="col-md-4 col-form-label text-md-right">{{ __('No Telpon') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Nomor Telpon" id="no_tlp" type="text" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" value="{{auth()->user()->no_tlp}}" required autocomplete="no_tlp" autofocus>

                                @error('no_tlp')
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bod" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="bod" type="date" class="form-control @error('bod') is-invalid @enderror" name="bod" value="{{auth()->user()->bod}}" required autocomplete="kota" autofocus>

                                @error('bod')
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Photo Profile') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" utocomplete="image" autofocus>

                                @error('image')
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Profile') }}
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
