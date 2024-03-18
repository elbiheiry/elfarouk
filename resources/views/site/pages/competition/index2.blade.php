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
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v9.0&appId=1082099135565414&autoLogAppEvents=1" nonce="Izutt1ax"></script>
        <script src="https://apis.google.com/js/platform.js"></script>
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                      
                        <h4 class="alert-text">
                            <i class="fa fa-smile"></i>
                            مبروك دخلت السحب معانا 
انتظرنا كسبان يعنى كسبااااااان ....
   </h4> <a href="{{route('site.index')}}" class="custom-btn">
      العودة للرئيسية
                        </a>
                       
                    </div>
                </div>
            </div>
        </div>
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
                        <div class="col-md-6 flex" data-aos="fade-right" data-aos-delay="100">
                            <div class="contact-form">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-title">
                                        اضمن انك تكون كسبان معانا واعمل اعجاب لصفحتنا على الفيس بوك اشتراك لقناتنا على اليوتيوب ومتابعه لصفحتنا على الانستجرام
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="compet_social">
                                                <a href="https://www.facebook.com/alfaroukfoods" target="_blank" class="colored-cursor">
                                                    <i class="fab fa-facebook facebook"></i> تابعنا على الفيسبوك
                                                </a>
                                           <div class="fb-like" data-href="https://www.facebook.com/alfaroukfoods" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="false"></div>
                                              </div>
                                              
                                            <div class="compet_social">
                                                <a href="https://www.youtube.com/channel/UCXn4azaEARC3qDaGGsojMOQ" target="_blank" class="colored-cursor">
                                                    <i class="fab fa-youtube youtube"></i> تابعنا على اليوتيوب
                                                </a>
                                                <div class="g-ytsubscribe" data-channelid="UCXn4azaEARC3qDaGGsojMOQ" data-layout="default" data-count="hidden"></div>
                                            </div>
                                            <div class="compet_social">
                                                <a href="https://www.instagram.com/alfaroukfoods/" target="_blank" class="colored-cursor">
                                                    <i class="fab fa-instagram instagram"></i> تابعنا على الأنستجرام
                                                </a>
                                                <a href="https://www.instagram.com/alfaroukfoods/" target="_blank" class="custom-btn instagram">
                                                    <i class="far fa-heart"></i>
                                                    متابعة
                                                </a>
                                            </div>
                                        </div>
                                        <button class="custom-btn" data-toggle="modal" data-target="#modal" type="button">
                                            تأكيد <i class="fa fa-long-arrow-alt-left"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- End Col -->
                    </div><!--End Row-->
                </div><!--End Container-->
            </section><!-- End Section -->
        </div><!--End Page content-->
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
    </body>
</html>