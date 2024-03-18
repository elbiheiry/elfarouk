@extends('site.layouts.master')
@section('content')
    <!--Start Section
            ==========================================-->
    <section class="home_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 flex">
                    <div class="text">
                        <h1 data-aos="fade-up" data-aos-delay="100"> {{$home->title1}} </h1>
                        <p data-aos="fade-up" data-aos-delay="200">
                            {{$home->description1}}
                        </p>
                                                <a href="{{route('site.products')}}" class="custom-btn" data-aos="fade-up" data-aos-delay="300">
                            المنتجات <i class="fa fa-angle-left"></i>
                        </a>
                    </div>
                </div><!-- End Col -->
                <div class="col-lg-6 col-md-5" data-aos="fade-right" data-aos-delay="400">
                    <div class="product_item" id="move-img">
                        <img src="{{asset('storage/app/public/home/'.$home->image1)}}" class="layer" data-depth="-0.5">
                        <img src="{{asset('storage/app/public/home/'.$home->image2)}}" class="layer" data-depth="0.9">
                    </div>
                </div><!-- End Col -->
            </div><!--End Row-->
        </div><!--End Container-->
        <a href="#next" class="scroll-link" data-aos="fade-up" data-aos-delay="600">
            إلى الأسفل
        </a>
    </section><!--End Section-->
    <!--Start Section
    ==========================================-->
    <section id="next">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content text-right">
                        <h3 data-aos="fade-up" data-aos-delay="100">
                            {{$about->title}}
                        </h3>
                        <!--<p data-aos="fade-up" data-aos-delay="200">-->
                        <!--    {{$about->description}}-->
                        <!--</p>-->
                        
                        <a href="{{route('site.contact')}}" class="custom-btn" data-aos="fade-up" data-aos-delay="300">
                            تواصل معنا <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="{{route('site.products')}}" class="custom-btn" data-aos="fade-up" data-aos-delay="300">
                            المنتجات <i class="fa fa-angle-left"></i>
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
        </div><!--End Container-->
    </section><!-- End Section -->
    @foreach($products as $product)
        <div class="products_slid red">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 flex">
                        <div class="text">
                            <h1 data-aos="fade-up" data-aos-delay="100"> {{$product->name}} </h1>
                            <p data-aos="fade-up" data-aos-delay="200">
                                @php(
                                    $descriptions = explode("\n" , $product->description)
                                )

                                {{$descriptions[0]}}
                            </p>
                            <ul class="taste">
                                @foreach($product->ingredients as $ingredient)
                                    <li data-aos="fade-left" data-aos-delay="250">
                                        <img src="{{asset('storage/app/public/products/'.$ingredient->image)}}">
                                        {{$ingredient->name}}
                                    </li>
                                @endforeach
                                <li data-aos="fade-left" data-aos-delay="550">
                                    <a href="{{route('site.products.single' ,['slug' => $product->slug])}}"
                                       class="colored-cursor">
                                        <i class="fa fa-plus"></i>
                                        المزيد
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- End col -->
                    <div class="col-lg-5 col-sm-12 product_item" style="background-color: {{$product->color}}">
                            <img src="{{asset('storage/app/public/products/'.$product->image)}}" data-aos="fade-right"      data-aos-delay="600">
                        
                    </div><!-- End col -->
                </div><!--End Row-->
            </div>
        </div>
    @endforeach
    <!--Start Section
    ==========================================-->
    <section id="products" hidden>
        <div class="container-fluid">
            <div class="owl-carousel owl-theme products">
                @foreach($products as $product)
                    <div class="item products_slid red">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-7 col-sm-12 flex">
                                    <div class="text">
                                        <h1 data-aos="fade-up" data-aos-delay="100"> {{$product->name}} </h1>
                                        <p data-aos="fade-up" data-aos-delay="200">
                                            @php(
                                                $descriptions = explode("\n" , $product->description)
                                            )

                                            {{$descriptions[0]}}
                                        </p>
                                        <ul class="taste">
                                            @foreach($product->ingredients as $ingredient)
                                                <li data-aos="fade-left" data-aos-delay="250">
                                                    <img src="{{asset('storage/app/public/products/'.$ingredient->image)}}">
                                                    {{$ingredient->name}}
                                                </li>
                                            @endforeach
                                            <li data-aos="fade-left" data-aos-delay="550">
                                                <a href="{{route('site.products.single' ,['slug' => $product->slug])}}" class="colored-cursor">
                                                    <i class="fa fa-plus"></i>
                                                    المزيد
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- End col -->
                                <div class="col-lg-5 col-sm-12">
                                    <div class="product_item aos-init aos-animate" style="background-color: {{$product->color}}" data-aos="fade-right"
                                         data-aos-delay="600" >
                                        <img src="{{asset('storage/app/public/products/'.$product->image)}}">
                                    </div>
                                </div><!-- End col -->
                            </div><!--End Row-->
                        </div><!--End Container-->
                    </div><!-- End Item -->
                @endforeach
            </div><!--End owl-carousel-->
        </div><!--End Container-->
    </section><!-- End Section -->
    <!--Start Section
    ==========================================-->
    <section class="section-color" hidden>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                        <h2>
                            {{$home->title2}}
                        </h2>
                        <p>
                            {{$home->description2}}
                        </p>
                    </div><!-- End About Content -->
                </div><!-- End col-->
                <div class="col-lg-12">
                    @foreach($agents as $agent)
                        <div class="part shadow" data-aos="fade-left" data-aos-delay="200">
                            <img src="{{asset('storage/app/public/branches/'.$agent->image)}}">
                            <h3> {{$agent->name}}</h3>
                            <a data-url="{{route('site.branch',['id' => $agent->id])}}"
                               class="colored-cursor btn-modal-view">
                                المزيد <i class="fa fa-long-arrow-alt-left"></i>
                            </a>
                        </div><!--End Part-->
                    @endforeach
                </div><!-- End col -->
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="600">
                    <a href="{{route('site.agents')}}" class="custom-btn">
                        المزيد <i class="fa fa-long-arrow-alt-left"></i>
                    </a>
                </div>
            </div><!--End Row-->
        </div><!--End Container-->
    </section><!-- End Section -->
    <!--Start Section
    ==========================================-->
    <section hidden>
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
    <!--Start Section
    ==========================================-->
    <section class="section-color">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="section-title">
                        <h2>
                            {{$home->title4}}
                        </h2>
                        <p>
                            {{$home->description4}}
                        </p>
                    </div><!-- End About Content -->
                </div><!-- End col-->
                <div class="w-100"></div>
                @foreach($medias as $media)
                    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="gallery_item">
                            <img src="{{asset('storage/app/public/media/'.$media->image)}}">
                            @if($media->video == null)
                                <a href="{{asset('storage/app/public/media/'.$media->image)}}" data-fancybox="gallery"
                                   class="fa fa-image"></a>
                            @else
                                <a href="https://www.youtube.com/watch?v={{$media->video}}&ab_channel=AlFaroukFoods"
                                   data-fancybox="gallery" class="fa fa-video"></a>
                            @endif
                        </div>
                    </div><!-- End Col -->
                @endforeach
                <div class="w-100"></div>
                <a href="{{route('site.media')}}" class="custom-btn" data-aos="fade-up" data-aos-delay="800"> تحميل
                    المزيد </a>
            </div><!--End Row-->
        </div><!--End Container-->
    </section><!-- End Section -->
@endsection
@push('js')
    <script>
        $(document).on('click', '.btn-modal-view', function () {
            var $this = $(this);
            var url = $this.data('url');
            var originalHtml = $this.html();

            $.ajax({
                url: url,
                method: 'GET',
                success: function (data) {
                    $this.prop('disabled', false).html(originalHtml);
                    $('#branch-details').html(data);
                    $('#branch').modal('show');
                }
            });
        });
    </script>
@endpush