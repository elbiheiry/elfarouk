@extends('site.layouts.master')
@section('content')
    <!--Start Section
            ==========================================-->
    <section class="page-head">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3> المنتجات </h3>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('site.index')}}">
                                <i class="fa fa-home"></i>
                                الرئيسية
                            </a>
                        </li>
                        <li class="active"> المنتجات</li>
                    </ul>
                </div>
            </div><!--End Row-->
        </div><!--End Container-->
    </section><!-- End Section -->
    <!--Start Section
    ==========================================-->
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
                            <img src="{{asset('storage/app/public/products/'.$product->image)}}" data-aos="fade-right" data-aos-delay="600">
                        
                    </div><!-- End col -->
                </div><!--End Row-->
            </div>
        </div>
    @endforeach
@endsection