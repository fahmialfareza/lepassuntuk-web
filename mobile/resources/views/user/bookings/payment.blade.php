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
  <title>Pembayaran | Lepas Suntuk</title>

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
          <a href="{{route('user.bookings.index')}}"><img style="height:19px;margin-top:5px;" src="/img/panah.png"></a>
        </div>
      </div>
      <div class="col-xs-8">
        <div class=" text-center">
          <a href="index.html"></a>
          <h4 style="color:#fff;margin-top:5px">Metode Pembayaran</h4></a>
        </div>
      </div>
    </div>
    </div>
  </header>
  <div style="padding-top:0px;padding-bottom:15px;margin-top:0px; background: #3884C2;">
    <div class="container text-center" style="padding-top:80px;background: #3884C2;">
      <i>
        <h3 style="color:white;font-size:medium;margin:0px">Transfer</h3>
      </i>
    </div>
  </div>

  <div style="margin-top:0px;padding: 18px;">
    <div class="container" style="padding:15px;border-radius:15px;background:#fff">
      <div class="col-md-12" style="">
        <div class="text-center">
          <label style="font-size:19px;margin-top:10px"><img src="/img/bca.png" style="height:40px"></label>
        </div>
        <p style="color:#000;font-weight:500; text-align: justify;">Silahkan lakukan pembayaran melalui transfer Bank BCA ke nomor rekening BCA 3151012955 a.n Fadil Muarif.
        </p>
        <p style="color:#000;font-weight:500; text-align: justify;">Setelah melakukan pembayaran, harap melakukan konfirmasi ke WA 081259807887 dengan mengirim bukti transfer.
        </p>
        <div class="text-center">
          <h3 style="font-size:19px;margin-top:10px;color:#337ab7;font-size:medium">Kode Pemesanan</h3>
          <h4 style="font-size:19px;margin-top:10px;color:#337ab7;font-weight:700;">LS-505{{$booking->id}}</h4>
          <h3 style="font-size:19px;margin-top:10px;color:#337ab7;font-size:medium">Total Pembayaran</h3>
          <h4 style="font-size:19px;margin-top:10px;color:#337ab7;font-weight:700;">Rp {{number_format($booking->price_total , 2 , ',' , '.' )}}</h4>
        </div>
        <div class="text-center" style="margin-bottom:15px;">
          <a target="_blank" href="http://api.whatsapp.com/send?phone=6281259807887&&text=Konfirmasi Pembayaran {{$booking->name}} kode booking LS-505{{$booking->id}} dengan bukti di bawah ini" class="btn btn-success">Konfirmasi<a>
        </div>
        <div class="text-center" style="margin-bottom:15px;">
          <a href="{{route('user.bookings.index')}}" class="btn btn-block" style="background-color:#F29B00;color:#fff">Kembali ke Awal<a>
        </div>

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
