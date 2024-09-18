<!--Start Top bar area -->  
<section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                <div class="welcome">
                    <p>Selamat datang di website iBoscha Service Trusted!</p>
                </div> 
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="top-social-links">
                    <ul>
                        <li><a href="https://www.instagram.com/iboscha_service/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Top bar area --> 
 
<!--Start header area-->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('images/resources/logo.png') }}" alt="Awesome Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="header-contact-info">
                    <ul>
                        <li>
                            <div class="iocn-holder">
                                <span class="flaticon-home-page"></span>
                            </div>
                            <div class="text-holder">
                                <h5>MTC Karebosi Lt.2 Blok E3-E5</h5>
                                <h6>Makassar</h6>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder">
                                <span class="flaticon-envelope"></span>
                            </div>
                            <div class="text-holder">
                                <h5>Email</h5>
                                <h6>iboscha.store@gmail.com</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>  
<!--End header area--> 

<!--Start mainmenu area-->
<section class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <!--Start mainmenu-->
                <nav class="main-menu">
                    <div class="navbar-header">   	
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="current"><a href="{{ route('home.index') }}">Home</a></li>
                            <li class="dropdown"><a href="pricing.html">Daftar Harga</a>
                                <ul>
                                    <li><a href="pricing.html">Android</a></li>
                                    <li><a href="pricing.html">iPhone</a></li>
                                    <li><a href="pricing.html">iPad</a></li>
                                    <li><a href="pricing.html">Macbook</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="services.html">Service</a>
                                <ul>
                                    <li><a href="{{ route('service.index') }}">Tracking Service</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="{{ route('shop.index') }}">Toko</a></li>
                            <li class="dropdown"><a href="{{ route('blog.index') }}">Blog</a>
                                <ul>
                                    <li><a href="{{ route('blog.index') }}">Artikel</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('contact.index') }}">Kontak Kami</a></li>
                        </ul>
                    </div>
                </nav>
                <!--End mainmenu-->
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="customer-care pull-left">
                    <div class="icon-holder">
                        <span class="flaticon-cell-phone"></span>
                    </div>
                    <div class="title-holder">
                        <h5>Hubungi Kami Segera</h5>
                        <h4><i class="fa fa-phone" style="color:white"></i> <a href="https://wa.me/628114601180" style="color:white">0811-4601-180</a></h4>
                    </div>
                </div>
                <div class="top-search-box pull-right">
                    <button><i class="fa fa-search"></i></button>
                    <ul class="search-box">
                        <li>
                            <form action="#">
                                <input placeholder="Cari sesuatu..." type="text">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </li>
                    </ul>   
                </div>
            </div>
        </div>
    </div>
</section>

<!--End mainmenu area-->        