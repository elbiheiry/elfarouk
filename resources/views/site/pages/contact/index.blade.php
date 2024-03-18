@extends('site.layouts.master')
@section('content')
    <!--Start Section
            ==========================================-->
    <section class="page-head">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3> تواصل معنا </h3>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('site.index')}}">
                                <i class="fa fa-home"></i>
                                الرئيسية
                            </a>
                        </li>
                        <li class="active"> تواصل معنا</li>
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
                    <div class="contact-info">
                        <h3> معلومات التواصل</h3>
                        <div class="info">
                            <i class="fa fa-map-marker"></i>
                            <div>
                                <span> العنوان </span>
                                {{$settings->address}}
                            </div>
                        </div>
                        <div class="info">
                            <i class="fa fa-phone"></i>
                            <div>
                                <span>المبيعات  </span>
                                <a href="tel:+{{$settings->sales}}"> {{$settings->sales}} </a>
                            </div>
                        </div>
                        <div class="info">
                            <i class="fa fa-phone"></i>
                            <div>
                                <span>الشكاوى والأقتراحات </span>
                                <a href="tel:{{$settings->complaints}}"> {{$settings->complaints}} </a>
                            </div>
                        </div>
                        <div class="info">
                            <i class="fa fa-envelope"></i>
                            <div>
                                <span> البريد الألكترونى</span>
                                <a href="mailto:{{$settings->email}}" target="_blank">
                                    {{$settings->email}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Col -->
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h3> إتصل بنا </h3>
                        <form method="post" id="contact-form" action="{{route('site.contact')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="الأسم" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="رقم الهاتف" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="الرسالة" name="message"></textarea>
                                    </div>
                                </div>
                                <button class="custom-btn" type="submit" id="submit-btn">
                                    إرسالة الرسالة <i class="fa fa-long-arrow-alt-left"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <iframe class="contact_iframe" src="{{$settings->map}}"
                            width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div><!--End Container-->
    </section><!-- End Section -->
@endsection
@push('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).on('submit', '#contact-form', function () {
            var form = $(this);
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            $('#save-btn').attr('disabled' , true).html('برجاء الانتظار');

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
                        button: "تم"
                    }).then(function (value) {
                        window.location.reload();
                    });
                },
                error: function (jqXHR) {
                    var response = $.parseJSON(jqXHR.responseText);
                    $('#save-btn').attr('disabled' , false).html('إرسالة الرسالة <i class="fa fa-long-arrow-alt-left"></i>');
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
@endpush