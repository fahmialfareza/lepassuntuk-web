<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, user-scalable=no" />
  <link rel="stylesheet" href="/style/custom/bootstrap.min.css">
  <script src="/style/custom/jquery.min.js"></script>
  <script src="/style/custom/bootstrap.min.js"></script>
  <title>Villa Terbaik | Lepas Suntuk</title>
  <!-- Favicon-->
  <link rel="shortcut icon" href="/img/fav.png">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="/css/linearicons.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/magnific-popup.css">
  <link rel="stylesheet" href="/css/jquery-ui.css">
  <link rel="stylesheet" href="/css/nice-select.css">
  <link rel="stylesheet" href="/css/animate.min.css">
  <link rel="stylesheet" href="/css/owl.carousel.css">
  <link rel="stylesheet" href="/css/main.css">
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

  @include('layouts.header')
  
   <section style="min-height:400px;background-image: url('/img/header-sewavilla.jpg');background-repeat:no-repeat;
    width: 100%;background-size:  contain; display: table;max-width: none;padding-top:15px; margin-bottom: -100px; margin-top: 66px; ">
   </section>

  <section style="padding-top:55px;padding-bottom:0px;margin-top:55px; background: #ffffff;">
    <div class="container">
      <div class="row d-flex justify-content-center" style="padding-bottom:0px;">
        <div class="menu-content col-lg-12">
          <div class="title text-center">
            <h1 style="margin-top: -20px;margin-bottom: 10px; color:#004785"><b style="color:#004785;">Villa Terbaik</b></h1>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="destinations-area section-gap" style="padding-top:0px;padding-bottom:10px;padding-top:0px; background: #ffffff;">
    <div class="container">
      <div class="row">
        <div class="col-xs-12" style="margin-bottom:5px">
          <div class="row">
            <?php
              $i = 0;
            ?>
            @foreach($villas as $villa)
              <a href="{{route('villas.show', $villa->name)}}">
                <div class="col-xs-6" style="
                @if ($i % 2 == 0)
                  padding-right: 4px;
                @else
                  padding-left: 4px;
                @endif
                margin-bottom:10px;">
                  <div style="position: relative; text-align: center; color: white; width: 100%;">
                    <img src="https://lepassuntuk.com/photos/villas/{{$villa->user_id}}/{{$villa->id}}/{{$villa->main_photo}}" style="height: 300px;  width: 100%; object-fit: cover; display: inline;border-radius: 3%;">
                    <div class="bottom-left" style="width:100%;  position: absolute; bottom: 0px; left: 0px;">
                      <div class="col-xs-12 text-center" style="padding:5px; color:#fff; background: rgba(143, 153, 159, 0.5);">
                        <b>
                          <p style="color:#fff;text-shadow: 2px 2px 4px #000000;">{{$villa->name}}</p>
                        </b>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <?php
                $i = $i + 1;
              ?>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  @include('layouts.footer')
</body>

</html>
