<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Register | Lepas Suntuk</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
    
    </head>

<body>

    @include('layouts.header')

    <section class="destinations-area section-gap" style="padding-top:55px;padding-bottom:0px;margin-top:55px; background: #ffffff;">
        <div class="container">
            <div class="row d-flex justify-content-center" style="padding-bottom:0px;">
                <div class="menu-content col-lg-12">
                    <div class="title text-center">
                        <h4 style="margin-top: -20px;margin-bottom: 20px; color:#004785">
                            <img src="/img/lepassuntukbiru.png" style="height:55px;">
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="destinations-area section-gap" style="padding-top:0px;padding-bottom:0px;padding-top:0px; background: #ffffff;">
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="container col-md-6 col-md-offset-3" style="
    border: 1px solid #ddd;
    padding: 30px;
    border-radius: 15px;
    margin-bottom: 28px;
            <div class="row">
                <div class="col-lg-12 form-group" style="margin-bottom:0px">
                    <p><b style="color:#000">Name</b></p>
                    <input id="name" type="text" class="mb-10 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama" required autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <p><b style="color:#000">Email</b></p>
                    <input id="email" type="email" class="mb-10 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <p><b style="color:#000">Password</b></p>
                    <input id="password" type="password" class="mb-10 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Masukkan Password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <p><b style="color:#000">Konfirmasi Password</b></p>
                    <input id="password-confirm" type="password" class="mb-10 form-control" name="password_confirmation" required>
                    <br>
                    <div class="text-center">
              <button type="submit" style="border-radius: 7px; text-align: center; display: inline-flex; flex-direction: column; justify-content: center; align-items: center;" class="genric-btn primary btn-block arrow mb-10">
                    DAFTAR
              </button>
                <!-- <a style="box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.22);" href="#" class="genric-btn primary circle arrow mb-10">Masuk<span class="lnr lnr-arrow-right"></span></a> -->
            </div>
                </div>
                
            </div>
            

            <style>
                .garis {
                    display: flex;
                    width: 100%;
                    justify-content: center;
                    align-items: center;
                    text-align: center;
                }

                .garis:before,
                .garis:after {
                    content: '';
                    color: #337ab7;
                    border-top: 1px solid;
                    margin: 0 20px 0 0;
                    flex: 1 0 20px;
                }

                .garis:after {
                    margin: 0 0 0 20px;
                }
            </style>

        </div>
      </form>
    </section>
    @include('layouts.footer')
</body>

</html>
