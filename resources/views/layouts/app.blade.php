<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home || iBoscha Service Trusted</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/responsive.css ') }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>

<!--Start Preloader -->
<div class="preloader"></div>
<!--End Preloader -->  

@include('pages.partial.head')

@yield('content')

<!--End appointment area-->
       
  
<!--Start footer area-->  
@include('pages.partial.footer')
 
<!--End footer area--> 


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- main jQuery -->
<script src="{{ asset('js/jquery.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- bx slider -->
<script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
<!-- count to -->
<script src="{{ asset('js/jquery.countTo.js') }}"></script>
<!-- owl carousel -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- validate -->
<script src="{{ asset('js/validate.js') }}"></script>
<!-- mixit up -->
<script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
<!-- easing -->
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="{{ asset('js/gmaps.js') }}"></script>
<script src="{{ asset('js/map-helper.js') }}"></script>
<!-- video responsive script -->
<script src="{{ asset('js/jquery.fitvids.js') }}"></script>
<!-- jQuery ui js -->
<script src="{{ asset('assets/jquery-ui-1.11.4/jquery-ui.js') }}"></script>
<!-- Language Switche  -->
<script src="{{ asset('assets/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
<!-- fancy box -->
<script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
<script src="js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="{{ asset('js/isotope.js') }}"></script>
<script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script> 
<!-- jQuery timepicker js -->
<script src="{{ asset('assets/timepicker/timePicker.js') }}"></script>
<!-- Bootstrap select picker js -->
<script src="{{ asset('assets/bootstrap-sl-1.12.1/bootstrap-select.js') }}"></script>                               


<!-- revolution slider js -->
<script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>



<!-- thm custom script -->
<script src="{{ asset('js/custom.js') }}"></script>






</body>
</html>