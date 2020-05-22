@extends('layouts.main')

@section('title', 'Restore Toko Kita Semua')

@section('content')
	<section id="cart_items">
			<div class="container">
				<div class="breadcrumbs">
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Shopping Cart</li>
					</ol>
				</div>
				<div class="table-responsive cart_info">
					<table class="table table-condensed">
						<thead>
							<tr class="cart_menu">
								<td>#</td>
								<td class="image">Image</td>
								<td class="description">Name</td>
								<td class="price">Price</td>
								<td class="quantity">Quantity</td>
								<td class="total">Total</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							@foreach ($cartItems as $item)
								@if (substr($item->id, 0, 2) == 'MA')
									<tr>
										<td>{{$loop->iteration}}</td>
										<td class="cart_product">
											<a href=""><img src="{{asset('images/makanan/'.$item->associatedModel->image)}}" alt="" width="200"></a>
										</td>
										<td class="cart_description">
											<h4>{{$item->name}}</h4>
										</td>
										<td class="cart_price">
											<p>Rp {{$item->price}},-</p>
										</td>
										<td class="cart_quantity">
											<div class="cart_quantity_button">
												<form action="{{route('cart.update', $item->id)}}" method="post">
													@method('patch')
													@csrf
													<button type="submit" class="btn add"> + </button>
													<input class="input-text" type="text" name="quantity" value="{{$item->quantity}}" autocomplete="off" size="2" readonly>
													<button type="submit" class="btn sub"> - </button>
												</form>
											</div>
										</td>
										<td class="cart_total">
											<p class="cart_total_price">Rp {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}},-</p>
										</td>
										<td class="cart_delete">
											<a class="cart_quantity_delete" href="{{route('cart.destroy',$item->id)}}"><i class="fa fa-times"></i></a>
										</td>
									</tr>
								@else
									<tr>
										<td>{{$loop->iteration}}</td>
										<td class="cart_product">
											<a href=""><img src="{{asset('images/minuman/'.$item->associatedModel->image)}}" alt="" width="200"></a>
										</td>
										<td class="cart_description">
											<h4>{{$item->name}}</h4>
										</td>
										<td class="cart_price">
											<p>Rp {{$item->price}},-</p>
										</td>
										<td class="cart_quantity">
											<div class="cart_quantity_button">
												<form action="{{route('cart.update', $item->id)}}" method="post">
													@method('patch')
													@csrf
													<button type="submit" class="btn add"> + </button>
													<input class="input-text" type="text" name="quantity" value="{{$item->quantity}}" autocomplete="off" size="2" readonly>
													<button type="submit" class="btn sub"> - </button>
												</form>
											</div>
										</td>
										<td class="cart_total">
											<p class="cart_total_price">Rp {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}},-</p>
										</td>
										<td class="cart_delete">
										</td>
									</tr>
								@endif
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</section> <!--/#cart_items-->

		<section id="do_action">
			<div class="container">
				<div class="heading">
					<h3>What would you like to do next?</h3>
					<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="total_area">
							<ul>
								<label>Nama</label>
								<li>{{auth()->user()->first_name . ' ' . auth()->user()->last_name}}</li>
								<label style="padding-top:10px;">Alamat</label>
								<li>{{auth()->user()->alamat}}</li>
								<label style="padding-top:10px;">Kota</label>
								<li>{{auth()->user()->kota}}</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="total_area">
							<ul>
								<li>Tax <span>Free</span></li>
								<li>Shipping Cost <span>Free</span></li>
								<li>Total <span>Rp {{ Cart::session(auth()->id())->getTotal()}},-</span></li>
							</ul>
								<a class="btn btn-default check_out" href="{{url('/checkout')}}">Check Out</a>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#do_action-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$('.add').click(function() {
		   var $input = $(this).next();
		   var currentValue = parseInt($input.val());
		   $input.val(currentValue + 1);
		});

		$('.sub').click(function() {
		   var $input = $(this).prev();
		   var currentValue = parseInt($input.val());
			 if(currentValue > 0)
		   	$input.val(currentValue - 1);
		});

	 });
</script>
@endsection
