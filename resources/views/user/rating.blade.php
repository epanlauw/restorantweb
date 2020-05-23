@extends('layouts.main')
@section('title','Rating')
@section('content')
<section id="cart_items">
  <div class="container">
    <div class="step-one">
      <h2 class="heading">Give Our Service A Rating</h2>
    </div>
    <div class="register-req">
      <form action="{{url('/checkout')}}" method="post">
        @csrf
        <select name="rating">
          @foreach ($ratings as $rating)
            <option value="{{$rating->id}}">{{$rating->nama}}</option>
          @endforeach
        </select>
        <button type="submit" name="button" class="btn btn-primary">Submit Rating</button>
      </form>
    </div><!--/register-req-->
</section> <!--/#cart_items-->


@endsection
