<html lang="en">
<head>
    <!-- Meta Tags
    ==============================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Cheetos, Chipsy Egypt, Doritos, Lay's, Pepsi, Potato chip, Snack food, Foods, Al Farouk Foods, ">
    <meta name="description" content="شركة الفاروق للصناعات الغذائية شركة مصرية بجودة عالمية بمنتجاتها المختلفة من خلال الوكلاء فى جميع محافظات الجمهورية">
    <meta name="copyright" content="Al Farouk Foods Company">
    <title> الفاروق فودز </title>
    <!-- Fave Icons
    ================================-->
    <link rel="shortcut icon" href="{{asset('public/site/images/fav-icon.png')}}">
    <!-- CSS Files
    ================================-->
    <link rel="stylesheet" href="{{asset('public/site/vendor/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('public/site/vendor/owl/owl.carousel.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{asset('public/site/vendor/aos/aos.css')}}">
    <link rel="stylesheet" href="{{asset('public/site/css/style.css')}}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7NGE131TQN"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-7NGE131TQN');
    </script>
</head>
<body>
<!--Start Modal
==========================================-->
<div class="modal fade" id="branch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" data-dismiss="modal" class="icon" >
                <i class="fa fa-times"></i>
            </button>
            <div id="branch-details"></div>
        </div>
    </div>
</div><!-- End Modal -->

@include('site.layouts.header')

<!--Start Content
        ==========================================-->
<div class="page-content" id="home">
    @yield('content')
</div><!--End Page content-->
@include('site.layouts.footer')
<!--Start Support
        ==========================================-->
<div class="support">
    <a href="https://web.whatsapp.com/send?phone=+2{{$settings->phone}}/" target="_blank" class="whats-web">
        <i class="fab fa-whatsapp"></i> تواصل معنا
    </a>
    <a href="https://wa.me/+2{{$settings->phone}}" target="_blank" class="whats-mob">
        <i class="fab fa-whatsapp"></i> تواصل معنا
    </a>
</div><!-- En Support -->
<!--Start Loader Wrap
==========================================-->
<div class="loader">
    <img src="{{asset('public/site/images/logo.png')}}">
    <div class="loader-cont">
        <div class="stick1"></div>
        <div class="stick2"></div>
        <div class="stick3"></div>
        <div class="stick4"></div>
    </div>
</div>
<!-- JS & Vendor Files
==========================================-->
<script src="{{asset('public/site/vendor/jquery/jquery.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="{{asset('public/site/vendor/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('public/site/vendor/owl/owl.carousel.js')}}"></script>
<script src="{{asset('public/site/vendor/parallax.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="{{asset('public/site/vendor/aos/aos.js')}}"></script>
<script src="{{asset('public/site/js/main.js')}}"></script>
<script>
    $(window).on("load", function () {
        if ($(window).width() >= 768) {
            AOS.init({
                offset: 20,
                duration: 500,
                easing: 'ease-in-out'
            });
        }
    });
</script>
@stack('js')
</body>
</html>