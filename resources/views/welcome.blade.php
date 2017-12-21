<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="author" content="Wedivite">
    <link rel="icon" href="../userpics/238864_5a3a19b7189fb.jpg">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=">
    <title>

        Wilfreid &amp; Marie Traditional Weding
    </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/invitestyle.css') }}" rel="stylesheet" type="text/css">
    <!-- Invite Icons -->
    <link href="{{ asset('css/inviteicons.css') }}" rel="stylesheet">
    <!-- Default Colors CSS -->
    <link href="{{ asset('css/uber.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">



    <!-- Color Setter based on page order -->
    <style>
        body,
        html {
            background-image: url('https://previews.123rf.com/images/billyphoto2008/billyphoto20081202/billyphoto2008120200005/12268792-abstract-floral-frame-background-Stock-Vector.jpg');
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .cover-heading,
        .inviticon-quotes-left {
            color: #333333 !important;
        }

        .lead,
        .sub-text,
        p,
        span,
        a {
            color: #8b8b8b !important;
        }

        .masthead-nav li a {
            color: #333333 !important;
        }

        .invite-icon {
            color: #333333 !important;
        }

        .invite-icon:after {
            box-shadow: inset 0 0 0 10px #EEEEEE !important;
        }

        .roundicon {
            border: 2px dashed rgba(150, 150, 150, 0.4) !important;
        }

        .btn-default {
            color: #fff !important;
        }
    </style>

    <body class="invite-cover">
        <!-- Preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <style>
            .amazonbox {
                background: !important;
            }

            .amazonbox p,
            .amazonbox span.price {
                color: !important;
            }

            nav.inner {
                background:
            }

            .masthead-nav li a {
                color: !important;
            }

            body {
                font-family: '', serif !important;
            }

            .nav>li>a {
                font-family: 'Lato', Calibri, Arial, sans-serif !important;
            }
        </style>

        <div class="site-wrapper  gste">

            <div class="site-wrapper-inner">

                <div class="cover-container yesy">

                    <div class="masthead clearfix">
                        <nav class="inner">



                            <ul class="nav masthead-nav yes text-center">
                                <!-- Desktop Menu -->
                                <li class="active">
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="/direction">Get Directions</a>
                                </li>

                            </ul>
                            <select id="mobileMenu">
                                <option value="" selected="selected">MENU</option>
                                <option value="/">Home</option>
                                <option value="/direction">Get Directions</option>
                                <!-- Custom Page -->


                            </select>


                        </nav>
                    </div>


                    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
                    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<div class="invite-main">
    <div class="inner cover cover asa">
        <style>
            .roundicon {
                visibility: visible !important;
            }
        </style>


        <h1 style="position: relative;margin-top: 100px;visibility: hidden; " class="roundicon">
            <img src="{{ asset('images/home.jpg') }}">
        </h1>


        <h1 class="cover-heading">

            Wilfreid &amp; Marie-T Traditional Wedding
        </h1>

        <p class="lead"></p>
        <p class="lead">

            Saturday, 23 December 2017

        </p>
        <span class="sub-text">
            CEREMONY Starts At 6:00 pm
        </span>

        <p class="lead" style="padding-top: 55px;">
            
        </p>
    </div>



</div>

</div>

</div>

</div>


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script src="{{ asset('js/placeholders.min.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->

<script>
    $(function () {
        $('#mobileMenu').on('change', function () {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
            return false;
        });

    });
    /* Fade out flash messages */
    if ($('.alert-fader').is(":visible")) {
        setTimeout(function () {
            $('.alert-fader').fadeOut();
        }, 5000);
    }
</script>




<!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
    $(window).load(function () { // makes sure the whole site is loaded
        $("#status").fadeOut(); // will first fade out the loading animation
        $("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
    })
    //]]>
    $(document).ready(function () {
        setTimeout(function () {
            $('#mobileMenu').addClass('animated wobble');
        }, 2000);
    });
</script>


<script>
    console.log('Hey There! We\'re looking for developers, send us your CV!');
</script>
<!-- Add Tracking Codes -->
<!-- Analytics -->

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-44724372-1', 'wedivite.com');
    ga('send', 'pageview');
    //Ecommerce
    ga('require', 'ecommerce');
</script>


<!-- Facebook Remarketing -->

<!-- Google Remarketing -->

<!-- Begin Inspectlet Embed Code -->
<script type="text/javascript" id="inspectletjs">
    window.__insp = window.__insp || [];
    __insp.push(['wid', 1748088359]);
    (function () {
        function __ldinsp() {
            var insp = document.createElement('script');
            insp.type = 'text/javascript';
            insp.async = true;
            insp.id = "inspsync";
            insp.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://cdn.inspectlet.com/inspectlet.js';
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(insp, x);
        }
        if (window.attachEvent) {
            window.attachEvent('onload', __ldinsp);
        } else {
            window.addEventListener('load', __ldinsp, false);
        }
    })();
</script>
<!-- End Inspectlet Embed Code -->



</body>

</html>