@extends('site.layouts.master')
@section('content')
    <!--Start Section
            ==========================================-->
    <section class="page-head">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3> الميديا </h3>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('site.index')}}">
                                <i class="fa fa-home"></i>
                                الرئيسية
                            </a>
                        </li>
                        <li class="active"> الميديا</li>
                    </ul>
                </div>
            </div><!--End Row-->
        </div><!--End Container-->
    </section><!-- End Section -->
    <!--Start Section
    ==========================================-->
    <section class="section-color">
        <div class="container">
            <div class="row text-center" id="media-area">
                @include('site.pages.media.templates.media')
            </div>
            <div class="w-100"></div>
            <div class="row text-center">
                <button class="custom-btn" id="load-more-button" data-last="{{$medias->lastPage()}}"
                        data-count="{{$medias->currentPage()}}" data-aos="fade-in" data-aos-delay="600"> تحميل المزيد
                </button>
            </div><!--End Row-->
        </div><!--End Container-->
    </section><!-- End Section -->
@endsection
@push('js')
    <script>
        //load more button
        $(document).on('click', '#load-more-button', function () {

            var button = $(this);
            var url = "{{url()->current()}}";
            var last_page = parseInt($(this).attr('data-last'));
            var counter = parseInt($(this).attr('data-count')) + 1;

            $.ajax({
                url: url,
                method: 'GET',
                data: {page: counter, _token: $('input[name="_token"]').val()},
                success: function (response) {
                    button.attr('data-count', counter);
                    if (counter + 1 > last_page) {
                        button.css('display', 'none');
                    }
                    $('#media-area').append(response);

                }
            });
            return false;
        });
    </script>
@endpush