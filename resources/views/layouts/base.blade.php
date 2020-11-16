<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon">
    <title>{{config('app.name', 'LaravelSingle')}}</title>
    <!-- BOOTSTRAP CSS  -->
    <link href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- CUSTOM STYLE CSS-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/shortcodes/shortcodes.css') }}" rel="stylesheet">
    <!-- ANIMATE CSS-->  
    <link href="{{ asset('assets/plugins/animate/animate.min.css') }}" rel="stylesheet">  
    <!-- CSS FOR COLOR SWITCHER -->
	<link rel="stylesheet" href="{{ asset('assets/css/switcher/switcher.css') }}"> 	
	<link rel="stylesheet" href="{{ asset('assets/css/switcher/style1.css') }}" id="colors"> 
    <!-- OWL CAROUSEL -->
    <link href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet" type="text/css">
    <!-- MAGNIFIC POPUP-->
    <link href="{{ asset('assets/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <!--CUSTOM FONTS-->
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/line-icons/line-icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Merienda:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    @livewireStyles
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="71">
  
{{$slot}}



    <!-- JAVASCRIPT
      ================================================== -->
      
    <!-- Jquery--> 
  <script src="{{ asset('assets/js/jquery.js') }}"></script> 
    <!-- Bootstrap Jquery--> 
    <script src="{{ asset('assets/js/bootstrap/js/bootstrap.min.js') }}"></script> 
    <!-- Jquery Easing--> 
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <!-- Wow Animation -->
    <script src="{{ asset('assets/plugins/wow/wow.min.js') }}"></script>  
    <!-- Smooth Scroll--> 
    <script type="text/javascript" src="{{ asset('assets/plugins/SmoothScroll/SmoothScroll.js') }}"></script>
    <!-- Stellar--> 
    <script type="text/javascript" src="{{ asset('assets/plugins/stellar/jquery.stellar.min.js') }}"></script>
    <!-- Waypoint and Counters--> 
    <script type="text/javascript" src="{{ asset('assets/plugins/counter/waypoints.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('assets/plugins/counter/jquery.counterup.min.js') }}"></script> 
    <!--Isotope-->
    <script type="text/javascript" src="{{ asset('assets/plugins/isotope/isotope.pkgd.min.js') }}"></script>
    <!--Magnific Popup-->
    <script type="text/javascript" src="{{ asset('assets/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!--Images Load-->
    <script type="text/javascript" src="{{ asset('assets/plugins/imagesloaded/imagesloaded.pkgd.js') }}"></script>
    <!-- Owl Carousel--> 
    <script type="text/javascript" src="{{ asset('assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script> 
    <!-- NIVO LIGHTBOX--> 
    <script type="text/javascript" src="{{ asset('assets/plugins/nivo-lightbox/nivo-lightbox.js') }}"></script>    
    <!--Visible-->
    <script type="text/javascript" src="{{ asset('assets/plugins/visible/visible.js') }}"></script>
    <!--Fitvids-->
    <script type="text/javascript" src="{{ asset('assets/plugins/fitvids/fitvids.js') }}"></script>
    <!-- Google Maps--> 
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw"></script> 
      <script type="text/javascript" src="{{ asset('assets/js/map.js') }}"></script>
    <!-- Recaptcha--> 
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Contact--> 
    <script src="{{ asset('assets/js/contact.js') }}"></script>
	<!-- switcher js -->
     <script src="{{ asset('assets/js/switcher.js') }}"></script>	
     <!--YTPlayer-->
      <script type="text/javascript" src="{{ asset('assets/plugins/YTPlayer/jquery.mb.YTPlayer.min.js') }}"></script>
       
    <!--Custom JS-->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
      <script>
        new WOW().init();
		jQuery(document).ready(function() {   
        $(".player").mb_YTPlayer();
       });
      </script>
      @livewireScripts
  </body>
</html>
