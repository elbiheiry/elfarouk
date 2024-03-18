@extends('site.layouts.master')
@section('content')
    <!--Start Section
            ==========================================-->
    <section class="page-head">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3> من نحن </h3>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('site.index')}}">
                                <i class="fa fa-home"></i>
                                الرئيسية
                            </a>
                        </li>
                        <li class="active"> من نحن  </li>
                    </ul>
                </div>
            </div><!--End Row-->
        </div><!--End Container-->
    </section><!-- End Section -->
    <!--Start Section
  ==========================================-->
    <section class="section-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content text-right">
                        <h3 data-aos="fade-up" data-aos-delay="100">
                            {{$about->title}}
                        </h3>
                        <p data-aos="fade-up" data-aos-delay="200">
                            {{$about->description}}
                        </p>
                        <a href="{{route('site.products')}}" class="custom-btn" data-aos="fade-up" data-aos-delay="300">
                            المنتجات <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="{{route('site.agents')}}" class="custom-btn" data-aos="fade-up" data-aos-delay="400">
                            الوكلاء <i class="fa fa-angle-left"></i>
                        </a>
                    </div><!-- End About content -->
                </div><!-- End Col -->
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('storage/app/public/about/'.$about->image)}}" data-aos="zoom-in"
                             data-aos-delay="450">
                        <div class="video_cover">
                            <a data-fancybox
                               href="https://www.youtube.com/watch?v={{$about->video}}&ab_channel=AlFaroukFoods"
                               data-aos="zoom-in" data-aos-delay="500">
                                <i class="fa fa-play"></i>
                            </a>
                            <div class="player-wave" data-aos="zoom-in" data-aos-delay="550">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                    </div><!-- End About img -->
                </div><!-- End Col -->
            </div><!--End Row-->
        </div>
    </section><!-- End Section -->

    <!--Start Section
    ==========================================-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                        <h2>
                            {{$home->title3}}
                        </h2>
                        <p>
                            {{$home->description3}}
                        </p>
                    </div><!-- End About Content -->
                </div><!-- End col-->
                <div class="w-100"></div>
                @php(
                    $x = 100
                )
                @foreach($members as $member)
                    <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="{{$x}}">
                        <div class="team">
                            <img src="{{asset('storage/app/public/members/'.$member->image)}}">
                            <h3> {{$member->name}} </h3>
                            <p>
                                {{$member->position}}
                            </p>
                        </div>
                    </div><!-- End Col -->

                    @php(
                        $x+=100
                    )
                @endforeach
            </div><!--End Row-->
        </div><!--End Container-->
    </section><!-- End Section -->
@endsection