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
  <title>Akun Saya | Lepas Suntuk</title>

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
          <a href="index.html"></a>
          <h4 style="color:#fff;margin-top:5px">Akun Saya</h4></a>
        </div>
      </div>
    </div>
    </div>
  </header>

  <div style="margin-top:55px;padding: 18px;">
    <div class="container" style="margin-top:15px; padding:15px;border-radius:15px;background:#fff">
      <div class="col-md-12">
        <div class="text-center">
          <!-- <img style="margin-bottom:15px;border-radius:8px; object-fit: cover;
                width:155px;
                height:155px;" src="/img/elements/g4.jpg" alt=""> -->
        </div>

        <div class="row" style="margin-top:15px;">
          <div class="col-lg-6 form-group" style="margin-bottom:0px">
            <p><b style="color:#000">Nama Lengkap</b></p>
            <input name="name" placeholder="Masukkan Nama" class="mb-10 form-control" value="{{$user->name}}" style="background-color: #fff" required="" type="text" readonly>
            <p><b style="color:#000">Email</b></p>
            <input name="email" placeholder="Masukkan Email" class="mb-10 form-control" value="{{$user->email}}" style="background-color: #fff" required type="email" readonly>
            <a href="/logout" class="btn btn-block" style="background-color:#F29B00;color:#fff">Log Out</a>
          </div>
        </div>
      </div>
    </div>
  </div>



</body>

</html>
