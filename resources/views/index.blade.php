<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	{{-- <link rel="icon" href="img/favicon.png" type="image/png"> --}}
	<title>PLUGIN</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="asset/css/bootstrap.css">
	<link rel="stylesheet" href="asset/css/animate.css">
	<link rel="stylesheet" href="asset/vendors/linericon/style.css">
	<link rel="stylesheet" href="asset/css/font-awesome.min.css">
	<link rel="stylesheet" href="asset/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="asset/css/magnific-popup.css">
	<link rel="stylesheet" href="asset/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="asset/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="asset/vendors/flaticon/flaticon.css">
	<script src="asset/js/jquery-3.2.1.min.js"></script>
	<!-- main css -->
	<link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
    <div id="wp">
        <!-- <app></app> -->
        <router-view></router-view>
    </div>
     

    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+6287848114793", // WhatsApp number
                call_to_action: "Message us", // Call to action
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();

    </script>
    <!-- /WhatsHelp.io widget -->
    <script src="{{asset('js/app.js') }}"></script>
    
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
	<script src="asset/js/popper.js"></script>
	<script src="asset/js/animate.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
	<script src="asset/js/stellar.js"></script>
	<script src="asset/js/jquery.magnific-popup.min.js"></script>
	<script src="asset/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="asset/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="asset/vendors/isotope/isotope-min.js"></script>
	<script src="asset/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="asset/js/jquery.ajaxchimp.min.js"></script>
	<script src="asset/vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="asset/vendors/counter-up/jquery.counterup.min.js"></script>
	<script src="asset/js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="asset/js/theme.js"></script>
	<script src="asset/js/gmaps.min.js"></script>
	<script src="asset/js/jquery.inview.js"></script>
</body>

</html>
