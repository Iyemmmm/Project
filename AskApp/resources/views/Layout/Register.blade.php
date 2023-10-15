<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Giftshop</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('rea-1.0.0') }}/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('rea-1.0.0') }}/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('rea-1.0.0') }}/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('rea-1.0.0') }}/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('rea-1.0.0') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('rea-1.0.0') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>
    <!--header section start -->
    <!--header section start -->
    <div class="header_section">
        <div class="container">
            <div class="">
                <div class="logo"><a href="index.html"><img src="{{ asset('rea-1.0.0') }}/images/logo.png"></a></div>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- banner section start -->
    <div class="banner_main">
        <div class="banner_section">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner_taital">
                        <h1 class="gifts_text">Register</h1>
                        <form class="col-lg-10" action="/Register" method="post">
                            @csrf
                            <div class="form-floating">
                                <label for="nama">Nama</label>
                                <input type="text" name="Nama"
                                class="form-control @error('Nama') is-invalid @enderror" id="nama" autofocus value="{{old('Nama')}}">
                                @error('Nama')
                                    <div class="invalid-feedback">
                                        {{$message}}                                 </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <label for="email">Email Address</label>
                                <input type="email" name="Email" class="form-control @error('Email') is-invalid @enderror" id="email" value="{{old('Email')}}">
                                @error('Email')
                                    <div class="invalid-feedback">
                                        {{$message}}                                  </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <label for="username">Username</label>
                                <input type="text" name="Username" class="form-control @error('Username') is-invalid @enderror" id="username" value="{{old('Username')}}">
                                @error('Username')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <label for="password">Password</label>
                                <input type="password" name="Password" class="form-control @error('Password') is-invalid @enderror" id="password" value="{{old('Password')}}">
                                @error('Password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <label for="password">Confirm Password</label>
                                <input type="password" name="Password_confirmation" class="form-control @error('Password_confirmation') is-invalid @enderror"
                                id="password">
                                @error('Password_confirmation')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <button class="btn btn-lg btn-primary mt-3">Register</button>
                        </form>
                        <p class="standerd_text">Already registered?<span><a style="color: blue" href="/">Login
                                    here</a></span></p>
                    </div>
                </div>
                <div class="col-md-6 ram">
                    <div class="right_img"><img src="{{ asset('rea-1.0.0') }}/images/img-1.png"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright">Copyright &copy; 2023 Willyam Brordus & Reihan Nabibie.All Rights Reserved.</p>
        </div>
    </div>
    <!-- Javascript files-->
    <script src="{{ asset('rea-1.0.0') }}/js/jquery.min.js"></script>
    <script src="{{ asset('rea-1.0.0') }}/js/popper.min.js"></script>
    <script src="{{ asset('rea-1.0.0') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('rea-1.0.0') }}/js/jquery-3.0.0.min.js"></script>
    <script src="{{ asset('rea-1.0.0') }}/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="{{ asset('rea-1.0.0') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('rea-1.0.0') }}/js/custom.js"></script>
    <!-- javascript -->
    <script src="{{ asset('rea-1.0.0') }}/js/owl.carousel.js"></script>
    <script src="{{ asset('rea-1.0.0') }}/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
</body>

</html>
