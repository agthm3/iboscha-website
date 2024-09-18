@extends('layouts.app')

@section('content')
    <!--Start breadcrumb area-->     
<section class="breadcrumb-area">
	<div class="container text-center">
		<h1>Shop</h1>
	</div>
</section>
<!--End breadcrumb area-->

<!--Start breadcrumb bottom area-->
<section class="breadcrumb-botton-area">
    <div class="container">
        <div class="left pull-left">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
                <li>Shop</li>
            </ul>    
        </div>
        <div class="right pull-right">
            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a>
        </div>  
    </div>
</section>
<!--End breadcrumb bottom area-->

<!--Start blog area-->
<section id="shop-area" class="main-shop-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="shop-content">
                    <div class="row showing-result-shorting">
                        <div class="col-md-12">
                            <div class="showing pull-left">
                                <p>Menampilkan 1-12 dari 15 hasil</p>
                            </div>
                            <div class="shorting pull-right">
                                <select class="selectmenu">
                                    <option selected="selected">Urutkan Default</option>
                                    <option>Urutkan Berdasarkan Harga</option>
                                    <option>Urutkan Berdasarkan Popularitas</option>
                                    <option>Urutkan Berdasarkan Terbaru</option>
                                </select>
                            </div>      
                        </div>
                    </div>
                    <div class="row">
                        <!--Start single product item-->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-product-item">
                                <div class="img-holder">
                                    <img src="https://via.placeholder.com/150/0000FF/808080?text=Adapter+Kabel" alt="Produk Adapter Kabel">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="content">
                                                <a class="thm-btn bg-1" href="shop-single.html">Tambah ke Keranjang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <div class="top clearfix">
                                        <div class="product-title pull-left">
                                            <a href="shop-single.html">
                                                <h5>Adapter Kabel</h5>
                                            </a>
                                        </div>
                                        <div class="review-box pull-right">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4>Rp 499.000</h4>
                                </div>
                           
                            </div>
                        </div>
                        <!--End single product item-->
                        <!--Start single product item-->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-product-item">
                                <div class="img-holder">
                                    <img src="https://via.placeholder.com/150/FF0000/FFFFFF?text=Headphone+Bluetooth" alt="Produk Headphone Bluetooth">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="content">
                                                <a class="thm-btn bg-1" href="shop-single.html">Tambah ke Keranjang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <div class="top clearfix">
                                        <div class="product-title pull-left">
                                            <a href="shop-single.html">
                                                <h5>Headphone Bluetooth</h5>
                                            </a>
                                        </div>
                                        <div class="review-box pull-right">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4>Rp 1.199.000</h4>
                                </div>
                           
                            </div>
                        </div>
                        <!--End single product item-->
                        <!--Start single product item-->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-product-item">
                                <div class="img-holder">
                                    <img src="https://via.placeholder.com/150/FFFF00/000000?text=Tempered+Glass" alt="Produk Tempered Glass">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="content">
                                                <a class="thm-btn bg-1" href="shop-single.html">Tambah ke Keranjang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <div class="top clearfix">
                                        <div class="product-title pull-left">
                                            <a href="shop-single.html">
                                                <h5>Tempered Glass</h5>
                                            </a>
                                        </div>
                                        <div class="review-box pull-right">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4>Rp 149.000</h4>
                                </div>
                           
                            </div>
                        </div>
                        <!--End single product item-->
                    </div>
                    <!--Start post pagination-->
                    <div class="row">
                        <div class="col-md-12"> 
                            <ul class="post-pagination text-center">
                                <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div> 
                    </div>
                    <!--End post pagination-->
                </div>
            </div>
            <!--End Sidebar Wrapper-->  
        </div>
    </div>
</section> 
@endsection