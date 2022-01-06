@extends('frontend.layouts.app')
@section('content')
    <main>
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
                                        <h1><span>E</span>-SHOPPER</h1>
                                        <h2>Free E-Commerce Template</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <button type="button" class="btn btn-default get">Get it now</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="{{url('assets/images/home/girl1.jpg')}}" class="girl img-responsive" alt="" />
                                        <img src="{{url('assets/images/home/pricing.png')}}"  class="pricing" alt="" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-6">
                                        <h1><span>E</span>-SHOPPER</h1>
                                        <h2>100% Responsive Design</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <button type="button" class="btn btn-default get">Get it now</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="{{url('assets/images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
                                        <img src="{{url('assets/images/home/pricing.png')}}"  class="pricing" alt="" />
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6">
                                        <h1><span>E</span>-SHOPPER</h1>
                                        <h2>Free Ecommerce Template</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <button type="button" class="btn btn-default get">Get it now</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="{{url('assets/images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
                                        <img src="{{url('assets/images/home/pricing.png')}}" class="pricing" alt="" />
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
                            <div class="shipping text-center"><!--shipping-->
                                <img src="{{url('assets/images/home/shipping.jpg')}}" alt="" />
                            </div><!--/shipping-->

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Features Items</h2>
                            @foreach($barang as $brg)

                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="data_file/{{ $brg->gambar }}" alt="" />
                                                <h2>Rp. {{ $brg->harga }}</h2>
                                                <p>{{ $brg->nama_produk }}</p>
                                                <?php if($id != null){ ?>
                                                    <button data-toggle="modal" data-target="#myModal"  data-id="{{ $brg->id }}" class="btn btn-default add-to-cart jumlah"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                <?php }else {} ?>
                                            </div>
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <h2>Rp. {{ $brg->harga }}</h2>
                                                    <p>{{ $brg->nama_produk }}</p>
                                                    <?php if($id != null){ ?>
                                                        <button data-toggle="modal" data-target="#myModal"  data-id="{{ $brg->id }}" class="btn btn-default add-to-cart jumlah"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                    <?php }else {} ?>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="choose">

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div><!--features_items-->

                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
