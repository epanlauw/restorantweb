@extends('layouts.main')

@section('title', 'Restore Toko Kita Semua')

@section('content')
<style>
		.hide{
			transform: scale(0);
			width: 0;
			padding: 0;
			transition: all 0.4s ease-in-out;
		}
</style>
	<section id="advertisement">
		<div class="container">
			<img src="{{asset('images/shop/advertisement.jpg')}}" alt=""/>
			<div class="col-sm-3">
				<div class="single_field" style="padding-top:10px;">
					<select>
						<option>Sort By</option>
						<option>Bangladesh</option>
						<option>UK</option>
						<option>India</option>
						<option>Pakistan</option>
						<option>Ucrane</option>
						<option>Canada</option>
						<option>Dubai</option>
					</select>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a class="button" href="#all" data-filter="all">All</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a class="button"  href="#jawafood" data-filter="jawafood">Jawa Food</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a  class="button" href="#chinesefood" data-filter="chinesefood">Chinese Food</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a  class="button" href="#westrenfood" data-filter="westrenfood">Westren Food</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a class="button" href="#japanesefood" data-filter="japanesefood">Japanese Food</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a  class="button" href="#junkfood" data-filter="junkfood">Junk Food</a></h4>
								</div>
							</div>
						</div><!--/category-productsr-->

						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well">
								<input type="text" class="span2" value="0" data-slider-min="0" data-slider-max="50000" data-slider-step="5000" data-slider-value="[0,50000]" id="sl2" ><br />
								 <b>Rp 0,-</b> <b class="pull-right">Rp 50000,-</b>
							</div>
						</div><!--/price-range-->

						<div class="text-center"><!--shipping-->
								<img src="{{asset('images/home/fast-food.jpg')}}" alt="" width="100%"/>
						</div><!--/shipping-->

					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Food List</h2>
						@foreach ($makanans as $makanan)
							@if ($makanan->category_id == 1)
								<div class="col-sm-4 filter jawafood" data-price="{{$makanan->harga}}">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset('images/makanan/'.$makanan->image)}}" alt="" height="180" />
												<h2>Rp {{$makanan->harga}},-</h2>
												<p>{{$makanan->nama}}</p>
												<a href="{{url('/makanan/'.$makanan->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Details</a>
											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2>Rp {{$makanan->harga}},-</h2>
													<p>{{$makanan->nama}}</p>
													<a href="{{url('/makanan/'.$makanan->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Details</a>
												</div>
											</div>
										</div>
										<div class="choose">
											<ul class="nav nav-pills nav-justified">
												<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
												<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
											</ul>
										</div>
									</div>
								</div>
							@elseif ($makanan->category_id == 2)
								<div class="col-sm-4 chinesefood filter" data-price="{{$makanan->harga}}">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset('images/makanan/'.$makanan->image)}}" alt="" height="180"/>
												<h2>Rp {{$makanan->harga}},-</h2>
												<p>{{$makanan->nama}}</p>
												<a href="{{url('/makanan/'.$makanan->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Details</a>
											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2>Rp {{$makanan->harga}},-</h2>
													<p>{{$makanan->nama}}</p>
													<a href="{{url('/makanan/'.$makanan->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Details</a>
												</div>
											</div>
										</div>
										<div class="choose">
											<ul class="nav nav-pills nav-justified">
												<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
												<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
											</ul>
										</div>
									</div>
								</div>
							@elseif ($makanan->category_id == 3)
								<div class="col-sm-4 westrenfood filter" data-price="{{$makanan->harga}}">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset('images/makanan/'.$makanan->image)}}" alt="" height="180"/>
												<h2>Rp {{$makanan->harga}},-</h2>
												<p>{{$makanan->nama}}</p>
												<a href="{{url('/makanan/'.$makanan->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Details</a>
											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2>Rp {{$makanan->harga}},-</h2>
													<p>{{$makanan->nama}}</p>
													<a href="{{url('/makanan/'.$makanan->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Details</a>
												</div>
											</div>
										</div>
										<div class="choose">
											<ul class="nav nav-pills nav-justified">
												<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
												<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
											</ul>
										</div>
									</div>
								</div>
							@elseif ($makanan->category_id == 4)
								<div class="col-sm-4 japanesefood filter" data-price="{{$makanan->harga}}">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset('images/makanan/'.$makanan->image)}}" alt="" height="180"/>
												<h2>Rp {{$makanan->harga}},-</h2>
												<p>{{$makanan->nama}}</p>
												<a href="{{url('/makanan/'.$makanan->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Details</a>
											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2>Rp {{$makanan->harga}},-</h2>
													<p>{{$makanan->nama}}</p>
													<a href="{{url('/makanan/'.$makanan->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Details</a>
												</div>
											</div>
										</div>
										<div class="choose">
											<ul class="nav nav-pills nav-justified">
												<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
												<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
											</ul>
										</div>
									</div>
								</div>
							@elseif ($makanan->category_id == 5)
								<div class="col-sm-4 junkfood filter" data-price="{{$makanan->harga}}">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset('images/makanan/'.$makanan->image)}}" alt="" height="180" />
												<h2>Rp {{$makanan->harga}},-</h2>
												<p>{{$makanan->nama}}</p>
												<a href="{{url('/makanan/'.$makanan->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Details</a>
											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2>Rp {{$makanan->harga}},-</h2>
													<p>{{$makanan->nama}}</p>
													<a href="{{url('/makanan/'.$makanan->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Details</a>
												</div>
											</div>
										</div>
										<div class="choose">
											<ul class="nav nav-pills nav-justified">
												<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
												<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
											</ul>
										</div>
									</div>
								</div>
							@endif
						@endforeach
					</div><!--features_items-->
					{{ $makanans->links() }}
				</div>
			</div>
		</div>
	</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$(".button").click(function(){
			$(".filter").removeClass("hide");
			var value = $(this).attr("data-filter");
			if(value == "all"){
				$(".filter").removeClass("hide");
			}
			else if (value == "jawafood") {
				$(".filter").not(".jawafood").addClass("hide");
			}
			else if (value == "chinesefood") {
				$(".filter").not(".chinesefood").addClass("hide");
			}
			else if (value == "westrenfood") {
				$(".filter").not(".westrenfood").addClass("hide");
			}
			else if (value == "japanesefood") {
				$(".filter").not(".japanesefood").addClass("hide");
			}
			else if (value == "junkfood") {
				$(".filter").not(".junkfood").addClass("hide");
			}
		});

		$('#sl2').on('slide', function (ev) {
				var range = $("#sl2").val();
				var strx = range.split(",");
        showProducts(strx[0],strx[1]);
    });

		function showProducts(minPrice, maxPrice) {
	    $(".filter").hide().filter(function() {
	        var price = parseInt($(this).data("price"), 10);
	        return price >= minPrice && price <= maxPrice;
	    }).show();
		}

	});


</script>
@endsection
