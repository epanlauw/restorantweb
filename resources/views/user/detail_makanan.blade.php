@extends('layouts.main')
@section('title','Detail Makanan')
@section('content')
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
            <h2>Poster</h2>
            <div class="text-center"><!--shipping-->
                <img src="{{asset('images/home/fast-food.jpg')}}" alt="" width="100%"/>
            </div><!--/shipping-->
            <div class="text-center" style="margin-top:10px;"><!--shipping-->
                <img src="{{asset('images/home/orange-juice.jpg')}}" alt="" width="100%"/>
            </div><!--/shipping-->

					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
                <h2><span>Makanan Detail</span></h2>
							<div class="view-product">
								<img src="{{asset('images/makanan/'.$makanan->image)}}" alt=""  height="100%"/>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{$makanan->nama}}</h2>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span>Rp {{$makanan->harga}},-</span>
									@if ($makanan->stock == 0)
										<h2><span>Sold Out</span></h2>
									@else
										<a type="button" href="{{route('cart.add',$makanan->id)}}" class="btn btn-default cart">
											<i class="fa fa-shopping-cart"></i>
											Add to cart
										</a>
									@endif
								</span>
								<p><b>Stock: </b>{{$makanan->stock}}</p>
								<p><b>Category: </b>{{$makanan->category->nama}}</p>
								<p><b>Distributor : </b>{{$makanan->supplier->nama}}</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->

					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab">Details</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>Admin</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2019</a></li>
									</ul>
                  <textarea name="" disabled>{{$makanan->deskripsi}}</textarea>
                  <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
								</div>
							</div>
						</div>
					</div><!--/category-tab-->
					<a type="button" href="{{url('home')}}" class="btn add-to-cart"><i class="fa fa-caret-left"></i>Back</a>
				</div>
			</div>
		</div>
	</section>
@endsection
