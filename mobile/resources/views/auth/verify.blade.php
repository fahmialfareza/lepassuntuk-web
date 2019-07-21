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
    <title>Verifikasi Email | Lepas Suntuk</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/linearicons.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/easing.min.js"></script>
    <script src="/js/hoverIntent.js"></script>
    <script src="/js/superfish.min.js"></script>
    <script src="/js/jquery.ajaxchimp.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/mail-script.js"></script>
    <script src="/js/main.js"></script>

</head>

<body>

    @include('auth.layouts.header')

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

      @if (session('resent'))
          <div class="alert alert-success" role="alert">
              {{ __('Resend link berhasil dikirimkan kembali. Silahkan cek email Anda kembali!') }}
          </div>
      @endif

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="container">

            <div class="col-lg-6 form-group text-center">
              {{ __('Sebelum melanjutkan, silahkan cek kotak masuk email untuk verifikasi. Jika tidak ada, silakan cek di folder spam.') }}
              {{ __('Jika belum menerima email') }}, <a href="{{ route('verification.resend') }}">{{ __('klik disini untuk resend link verifikasi') }}</a>.
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

            @include('auth.layouts.footer')

            </div>
        </div>
      </form>
    </section>
</body>

</html>
