<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLUG-IN</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--CSS ============================================= -->
    <link rel="stylesheet" href="asset/css/linearicons.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/magnific-popup.css">
    <link rel="stylesheet" href="asset/css/jquery-ui.css">
    <link rel="stylesheet" href="asset/css/nice-select.css">
    <link rel="stylesheet" href="asset/css/animate.min.css">
    <link rel="stylesheet" href="asset/css/owl.carousel.css">
    <link rel="stylesheet" href="asset/css/main.css">
    <link type="image/png" rel="icon" href="asset/img//logo_bunder.jpeg">
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
                whatsapp: "+62895422809945", // WhatsApp number
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
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="asset/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/vendor/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="asset/js/easing.min.js"></script>
    <script src="asset/js/hoverIntent.js"></script>
    <script src="asset/js/superfish.min.js"></script>
    <script src="asset/js/jquery.ajaxchimp.min.js"></script>
    <script src="asset/js/jquery.magnific-popup.min.js"></script>
    <script src="asset/js/jquery.tabs.min.js"></script>
    <script src="asset/js/jquery.nice-select.min.js"></script>
    <script src="asset/js/isotope.pkgd.min.js"></script>
    <script src="asset/js/waypoints.min.js"></script>
    <script src="asset/js/jquery.counterup.min.js"></script>
    <script src="asset/js/simple-skillbar.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/mail-script.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>
