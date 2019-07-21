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
    <title>Pesanan Saya | Lepas Suntuk</title>

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
    <style>
        body {
            font-family: 'ABeeZee', sans-serif;
        }
    </style>


</head>

<body style="background:#f4eeee">

    <header id="header" class="header-scrolled" style="background-image:linear-gradient(to bottom right, #004785, #3884C2);height: 68px;">
        <div class="container main-menu">
            <div class="col-xs-2" style="padding-right:0px;">
                <div class="pull-left">
                    <a href="/"><img style="height:19px;margin-top:5px;" src="/img/panah.png"></a>
                </div>
            </div>
            <div class="col-xs-8">
                <div class=" text-center">
                    <a href="/"></a>
                    <h4 style="color:#fff;margin-top:5px">Pesanan Saya</h4></a>
                </div>
            </div>
        </div>
        </div>
    </header>

    <div style="margin-top:75px;padding: 18px;">
        <div class="container" style="padding:15px;border-radius:15px;background:#fff">
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{session('status')}}
              </div>
          @endif
          @if (session('verified'))
              <div class="alert alert-success" role="alert">
                  Akun berhasil diverifikasi!
              </div>
          @endif
          @foreach($bookings->sortByDesc('id') as $booking)
            <div class="col-md-12" style="">
                <h3 style="color:#337ab7; font-size:medium;font-weight:700">{{$booking->tour->name}}</h3>
                <p style="color:#000;font-weight:500;font-size: small;margin:0px">{{$booking->date}}</p>
                <p style="color:#000;font-weight:500;font-size: small;margin:0px 0px 5px 0px;">Harga dibayar: <b style="color:#000">Rp {{number_format($booking->price_total , 2 , ',' , '.' )}}</b></p>
                <a href="{{route('user.bookings.review', $booking->id)}}" class="btn" style="background-color:#F29B00;color:#fff">Review Booking</a>
                <div style="border: #f4eeee solid 1px;padding:5px; margin-bottom:15px;">
                    <table style="color:#fff; width:100%; margin-bottom:">
                        <tbody>
                            <tr>
                                <th style="color:#000;font-weight:500;font-size: small;">Sisa Waktu:
                                </th>
                                <th style="color:#000;font-weight:500;font-size: small;" class="text-right">Status: <br> <b>
                                    @if ($booking->confirmation == null && $booking->confirmation !== 0 && (\Carbon\Carbon::now() < $booking->expired))
                                      Menunggu Pembayaran
                                    @elseif ($booking->confirmation == null && (\Carbon\Carbon::now() > $booking->expired))
                                      <p style="font-weight:500;font-size: small;" class="text-danger">Booking Gagal</p>
                                    @else
                                      @if ($booking->confirmation == 1)
                                        <p style="font-weight:500;font-size: small;" class="text-success">Booking Berhasil</p>
                                      @else
                                        <p style="font-weight:500;font-size: small;" class="text-danger">Booking Gagal</p>
                                      @endif
                                    @endif
                                  </b>
                                </th>
                            </tr>
                            <tr>
                                <th style="color:#000;font-weight:500;font-size: small;" class="text-left" id="count{{$booking->id}}">
                                </th>
                                <script>
                                  <?php
                                    $newtime = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $booking->expired)->addHours(-7)->toDateTimeString();
                                  ?>
                                  // Set the date we're counting down to
                                  var dateString{{$booking->id}} = "{{$booking->expired}}";
                                  var countDownDate{{$booking->id}} = new Date(dateString{{$booking->id}}.replace(' ', 'T')).getTime();

                                  // Update the count down every 1 second
                                  var x{{$booking->id}} = setInterval(function() {

                                    // Get todays date and time
                                    var now{{$booking->id}} = new Date().getTime();

                                    // Find the distance between now and the count down date
                                    var distance{{$booking->id}} = countDownDate{{$booking->id}} - now{{$booking->id}};

                                    // Time calculations for days, hours, minutes and seconds
                                    var hours{{$booking->id}} = Math.floor((distance{{$booking->id}} % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                    var minutes{{$booking->id}} = Math.floor((distance{{$booking->id}} % (1000 * 60 * 60)) / (1000 * 60));
                                    var seconds{{$booking->id}} = Math.floor((distance{{$booking->id}} % (1000 * 60)) / 1000);

                                    // Output the result in an element with id="demo"
                                    document.getElementById("count{{$booking->id}}").innerHTML = "<p class='text-info'>" + hours{{$booking->id}} + " jam "
                                    + minutes{{$booking->id}} + " menit " + seconds{{$booking->id}} + " detik " + "</p>";

                                    // If the count down is over, write some text
                                    if (distance{{$booking->id}} < 0) {
                                      clearInterval(x{{$booking->id}});
                                      document.getElementById("count{{$booking->id}}").innerHTML = "<p class='text-danger'>Kadaluarsa</p>";
                                    }
                                  }, 1000);
                                </script>
                                </script>
                                </script>
                                <th style="color:#000;font-weight:500;font-size: small;" class="text-right">
                                  @if (($booking->confirmation == null && $booking->confirmation !== 0) && (\Carbon\Carbon::now() < $booking->expired))
                                    <a target="_blank" href="http://api.whatsapp.com/send?phone=6281259807887&&text=Konfirmasi Pembayaran kode booking LS-{{$booking->id}} dengan bukti di bawah ini" style="margin-bottom: 5px; margin-top: 5px;" class="btn btn-success">Konfirmasi<a>
                                    <a href="{{route('user.bookings.payment', $booking->id)}}" class="btn btn-primary">Bayar Sekarang</a>
                                  @endif
                                  @if ($booking->confirmation == 1)
                                    <a href="{{route('user.bookings.print', $booking->id)}}" class="btn btn-success">Cetak Invoice</a>
                                  @endif
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
          @endforeach
        </div>
        <div>
            <div>
            </div><a>




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



            </a>
        </div>
    </div>



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
