@extends('site.layouts.master')
@section('content')
    <!--Start Section
            ==========================================-->
    <section class="page-head">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3> {{$product->name}} </h3>
                </div>
            </div><!--End Row-->
        </div><!--End Container-->
    </section><!-- End Section -->
    <!--Start Section
    ==========================================-->
    <div class="products_slid yellow">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-sm-12 flex">
                    <div class="text">
                        <h1 data-aos="fade-up" data-aos-delay="100"> {{$product->name}}  </h1>
                        @php
                            $descriptions = explode("\n" , $product->description);
                            $x = 200;
                        @endphp
                        @foreach($descriptions as $description)
                            <p data-aos="fade-up" data-aos-delay="{{$x}}">
                                {{$description}}
                            </p>
                            @php(
                                $x+=50
                            )
                        @endforeach
                    </div>
                </div><!-- End col -->
                <div class="col-lg-5 col-sm-12 product_item" style="background-color: {{$product->color}}">
                        <img src="{{asset('storage/app/public/products/'.$product->image)}}" data-aos="fade-right"
                         data-aos-delay="600" >
                                </div><!-- End col -->
            </div><!--End Row-->
        </div>
    </div>
    <!--Start Section
    ==========================================-->
    <section>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                        <h2>
                            النكهات والأطعم
                        </h2>
                    </div><!-- End About Content -->
                </div><!-- End col-->
                <div class="w-100"></div>
                @foreach($product->flavours as $flavour)
                    <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="taste_item">
                            <img src="{{asset('storage/app/public/products/'.$flavour->image)}}">
                            {{$flavour->name}}
                        </div>
                    </div><!-- End col-->
                @endforeach
            </div><!--End Row-->
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