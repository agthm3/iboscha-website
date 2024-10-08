@extends('layouts.app')

@section('content')
    <!--Start breadcrumb area-->     
<section class="breadcrumb-area">
	<div class="container text-center">
		<h1>Contact</h1>
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
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info">
                    <div class="title">
                        <h2>Informasi Kontak</h2>
                    </div>
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active"><h4>Kantor Pusat</h4></div>
                            <div class="accord-content collapsed">
                                <ul class="contact-info-list">
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-home-page"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5>MTC Karebosi Lt.2 Blok E3-E5, Makassar</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-call-answer"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>Hubungi Kami</span><br>0811-4601-180</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-envelope"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>Email Kami</span><br>iboshca.store@gmail.com</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-clock"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>Jam Operasional</span><br>Senin - Sabtu: 09.00 - 20.00</h5>
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
                <div class="contact-form">
                    <div class="title">
                        <h2>Formulir Kontak</h2>
                    </div>
                    <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="form_name" value="" placeholder="Nama Anda*" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="form_email" value="" placeholder="Email Anda*" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="form_phone" value="" placeholder="Nomor Telepon">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="form_subject" value="" placeholder="Subjek">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="form_message" placeholder="Pesan Anda.." required=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="thm-btn bg-1" type="submit" data-loading-text="Mohon tunggu...">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
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