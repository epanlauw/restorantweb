<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>Restore</span></h1>
                                <h2>Free E-Commerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('images/home/gbr1.png')}}" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>Restore</span></h1>
                                <h2>100% Responsive Design</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('images/home/gbr2.png')}}" class="girl img-responsive" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>Restore</span></h1>
                                <h2>Free Ecommerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('images/home/gbr3.png')}}" class="girl img-responsive" alt="" />
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

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
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Foods and Drinks</h2>

                    @foreach ($makanans as $makanan)
                      @if ($loop->iteration >= 4)
                        @break
                      @else
                        <div class="col-sm-4">
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
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      @endif
                    @endforeach
                    @foreach ($minumans as $minuman)
                      @if ($loop->iteration >= 4)
                        @break
                      @else
                        <div class="col-sm-4" data-price="{{$minuman->harga}}">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{asset('images/minuman/'.$minuman->image)}}" alt="" />
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
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      @endif
                    @endforeach

                </div><!--features_items-->



                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">recommended foods and drinks</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                              @foreach ($makanans as $makanan)
                                @if ($loop->iteration >= 4)
                                  @break
                                @else
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset('images/makanan/'.$makanan->image)}}" alt="" />
                                                <h2>Rp {{$makanan->harga}},-</h2>
                                                <p>{{$makanan->nama}}</p>
                                                <a href="{{url('/makanan/'.$makanan->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                              @endforeach
                            </div>
                            <div class="item">
            									@foreach ($minumans as $minuman)
                                @if ($minuman->id == 3 ||  $minuman->id == 7 || $minuman->id == 8)
                                  <div class="col-sm-4">
                										<div class="product-image-wrapper">
                											<div class="single-products">
                												<div class="productinfo text-center">
                													<img src="{{asset('images/minuman/'.$minuman->image)}}" alt="" />
                													<h2>Rp {{$minuman->harga}},-</h2>
                													<p>{{$minuman->nama}}</p>
                													<a href="{{url('/minuman/'.$minuman->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Details</a>
                												</div>

                											</div>
                										</div>
                									</div>
                                @endif
                              @endforeach
            								</div>
                        </div>
                          <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                           <i class="fa fa-angle-left"></i>
                          </a>
                          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                          </a>
                    </div>
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>
