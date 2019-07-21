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
  <title>Booking | Lepas Suntuk</title>

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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i,700,700i,800,800i" rel="stylesheet">
  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #f2f5f6;
    }
  </style>

  <link rel="stylesheet" type="text/css" href="/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css">
  <script src="/slick/slick.js" type="text/javascript" charset="utf-8"></script>

</head>

<body>

  @include('layouts.header')

  <style>
    .list-paket {
            padding: 10px;
            display: block;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
            border-radius: 6px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
        }
    </style>
 <section class="col-md-12 mt-100 mb-5">
    <div class="col-md-10 col-md-offset-1">
	<div class="col-md-12">
      <ol class="breadcrumb" style="width:100%;padding:15px;border-radius:18px;background-color:#fff;margin-bottom:15px;">
        <li class>1. Pesan</li>
        <li class="active">2. Review</li>
        <li>3. Pembayaran</li>
      </ol>
    </div>
    </div>
	<div style="width:1000px; margin:auto;">
    <div class="col-md-12">
		<div class="col-md-12" style="width:100%;padding:15px;border-radius:12px;background-color:#fff; margin-bottom:15px;">
        <div class="row" style="padding:3px;">
          <div class="col-md-12">
            <h2 style="font-weight: 700; margin:0px;">{{$booking->tour->name}} </h2>
            <p><span class="fa fa-map-marker"></span> {{$booking->tour->location}}</p>
            <h2 style="font-weight: 600; margin:0px; font-size:17px;">Kode Booking : LS-505{{$booking->id}}</h2>
            <h2 style="font-weight: 600; margin:0px; font-size:17px;">Sisa Waktu : <span id="count"></span>
            
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
            </h2>
            
                <div class="text-center mt-10 mb-10">
                    <label style="padding:9px;border-radius:5px;background:#2284d6;width:100%;color:#fff;">Review Pesanan</label>
                </div>
                <div class="text-center mt-10">
                    <label style="padding:9px;border-radius:5px;background:#f1f1f1;width:100%;color:#000;">
                        <span class="pull-left">NAMA</span>
                        <span class="pull-right">{{$booking->name}}</span>
                    </label>
                </div>
                <div class="text-center">
                    <label style="padding:0px 9px 0px 9px;border-radius:5px;background:#fff;width:100%;color:#000;">
                        <span class="pull-left">NO HANDPHONE</span>
                        <span class="pull-right">{{$booking->phone_number}}</span>
                    </label>
                </div>
                <div class="text-center">
                    <label style="padding:9px;border-radius:5px;background:#f1f1f1;width:100%;color:#000;">
                        <span class="pull-left">JUMLAH PESERTA</span>
                        <span class="pull-right">{{$booking->tours_meta->passanger}} Orang</span>
                    </label>
                </div>
                <div class="text-center">
                    <label style="padding:0px 9px 0px 9px;border-radius:5px;background:#fff;width:100%;color:#000;">
                        <span class="pull-left">ALAMAT ASAL</span>
                        <span class="pull-right">{{$booking->address}}</span>
                    </label>
                </div>
                 <div class="text-center">
                    <label style="padding:9px;border-radius:5px;background:#f1f1f1;width:100%;color:#000;">
                        <span class="pull-left">ID LINE</span>
                        <span class="pull-right">{{$booking->id_line}}</span>
                    </label>
                </div>
                <div class="text-center">
                    <label style="padding:0px 9px 0px 9px;border-radius:5px;background:#fff;width:100%;color:#000;">
                        <span class="pull-left">ID INSTAGRAM</span>
                        <span class="pull-right">{{$booking->id_instagram}}</span>
                    </label>
                </div>
                 <div class="text-center">
                    <label style="padding:9px;border-radius:5px;background:#f1f1f1;width:100%;color:#000;">
                        <span class="pull-left">ALAMAT PENJEMPUTAN</span>
                        <span class="pull-right">{{$booking->pickup_address}}</span>
                    </label>
                </div>
                <div class="text-center">
                    <label style="padding:0px 9px 0px 9px;border-radius:5px;background:#fff;width:100%;color:#000;">
                        <span class="pull-left">EMAIL</span>
                        <span class="pull-right">{{$booking->email}}</span>
                    </label>
                </div>
                <div class="text-center">
                    <label style="padding:9px;border-radius:5px;background:#f1f1f1;width:100%;color:#000;">
                        <span class="pull-left">REQUEST TAMBAHAN</span>
                        <span class="pull-right"> @if ($booking->shuttle != 0)
                              @if ($booking->shuttle == 1)
                                Jemput di Juanda
                              @elseif ($booking->shuttle == 2)
                                Antar ke Juanda
                              @elseif ($booking->shuttle == 3)
                                Antar Jemput Juanda
                              @endif
                            @endif</span>
                    </label>
                </div>
                <!--<div class="text-center">-->
                <!--    <label style="padding:0px 9px 0px 9px;border-radius:5px;background:#fff;width:100%;color:#000;">-->
                <!--        <span class="pull-left">EMAIL</span>-->
                <!--        <span class="pull-right">{{$booking->email}}</span>-->
                <!--    </label>-->
                <!--</div>-->
                
                
                <div class="text-center mt-10 mb-10">
                    <label style="padding:9px;border-radius:5px;background:#2284d6;width:100%;color:#fff;">Rincian</label>
                </div>
                <div class="text-center mt-10">
                    <label style="padding:9px;border-radius:5px;background:#f1f1f1;width:100%;color:#000;">
                        <span class="pull-left">Paket {{$booking->tour->name}} {{$booking->tours_meta->passanger}} Orang</span>
                        <span class="pull-right"> {{number_format($booking->tours_meta->price * $booking->tours_meta->passanger , 0 , ',' , '.' )}}</span>
                    </label>
                </div>
                <div class="text-center">
                    <label style="padding:0px 9px 0px 9px;border-radius:5px;background:#fff;width:100%;color:#000;">
                        <span class="pull-left">Antar/Jemput Juanda</span>
                        <span class="pull-right">
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
                        </span>
                    </label>
                </div>
                <div class="text-center">
                    <label style="padding:9px;border-radius:5px;background:#f1f1f1;width:100%;color:#000;">
                        <span class="pull-left">Kode Unik</span>
                        <span class="pull-right">
                            {{number_format($booking->unique_code , 0 , ',' , '.' )}}
                        </span>
                    </label>
                </div>
                <div class="text-center">
                    <label style="padding:0px 9px 0px 9px;border-radius:5px;background:#fff;width:100%;color:#000;">
                        <span style="font-size: 18px" class="pull-left">Total Pembayaran</span>
                        <span class="pull-right">Rp {{number_format($booking->price_total , 2 , ',' , '.' )}}</span>
                    </label>
                </div>
                
            <div class="container">
            <div class="row">    
            <div class="text-center" style="margin-bottom:15px;">
            <a href="{{route('user.bookings.payment', $booking->id)}}" class="btn btn-block" style="background-color:#F29B00;color:#fff; margin-left: 272px;">Bayar Sekarang<a>
            </div>
            </div>
                
            
          </div>
        </div>
		</div>
    </div>
	</div>
 </section>




  @include('layouts.footer')

</body>

</html>
