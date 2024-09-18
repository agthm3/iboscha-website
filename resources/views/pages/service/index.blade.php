@extends('layouts.app')

@section('content')
    <!--Start breadcrumb area-->     
<section class="breadcrumb-area">
	<div class="container text-center">
		<h1>Lihat progress service device kamu</h1>
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
                <li>Contact</li>
            </ul>    
        </div>
        <div class="right pull-right">
            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a>
        </div>  
    </div>
</section>
<!--End breadcrumb bottom area-->

<!--Start contact area-->
<section class="tracking-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="tracking-info">
                    <div class="title">
                        <h2>Detail Layanan</h2>
                    </div>
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active"><h4>Informasi Pusat Layanan</h4></div>
                            <div class="accord-content collapsed">
                                <ul class="tracking-info-list">
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-home-page"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>Jl. Layanan Elektronik,</span><br> Bandung, Indonesia 40132</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-call-answer"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>Hubungi Kami</span><br>+62 22 1234 5678</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-envelope"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>Email Kami</span><br>service@iboscha.com</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-clock"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>Jam Operasional</span><br>Sen - Sab: 09.00 - 18.00</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tracking-form">
                    <div class="title">
                        <h2>Tracking Status Servis</h2>
                    </div>
                    <form id="tracking-form" name="tracking_form" class="default-form" action="#" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="tracking_code" value="" placeholder="Kode Pelacakan*" required="">
                            </div>
                            <div class="col-md-6">
                                <button class="thm-btn bg-1" type="submit" data-loading-text="Please wait...">Lacak Sekarang</button>
                            </div>
                        </div>
                    </form>

                    <div class="progress-tracking">
                        <div class="title">
                            <h3>Status Servis</h3>
                        </div>
                        <ul class="tracking-steps">
                            <li class="completed">
                                <span class="step">1</span>
                                <div class="step-info">
                                    <h4>Servis Diterima</h4>
                                    <p>Servis diterima pada 12 Agustus 2024</p>
                                </div>
                            </li>
                            <li class="completed">
                                <span class="step">2</span>
                                <div class="step-info">
                                    <h4>Pemeriksaan Awal</h4>
                                    <p>Pemeriksaan sedang berlangsung</p>
                                </div>
                            </li>
                            <li class="in-progress">
                                <span class="step">3</span>
                                <div class="step-info">
                                    <h4>Proses Perbaikan</h4>
                                    <p>Perbaikan sedang dilakukan</p>
                                </div>
                            </li>
                            <li>
                                <span class="step">4</span>
                                <div class="step-info">
                                    <h4>Pengujian & Pengemasan</h4>
                                    <p>Belum dimulai</p>
                                </div>
                            </li>
                            <li>
                                <span class="step">5</span>
                                <div class="step-info">
                                    <h4>Pengiriman ke Pelanggan</h4>
                                    <p>Belum dimulai</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--End contact area-->

<!--Start Google map area-->
<section class="google-map-area">
    <div 
        class="google-map" 
        id="contact-google-map" 
        data-map-lat="23.810332" 
        data-map-lng="90.412518" 
        data-icon-path="images/resources/map-marker.png" 
        data-map-title="Brooklyn, New York, United Kingdom" 
        data-map-zoom="12" 
        data-markers='{
            "marker-1": [23.810332, 90.412518, "<h4>Head Office</h4><p>44/108 Dhaka, Bangladesh</p>"],
            "marker-2": [23.822349, 90.365420, "<h4>Branch Office</h4><p>77/99 Mirpur Dhaka Bangladesh</p>","images/resources/map-marker.png"]
        }'>

    </div>
</section>
<!--End Google map area-->     
@endsection