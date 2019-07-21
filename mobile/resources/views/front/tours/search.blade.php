<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <title>Cari "{{$request->search}}" | Lepas Suntuk</title>
    <link rel="shortcut icon" href="/img/fav.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/style/custom/bootstrap.min.css">
    <script src="/style/custom/jquery.min.js"></script>
    <script src="/style/custom/bootstrap.min.js"></script>
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

  <section class="destinations-area section-gap" style="padding-top:0px;padding-bottom:0px;padding-top:37px; background: #ffffff;">
    <div class="container">
      <div class="row">
        <div class="active-recent-blog-carusel">
          <div class="single-recent-blog-post item">
            <div class="single-destinations">
              <div class="single-destination">
                <div class="thumb" style="padding: 0px;">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid" src="/img/tour/1.jpg" alt="" style="height: 250px; width: 100%; object-fit: cover; display: inline;border-radius:0px;">
                </div>
                <div class="desc">
                  <div class="widget-wrap" style="background:none;padding: 0px 0px;border: 0px none;margin-top: 110px;">
                    <div class="single-sidebar-widget search-widget">
                      <form class="search-form" action="#">
                        <input placeholder="Mau Kemana?" name="search" type="text" value="{{$request->search}}">
                        <button type="submit"><i class="fa fa-search"></i></button>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-12">
                      <h4 style="font-size: 17px; text-align:left;color:#fff;text-shadow: 2px 2px 4px #000000;">Liburan Asyik dan Menyenangkan<br>Bareng Lepas
                        Suntuk</h4>
                    </div>
                  </div>
                  <img src="/img/curve.png" style="width:100%;margin-top:11px;">
                </div>

              </div>
            </div>
          </div>
          <div class="single-recent-blog-post item">
            <div class="single-destinations">
              <div class="single-destination">
                <div class="thumb" style="padding: 0px;">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid" src="/img/tour/1.jpg" alt="" style="height: 250px; width: 100%; object-fit: cover; display: inline;border-radius:0px;">
                </div>
                <div class="desc">
                  <div class="widget-wrap" style="background:none;padding: 0px 0px;border: 0px none;margin-top: 110px;">
                    <div class="single-sidebar-widget search-widget">
                      <form class="search-form" action="#">
                        <input placeholder="Mau Kemana?" name="search" type="text" value="{{$request->search}}">
                        <button type="submit"><i class="fa fa-search"></i></button>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-12">
                      <h4 style="font-size: 17px; text-align:left;color:#fff;text-shadow: 2px 2px 4px #000000;">Liburan Asyik dan Menyenangkan<br>Bareng Lepas
                        Suntuk</h4>
                    </div>
                  </div>
                  <img src="/img/curve.png" style="width:100%;margin-top:11px;">
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="padding-top:0px;padding-bottom:0px;margin-top:55px; background: #ffffff;">
    <div class="container">
      <div class="row d-flex justify-content-center" style="padding-bottom:0px;">
        <div class="menu-content col-lg-12">
          <div class="title text-center">
            <h4 style="margin-top: -20px;margin-bottom: 10px; color:#004785"><b style="color:#004785;">Cari "{{$request->search}}"</b></h4>
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
            @foreach($tours->sortByDesc('viewed') as $tour)
              <a href="{{route('tours.show', $tour->slug)}}">
                <div class="col-xs-6" style="
                  @if ($i % 2 == 0)
                    padding-right: 4px;
                  @else
                    padding-left: 4px;
                  @endif
                  margin-bottom:10px;">
                  <div style="position: relative; text-align: center; color: white; width: 100%;">
                    <img src="https://lepassuntuk.com/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->main_photo}}" style="height: 120px;  width: 100%; object-fit: cover; display: inline;border-radius: 3%;">
                    <div class="bottom-left" style="width:100%;  position: absolute; bottom: 0px; left: 0px;">
                      <div class="col-xs-12 text-center" style="padding:5px; color:#fff; background: rgba(143, 153, 159, 0.5);">
                        <b>
                          <p style="color:#fff;text-shadow: 2px 2px 4px #000000;">{{$tour->name}}</p>
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
</body>

</html>
