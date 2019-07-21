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
  <title>{{$tour->name}} | Lepas Suntuk</title>

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
      background-color: #F2F5F6;
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
	<div style="width:1000px; margin:auto;">
    <div class="col-md-9">
      <div class="col-md-12" style="width:100%;padding:15px;border-radius:12px;background-color:#fff; margin-bottom:15px;">
        <div class="row" style="padding:3px;">
          <div class="col-md-12">
            <h2 style="font-weight: 700; margin:0px;">{{$tour->name}}</h2>
            <p><span class="fa fa-map-marker"></span> {{$tour->destination->name}}</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row" style="padding:3px;">
            <img class="img-fluid" src="/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->main_photo}}" alt="" style="height: 400px; width: 100%; object-fit: cover; display: inline;border-radius:8px;">
          </div>
        </div>
        <div class="col-md-12">
          <div class="slider center">
            @for($i = 1; $i < 10; $i++)
                <?php
                    $photo = 'photo' . $i;
                ?>
                <?php
                    $spot = "spot" . $i;
                ?>
                @if ($tour->$photo != null)
                    <div style="padding:3px;">
                      <a href="/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->$photo}}" class="img-gal">
                        <img class="img-fluid" src="/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->$photo}}" alt="" style="border-radius: 0%;height: 150px;  width: 100%; object-fit: cover; display: inline;inline;border-radius:8px;">
                      </a>
                    </div>
                @endif
            @endfor
          </div>

          <script>
            $('.center').slick({
              centerMode: true,
              centerPadding: '60px',
              slidesToShow: 3,
              responsive: [{
                  breakpoint: 768,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                  }
                }
              ]
            });
          </script>


        </div>
      </div>

    </div>

    <div class="col-md-3">
      <div class="col-md-12" style="width:100%;padding:15px;border-radius:12px;background-color:#fff;margin-bottom:15px;">

        <p style="font-weight: 999; text-align: center;">Start From</p>
        <h3 style="font-weight:900; margin-top: -11px; text-align: center; color: #3884C2; font-size: 22px;">
        Rp
        <?php
          $price = $tour->tours_metas->sortBy('price')->first();
        ?>
        @if ($price->price >= 100000000)
          {{substr($price->price, 0, 6)}}K
        @elseif ($price->price >= 10000000)
          {{substr($price->price, 0, 5)}}K
        @elseif ($price->price >= 1000000)
          {{substr($price->price, 0, 4)}}K
        @elseif ($price->price >= 100000)
          {{substr($price->price, 0, 3)}}K
        @elseif ($price->price >= 10000)
          {{substr($price->price, 0, 2)}}K
        @endif
        / orang</h3>
        <h5 class="text-center" style="font-size: 10px"> Harga bisa berubah sewaktu-waktu tanpa ada pemberitahuan sebelumnya </h5>
        <!--<a href="#" class="btn btn-block btn-warning">Pesan Sekarang</a>-->
        <a href="{{route('user.bookings.create', $tour->id)}}" class="btn btn-block btn-warning">Pesan Sekarang</a>
        <p style="    text-align: center; margin-top: 10px; font-weight: 700;">Atau mau tanya-tanya dulu juga boleh, klik aja</p>
        <a target="_blank" href="http://api.whatsapp.com/send?phone=6281259807887&text=Halo kak saya mau tanya tentang {{$tour->name}}" class="btn btn-block btn-success">Chat Whatsapp</a>

      </div>
    </div>
    <div class="col-md-12">
      <div class="col-md-12" style="width:100%;padding:15px;border-radius:12px;background-color:#fff;margin-bottom:15px;">
        <!-- <div class="justify-content-center row"> -->
        <ul class="nav nav-tabs  justify-content-center">
          <li>
            <a href="#1" data-toggle="tab">Detail</a>
          </li>
          <li>
            <a href="#2" data-toggle="tab">Fasilitas</a>
          </li>
          <li>
            <a href="#3" data-toggle="tab">Harga</a>
          </li>
          <li>
            <a href="#4" data-toggle="tab">Catatan</a>
          </li>
          <li>
            <a href="#5" data-toggle="tab">Itenerary</a>
          </li>
          <li>
            <a href="#6" data-toggle="tab">Maps</a>
          </li>
        </ul>
        <!-- </div> -->
        <div class="tab-content ">
          <div class="tab-pane active" id="1">
            <p>{!!nl2br($tour->description)!!}</p>
          </div>
          <div class="tab-pane" id="2">
            <p>
              <ul class="list_ok" style="margin-left: 20px">
                {!!nl2br($tour->facilities)!!}
              </ul>
            </p>
          </div>
          <div class="tab-pane" id="3">
            <section class="destinations-area" style="padding-top:0px;padding-bottom:0px;margin-top:10px; background: #fff; color: #000">
                <div class="">
                    <table class="table">
                        <thead>
                        </thead>
                        <tbody>
                            @foreach($tour->tours_metas->sortBy('passanger') as $price)
                            <tr>
                                <td class="text-left">{{$price->passanger}} orang</td>
                                <td class="text-right">
                                    @if ($price->price >= 100000000)
                                    {{substr($price->price, 0, 6)}}K
                                    @elseif ($price->price >= 10000000)
                                    {{substr($price->price, 0, 5)}}K
                                    @elseif ($price->price >= 1000000)
                                    {{substr($price->price, 0, 4)}}K
                                    @elseif ($price->price >= 100000)
                                    {{substr($price->price, 0, 3)}}K
                                    @elseif ($price->price >= 10000)
                                    {{substr($price->price, 0, 2)}}K
                                    @endif
                                /orang </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
          </div>
          <div class="tab-pane" id="4">
            <p>
              <ul class="list_ok" style="margin-left: 20px">
                {!!nl2br($tour->notes)!!}
              </ul>
            </p>
          </div>
          <div class="tab-pane" id="5">
             <div class="col-md-12">
                 <p>{!!htmlspecialchars_decode(stripslashes($tour->itinerary))!!}</p>
             </div>
          </div>
          <div class="tab-pane" id="6">
            {!!htmlspecialchars_decode(stripslashes(str_replace('width="600" height="450"', 'width="100%" height="600"', $tour->map)))!!}
          </div>
        </div>
      </div>


    </div>
	</div>
  </section>

  @include('layouts.footer')

</body>

</html>
