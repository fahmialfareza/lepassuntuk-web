<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, user-scalable=no" />
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
    <title>Review Pesanan | Lepas Suntuk</title>

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
    <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">


</head>

<body style="background:#f4eeee">

    <header id="header" class="header-scrolled" style="background-image:linear-gradient(to bottom right, #004785, #3884C2);height: 68px;">
        <div class="container main-menu">
            <div class="col-xs-2" style="padding-right:0px;">
                <div class="pull-left">
                    <a href="{{route('user.bookings.index')}}"><img style="height:19px;margin-top:5px;" src="/img/panah.png"></a>
                </div>
            </div>
            <div class="col-xs-8">
                <div class=" text-center">
                    <a href="index.html"></a>
                    <h4 style="color:#fff;margin-top:5px">Review</h4></a>
                </div>
            </div>
        </div>
        </div>
    </header>
    <div style="padding-top:0px;padding-bottom:21px;margin-top:0px; background: #3884C2;">
        <div class="container" style="padding-top:80px;background: #3884C2;">
            <table style="color:#fff; width:100%;">
                <tr>
                    <th>Jenis Paket:
                    </th>
                    <th class="pull-right">{{$booking->tour->name}}
                    </th>
                </tr>
                <tr>
                    <th>Kode Booking:
                    </th>

                    <th class="pull-right">LS-505{{$booking->id}}
                    </th>

                </tr>
                <tr>
                    <th>Sisa Waktu:
                    </th>
                    <th class="pull-right" id="count">
                    </th>
                    <script>
                      // Set the date we're counting down to
                      var dateString = "{{$booking->expired}}";
                      var countDownDate = new Date(dateString.replace(' ', 'T')).getTime();

                      // Update the count down every 1 second
                      var x = setInterval(function() {

                        // Get todays date and time
                        var now = new Date().getTime('GMT+0700');

                        // Find the distance between now and the count down date
                        var distance = countDownDate - now;

                        // Time calculations for days, hours, minutes and seconds
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        // Output the result in an element with id="demo"
                        document.getElementById("count").innerHTML = hours + " jam "
                        + minutes + " menit " + seconds + " detik ";

                        // If the count down is over, write some text
                        if (distance < 0) {
                          clearInterval(x);
                          document.getElementById("count").innerHTML = "Kadaluarsa";
                        }
                      }, 1000);
                    </script>
                </tr>
            </table>
        </div>
    </div>

    <div style="margin-top:0px;padding: 18px; margin-bottom:65px;">
        <div class="container" style="padding:15px;border-radius:15px;background:#fff">
            <div class="col-md-12" style="">
                <div class="text-center">
                    <label style="font-size:19px;">DATA PEMESAN</label>
                </div>
                <table style="color:#fff; width:100%; table-layout:fixed;">
                    <tr>
                        <th style="color:#337ab7;font-size:small">NAMA
                          <br><p style="color:#000;font-weight:500;font-size: small; word-wrap:break-word;">{{$booking->name}}</p>
                        </th>
                    </tr>
                    <tr style="border-bottom: 0px solid #e6e7e8;">
                        <th style="color:#337ab7;font-size:small; width: 30%;">NO HANDPHONE
                          <br><p style="color:#000;font-weight:500;font-size: small; word-wrap:break-word;">{{$booking->phone_number}}</p>
                        </th>
                    </tr>
                    <tr style="border-bottom: 0px solid #e6e7e8;">
                        <th style="color:#337ab7;font-size:small; width: 30%;">JUMLAH PESERTA
                          <br><p style="color:#000;font-weight:500;font-size: small; word-wrap:break-word;">{{$booking->tours_meta->passanger}} orang</p>
                        </th>
                    </tr>
                    <tr style="border-bottom: 0px solid #e6e7e8;">
                        <th style="color:#337ab7;font-size:small; width: 30%;">ALAMAT ASAL
                          <br><p style="color:#000;font-weight:500;font-size: small; word-wrap:break-word;">{{$booking->address}}</p>
                        </th>
                    </tr>
                    <tr style="border-bottom: 0px solid #e6e7e8;">
                        <th style="color:#337ab7;font-size:small; width: 30%;">ID LINE
                          <br><p style="color:#000;font-weight:500;font-size: small; word-wrap:break-word;">{{$booking->id_line}}</p>
                        </th>
                    </tr>
                    <tr style="border-bottom: 0px solid #e6e7e8;">
                        <th style="color:#337ab7;font-size:small; width: 30%;">ID INSTAGRAM
                          <br><p style="color:#000;font-weight:500;font-size: small; word-wrap:break-word;">{{$booking->id_instagram}}</p>
                        </th>
                    </tr>
                    <tr style="border-bottom: 0px solid #e6e7e8;">
                        <th style="color:#337ab7;font-size:small; width: 30%;">ALAMAT PENJEMPUTAN
                          <br><p style="color:#000;font-weight:500;font-size: small; word-wrap:break-word;">{{$booking->pickup_address}}</p>
                        </th>
                    </tr>
                    <tr style="border-bottom: 0px solid #e6e7e8;">
                        <th style="color:#337ab7;font-size:small; width: 30%;">EMAIL
                          <br><p style="color:#000;font-weight:500;font-size: small; word-wrap:break-word;">{{$booking->email}}</p>
                        </th>
                    </tr>
                    <tr style="border-bottom: 0px solid #e6e7e8;">
                        <th style="color:#337ab7;font-size:small; width: 30%;">ANTAR JEMPUT JUANDA
                          <br><p style="color:#000;font-weight:500;font-size: small; word-wrap:break-word;">
                            @if ($booking->shuttle != 0)
                              @if ($booking->shuttle == 1)
                                Jemput di Juanda
                              @elseif ($booking->shuttle == 2)
                                Antar ke Juanda
                              @elseif ($booking->shuttle == 3)
                                Antar Jemput Juanda
                              @endif
                            @endif
                          </p>
                        </th>
                    </tr>
                </table>
                <div class="text-center">
                    <label style="font-size:19px;margin-top:10px">RINCIAN</label>
                </div>
                <table style="color:#fff; width:100%; table-layout:fixed; line-height:20px; height: 155px;">
                    <tr style="border-bottom: 1px solid #e6e7e8">
                        <th style="color:#337ab7;font-size:small;">Paket {{$booking->tour->name}}  {{$booking->tours_meta->passanger}} Orang
                        </th>
                        <th style="color:#000;font-weight:500;font-size: small; margin-top: 8px;" class="pull-right">{{number_format($booking->tours_meta->price * $booking->tours_meta->passanger , 0 , ',' , '.' )}}
                        </th>
                    </tr>
                    <tr style="border-bottom: 1px solid #e6e7e8">
                        <th style="color:#337ab7;font-size:small;">Antar/Jemput Juanda
                        </th>
                        <th style="color:#000;font-weight:500;font-size: small; margin-top: 8px;" class="pull-right">
                          @if ($booking->shuttle != 0)
                            @if ($booking->shuttle == 1 || $booking->shuttle == 2)
                              @if ($booking->tours_meta->passanger >= 2 && $booking->tours_meta->passanger <= 7)
                                  250.000
                              @elseif ($booking->tours_meta->passanger >= 8 && $booking->tours_meta->passanger <= 13)
                                  500.000
                              @endif
                            @elseif ($booking->shuttle == 3)
                              @if ($booking->tours_meta->passanger >= 2 && $booking->tours_meta->passanger <= 7)
                                  500.000
                              @elseif ($booking->tours_meta->passanger >= 8 && $booking->tours_meta->passanger <= 13)
                                  1.000.000
                              @endif
                            @endif
                          @else
                            0
                          @endif
                        </th>
                    </tr>
                    <tr style="border-bottom: 1px solid #e6e7e8">
                        <th style="color:#337ab7;font-size:small;">Kode Unik
                        </th>
                        <th style="color:#000;font-weight:500;font-size: small; margin-top: 6px;" class="pull-right">{{number_format($booking->unique_code , 0 , ',' , '.' )}}
                        </th>
                    </tr>
                    <tr>
                        <th style="color:#337ab7;font-size:small;">
                        </th>
                        <th style="color:#000;font-weight:500;font-size: small; margin-top: 10px;" class="pull-right">{{number_format($booking->price_total , 0 , ',' , '.' )}}
                        </th>
                    </tr>
                </table>
                <div class="text-center">
                    <h3 style="font-size:19px;margin-top:20px;color:#337ab7;font-size:medium">Total Pembayaran</h3>
                    <h4 style="font-size:19px;margin-top:10px;color:#337ab7;font-weight:700;">Rp {{number_format($booking->price_total , 2 , ',' , '.' )}}</h4>
                </div>
            </div>
        </div>
    </div>

    <section class="footer navbar-fixed-bottom" style="background-color:#fff">
        <div class="col-xs-12" style="padding:10px 0px 15px 0px">
            <div class="col-xs-12">
                <div class="text-center">
                  @if (($booking->confirmation == null && $booking->confirmation !== 0) && (\Carbon\Carbon::now() < $booking->expired))
                    <a href="{{route('user.bookings.payment', $booking->id)}}" class="btn btn-block" style="background-color:#F29B00;color:#fff">Lanjutkan ke Pembayaran<a>
                  @endif
                </div>
            </div>
        </div>
        </div>
    </section>



    <script>
        /*
	Smooth scroll functionality for anchor links (animates the scroll
	rather than a sudden jump in the page)
*/
        $('.js-anchor-link').click(function(e) {
            e.preventDefault();
            var target = $($(this).attr('href'));
            if (target.length) {
                var scrollTo = (target.offset().top) - 130;
                $('body, html').animate({
                    scrollTop: scrollTo + 'px'
                }, 500);
            }
        });
    </script>
    <script>
        var div_top = $('.menu').offset().top;

        $(window).scroll(function() {
            var window_top = $(window).scrollTop();
            if (window_top > 250) {
                if (!$('.menu').is('.sticky')) {
                    $('.menu').addClass('sticky');
                }
            } else {
                $('.menu').removeClass('sticky');
            }
        });
    </script>

</body>

</html>
