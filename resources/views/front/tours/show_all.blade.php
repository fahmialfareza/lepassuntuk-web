<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Paket Wisata | Lepas Suntuk</title>

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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i,700,700i,800,800i" rel="stylesheet">
  <style>
    body {
            font-family: 'Open Sans', sans-serif;
            background-color: #F2F5F6;
        }
    </style>

</head>

<body>

  @include('layouts.header')
  
  <section style="min-height:400px;background-image: url('/img/header-paketwisata.jpg');background-repeat:no-repeat;
    width: 100%;background-size:  contain; display: table;max-width: none;padding-top:15px; margin-bottom: -100px; margin-top: 66px; ">
  </section>

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
  <script>
    $(document).ready(function () {
            $("#hide").hide()
            $("#filter").hide();;
            $("#show").click(function () {
                $("#filter").show();
                $("#show").hide();
                $("#hide").show()
            });
            $("#hide").click(function () {
                $("#filter").hide();
                $("#show").show();
                $("#hide").hide()
            });
        });
    </script>
  <div class="col-md-12" style="margin-top:85px;margin-bottom:87px;">
	<div style="width:1000px; margin:auto;">
    <div class="col-md-3">
      <div class="col-md-12" style="width:100%;padding-top:15px;border-radius:18px;background-color:#fff;margin-bottom:15px;">
        <form action="">
          <div class="form-group">
            <p for="">Kota</p>
            <select name="destination_id" class="form-control" style="height:34px;">
              <option value="">Semua Destinasi</option>
              <?php foreach ($destinations as $destination): ?>
                <option value="{{$destination->id}}" @if($destination->id == $request->destination_id) selected @endif>{{$destination->name}}</option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <p for="">Durasi (hari)</p>
            <select value="{{$request->duration}}" name="duration" class="form-control" style="height:34px;">
              <option value="1"> 1 </option>
              <option value="2"> 2 </option>
              <option value="3"> 3 </option>
              <option value="4"> 4 </option>
            </select>  
            <!--<input name="duration" type="number" value="{{$request->duration}}" class="form-control">-->
          </div>
          <div class="form-group">
            <input type="hidden" name="search" value="{{Request::get('search')}}" >
            <input type="submit" class="btn btn-block btn-primary" value="Filter">
          </div>
        </form>

      </div>
    </div>
    <div class="col-md-9">
      @foreach($tours as $tour)
        <div class="col-md-12" style="width:100%;padding-top:15px;border-radius:18px;background-color:#fff;margin-bottom:15px;padding-bottom:15px;">
          <div class="col-md-3" style="padding-left:0px;">
            <img class="img-fluid" src="/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->main_photo}}" alt="" style="height: 165px; width: 100%; object-fit: cover; display: inline;border-radius:8px;">
          </div>
          <div class="col-md-7">
            <h4 style="font-weight: 700;">{{$tour->name}}</h4>
            <p style="font-weight: 600;"><span class="fa fa-map-marker"></span> {{$tour->destination->name}}</p>
            <p>{!!nl2br(substr($tour->description, 0, 225))!!}...</p>
          </div>
          <div class="col-md-2">
            <h4 style="font-size: 13px">Start From</h4>
            <h4>
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
              / orang
            </h4>
            <a href="{{route("tours.show", $tour->slug)}}" class="btn btn-warning">Detail</a>
          </div>
        </div>
      @endforeach
    </div>

</div>
  </div>

  @include('layouts.footer')

</body>

</html>
