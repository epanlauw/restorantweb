@extends('layouts.main')
@section('title','List Minuman')
@section('search')
<form action="{{url('minumans/search')}}" method="post">
	@csrf
	<div class="input-group">
    <input type="text" placeholder="Search" name="search" id="search" class="form-control"/>
  </div>
</form>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
					<select onchange="location = this.value;">
						<option>Sort By</option>
						<option value="{{url('/minumans/nama-asc')}}">Name Ascending</option>
						<option value="{{url('/minumans/nama-desc')}}">Name Descending</option>
						<option value="{{url('/minumans/harga-asc')}}">Price Ascending</option>
						<option value="{{url('/minumans/harga-desc')}}">Price Descending</option>
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
									<h4 class="panel-title"><a class="button"  href="#jawafood" data-filter="6">Soft Drink</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a  class="button" href="#chinesefood" data-filter="7">Hot Drink</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a  class="button" href="#westrenfood" data-filter="8">Cold Drink</a></h4>
								</div>
							</div>
  						<div class="panel panel-default">
  							<div class="panel-heading">
  								<h4 class="panel-title"><a  class="button" href="#dessert" data-filter="9">Dessert</a></h4>
  							</div>
  						</div>
					</div>
						<!--/category-productsr-->

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
						<h2 class="title text-center">Drink List</h2>
						@foreach ($minumans as $minuman)
							<div class="col-sm-4 filter {{$minuman->category_id}}" data-price="{{$minuman->harga}}">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset('images/minuman/'.$minuman->image)}}" alt="" height="300" />
												<h2>Rp {{$minuman->harga}},-</h2>
												<p>{{$minuman->nama}}</p>
												<a href="{{url('/minuman/'.$minuman->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Details</a>
											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2>Rp {{$minuman->harga}},-</h2>
													<p>{{$minuman->nama}}</p>
													<a href="{{url('/minuman/'.$minuman->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Details</a>
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
						@endforeach
					</div><!--features_items-->
					{!!html_entity_decode($links)!!}
				</div>
			</div>
		</div>
	</section>
<script type="text/javascript">
	$(document).ready(function(){

		$(".button").click(function(){
			$(".filter").removeClass("hide");
			var value = $(this).attr("data-filter");
			if(value == "all"){
				$(".filter").removeClass("hide");
			}
			else if (value == "6") {
				$(".filter").not(".6").addClass("hide");
			}
			else if (value == "7") {
				$(".filter").not(".7").addClass("hide");
			}
			else if (value == "8") {
				$(".filter").not(".8").addClass("hide");
			}
			else if (value == "9") {
				$(".filter").not(".9").addClass("hide");
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
