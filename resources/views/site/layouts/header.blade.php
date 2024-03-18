<!--Start Header
        ==========================================-->
<header>
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{route('site.index')}}" class="logo">
                    <img src="{{asset('public/site/images/logo.png')}}">
                </a><!--End logo -->
                <ul class="header_links">
                    <li>
                        <a href="{{$settings->instagram}}" target="_blank" class="colored-cursor">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{$settings->youtube}}" target="_blank" class="colored-cursor">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{$settings->facebook}}" target="_blank" class="colored-cursor">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="icon-bar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </li>
                </ul>
            </div><!--End col-->
        </div><!--End row-->
    </div><!--End Container-->
</header><!--End Header-->
<!--Start Aside
==========================================-->
<aside>
    <button type="button" class="icon-btn">
        <i class="fa fa-times"></i>
    </button>
    <ul>
        <li><a href="{{route('site.index')}}"> الصفحة الرئيسية </a></li>
        <!--<li><a href="{{route('site.about')}}"> من نحن </a></li>-->
        <li><a href="{{route('site.products')}}"> المنتجات </a></li>
        <!--<li><a href="{{route('site.agents')}}">  الوكلاء </a></li>-->
        <li><a href="{{route('site.media')}}"> الميديا </a></li>
        <li><a href="{{route('site.contact')}}"> تواصل معنا </a></li>
    </ul><!-- End Ul -->
    <ul class="social">
        <li>
            <a href="tel:{{$settings->phone}}" target="_blank">
                <i class="fa fa-phone"></i> {{$settings->phone}}
            </a>
        </li>
        <li>
            <a href="mailto:{{$settings->email}}" target="_blank">
                <i class="fa fa-envelope"></i> {{$settings->email}}
            </a>
        </li>
    </ul><!-- End Ul -->
</aside><!-- End Aside -->