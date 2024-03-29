<!DOCTYPE html>
    <html>
        <head>
            <!-- Meta Tags
            ======================-->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="author" content="">

            <!-- Title Name
            ================================-->
            <title>Elfarouk</title>

            <!-- Fave Icons
            ================================-->
            <link rel="shortcut icon" href="{{asset('public/admin/images/fav-icon.png')}}">

            <!-- Google Web Fonts
            ===========================-->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">

            <!-- Css Base And Vendor
            ===================================-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
                  media="all">
            <link rel="stylesheet" href="{{asset('public/admin/vendor/datepicker/jquery.datetimepicker.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/admin/vendor/jquery-ui/jquery-ui.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/admin/vendor/animation/animate.css')}}">

            <!-- Site Css
            ====================================-->
            <link rel="stylesheet" href="{{asset('public/admin/css/style.css')}}">
            <link rel="stylesheet" href="{{asset('public/admin/css/theme/default-theme.css')}}">
        </head>
        <body>
        <div class="log-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="login-register">
                            <div class="logo"><img src="{{asset('public/admin/images/logo.png')}}"></div>
                            <form class="login-form" method="post" action="{{route('login')}}">
                                @csrf
                                <div class="form-title">login</div>
                                <div class="alert alert-danger" role="alert" style="display: none;">

                                </div>
                                <div class="form-group">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" placeholder="email" autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           autocomplete="current-password" placeholder="Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="remember">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember">Remember me</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="custom-btn" type="submit">login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!--End row-->
            </div>
        </div>
        <!-- JS Base And Vendor
        ===================================-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{asset('public/admin/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/admin/vendor/datepicker/jquery.datetimepicker.full.min.js')}}"></script>
        <script src="{{asset('public/admin/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('public/admin/vendor/count-to/jquery.countTo.js')}}"></script>

        <!--JS Main
        ====================================-->
        <script src="{{asset('public/admin/js/main.js')}}"></script>
    </body>
</html>