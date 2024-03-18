@extends('site.layouts.master')
@section('content')
    <!--Start Section
            ==========================================-->
    <section class="page-head">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3> الوكلاء </h3>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('site.index')}}">
                                <i class="fa fa-home"></i>
                                الرئيسية
                            </a>
                        </li>
                        <li class="active"> الوكلاء</li>
                    </ul>
                </div>
            </div><!--End Row-->
        </div><!--End Container-->
    </section><!-- End Section -->
    <!--Start Section
    ==========================================-->
    <section class="section-color">
        <div class="container">
            @foreach($branches as $branch)
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-info">
                            <img src="{{asset('storage/app/public/branches/'.$branch->image)}}">
                            <h3>{{$branch->name}}</h3>
                            <div class="info">
                                <i class="fa fa-map-marker"></i>
                                <div>
                                    <span> العنوان </span>
                                    {{$branch->address}}
                                </div>
                            </div>
                            <div class="info">
                                <i class="fa fa-phone"></i>
                                <div>
                                    <span>رقم الهاتف </span>
                                    <a href="tel:+{{$branch->phone}}"> {{$branch->phone}} </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Col -->
                    <div class="col-lg-6">
                        <iframe src="{{$branch->map}}" width="100%" height="350" frameborder="0" style="border:0;"
                                allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div><!-- End Row -->
            @endforeach
        </div><!--End Container-->
    </section><!-- End Section -->
@endsection