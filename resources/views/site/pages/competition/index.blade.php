<html lang="en">
    <head>
        <!-- Meta Tags
    ==============================-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="">
        <meta name="copyright" content="">
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
        @include('site.layouts.header')
        <!--Start Content
            ==========================================-->
        <div class="page-content" id="home">
            <!--Start Section
                    ==========================================-->
            <section class="home_sec compet">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                            <div class="product_item">
                                <img src="{{asset('public/site/images/prize.png')}}">
                            </div>
                        </div><!-- End Col -->
                        <div class="col-lg-6 flex" data-aos="fade-right" data-aos-delay="100">
                            
                            <div class="contact-form">
                               
                                <form method="post" id="competition-form" action="{{route('site.competition.store')}}">
                                    @csrf
                                    <input type="hidden" name="longitude" id="longitude">
                                    <input type="hidden" name="latitude" id="latitude">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-title">مع الفاروق فودز ادخل السحب وكسبان يعنى كسباااااااان</div>
                                             <ul>
                                    <li> 1- 
                                        إدخل بياناتك بشكل صحيح
                                    </li>
                                    <li>
                                        2- السماح بالوصول لموقعك
                                    </li>
                                </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> الأسم </label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> رقم الهاتف </label>
                                                <input type="text" class="form-control" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> المحافظة </label>
                                                <input type="text" class="form-control" name="government">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> السن </label>
                                                <input type="number" class="form-control" name="age">
                                            </div>
                                        </div>
                                        <button class="custom-btn" id="save-btn">
                                            التالى <i class="fa fa-long-arrow-alt-left"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- End Col -->
                    </div><!--End Row-->
                </div><!--End Container-->
            </section><!-- End Section -->
        </div>
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

            $(document).on('submit', '#competition-form', function () {
                var form = $(this);
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                $('#save-btn').attr('disabled', true).html('برجاء الانتظار');

                $.ajax({
                    url: url,
                    method: 'POST',
                    dataType: 'json',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (response) {
                        swal({
                            title: "تم بنجاح",
                            text: response,
                            icon: "success",
                            showCancelButton: false,
                            showConfirmButton: false
                        });

                        setTimeout(function () {
                            window.location.href = "{{route('site.competition.social')}}";
                        } , 2000);
                    },
                    error: function (jqXHR) {
                        var response = $.parseJSON(jqXHR.responseText);
                        $('#save-btn').attr('disabled', false).html('التالى  <i class="fa fa-long-arrow-alt-left"></i>');
                        swal({
                            title: "خطا",
                            text: response,
                            icon: "error",
                            button: "تم"
                        });
                    }
                });

                $.ajaxSetup({
                    headers:
                        {
                            'X-CSRF-Token': $('input[name="_token"]').val()
                        }
                });
                return false;
            });

        </script>
        <script>
            var x = document.getElementById("demo");

            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
            }

            function showPosition(position) {
                // x.innerHTML = "Latitude: " + position.coords.latitude +
                //     "<br>Longitude: " + position.coords.longitude;

                $('#longitude').val(position.coords.longitude);
                $('#latitude').val(position.coords.latitude);
            }

            getLocation();
        </script>

    </body>
</html>
