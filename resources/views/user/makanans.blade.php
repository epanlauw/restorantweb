@extends('layouts.main')

@section('title', 'Restore Toko Kita Semua')

@section('content')
<section id="advertisement">
		<div class="container">
			<img src="{{asset('images/shop/advertisement.jpg')}}" alt=""/>
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
									<h4 class="panel-title"><a href="#" data-filter=".jawa-food">Jawa Food</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#" data-filter=".chinese-food">Chinese Food</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#" data-filter=".westren-food">Westren Food</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#" data-filter=".japanese-food">Japanese Food</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#" data-filter=".junk-food">Junk Food</a></h4>
								</div>
							</div>
						</div><!--/category-productsr-->

						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="50000" data-slider-step="5000" data-slider-value="[0,50000]" id="sl2" ><br />
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
								<div class="col-sm-4 jawa-food">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset('images/makanan/'.$makanan->image)}}" alt="" />
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
								<div class="col-sm-4 chinese-food">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset('images/makanan/'.$makanan->image)}}" alt="" />
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
								<div class="col-sm-4 westren-food">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset('images/makanan/'.$makanan->image)}}" alt="" />
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
								<div class="col-sm-4 japanese-food">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset('images/makanan/'.$makanan->image)}}" alt="" />
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
								<div class="col-sm-4 junk-food">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{asset('images/makanan/'.$makanan->image)}}" alt="" />
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
@endsection
