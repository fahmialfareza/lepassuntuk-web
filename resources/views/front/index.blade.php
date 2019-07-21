<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <script type="text/javascript">
        if (screen.width <= 1081) {
            window.location = "https://m.lepassuntuk.com";
        }
  </script>
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
  <title>Lepas Suntuk | Paket Wisata Bromo Malang Batu</title>

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
      @font-face {
            font-family: 'museo500';
            src: url('/fonts/museo300-regular-webfont.woff2') format('woff2'),
                 url('/fonts/museo300-regular-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
      }    
  
    body{
		font-family: 'museo500', sans-serif;
	}
	
	.col-xs-2:hover {
  transform: scale(1.2,1.2);
  
  	}
  	
  	.col-md-4:hover {
  transform: scale(0.9,0.9);
  
  
  	}
	
	</style>

</head>

<body>

  @include('layouts.header')
  
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 480px;">
  <div class="carousel-inner" style="position: relative; top: 64px;">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/img/icon/header-01-dekstop.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/icon/header-02-dekstop.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/icon/header-03-dekstop.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
  <!-- <div style="background-image: url('/img/icon/header-01-desktop.jpg');background-repeat:no-repeat;-->
  <!--width: 100%;-->
  <!--padding: 0%;-->
  <!--background-size:  cover;-->
  <!--display: table;-->
  <!--margin: 0;-->
  <!--max-width: none;-->
  <!--background-color: #373B44;-->
  <!--height: 80vh;-->
  <!--background-position-y: 50px;-->
  <!--background-position-x: -83px;">-->
  <!--</div>-->

  <section style="margin-top:-90px;">

    <div class="container" style="width:70%;height:155px;padding-top:15px;border-radius:18px;background-color:#fff; position: relative;">
      <div class="row">
        <div class="col-md-3" style="padding-left:75px; padding-top: 18px;">
          <h2 style="font-weight:700; font-size: 26px; font-family: 'museo500', sans-serif">Yuk Liburan!</h2>
        </div>
        <div class="col-md-9" style="padding-right:35px; padding-top: 29px;">
            <a href="{{route('tours.show_all')}}">
                <div class="col-xs-2" style="padding-right:4px; width: 100px; transition: 0.3s;">
                    <div class="text-center single-destinations" style="min-height:80px;border-radius:8px;box-shadow: 0 5px 10px 1px rgba(0,0,0,.08);webkit-box-shadow: 0 5px 10px 1px rgba(0,0,0,.08);">
                        <div style="margin-top: 0px;padding:10px 25px 10px 25px;">
                            <img class="img-responsive" src="/img/icon/wisataa.png" alt="" style="width: 100%;padding-top:5px; transform: scale(1.4,1.4);">
                        </div>
                        <p style="font-size:10px; font-family: 'Open Sans', sans-serif; font-weight: 700; margin-top: 5px;">Paket Wisata</p>
                    </div>
                </div>
            </a>
            <a href="{{route('carrentals.show')}}">
                <div class="col-xs-2" style="padding-right:4px; width: 100px; transition: 0.3s;">
                    <div class="text-center single-destinations" style="min-height:80px;border-radius:8px;box-shadow: 0 5px 10px 1px rgba(0,0,0,.08);webkit-box-shadow: 0 5px 10px 1px rgba(0,0,0,.08);">
                        <div style="margin-top: 0px;padding:10px 25px 10px 25px;">
                            <img class="img-responsive" src="/mobile/img/icon/sewa-mobil.png" alt="" style="width: 100%;padding-top:5px; transform: scale(1.4,1.4); margin-top: 13px;">
                        </div>
                        <p style="font-size:10px; font-family: 'Open Sans', sans-serif; font-weight: 700; margin-top: 4px;">Sewa Mobil</p>
                    </div>
                </div>
            </a>
            <a href="{{route('villas.show_all')}}">
                <div class="col-xs-2" style="padding-right:4px; width: 100px; transition: 0.3s;">
                    <div class="text-center single-destinations" style="min-height:80px;border-radius:8px;box-shadow: 0 5px 10px 1px rgba(0,0,0,.08);webkit-box-shadow: 0 5px 10px 1px rgba(0,0,0,.08);">
                        <div style="margin-top: 0px;padding:10px 25px 10px 25px;">
                            <img class="img-responsive" src="/mobile/img/icon/villa.png" alt="" style="width: 100%;padding-top:5px; transform: scale(1.4,1.4);margin-top: 5px;">
                        </div>
                        <p style="font-size:10px; font-family: 'Open Sans', sans-serif; font-weight: 700;">Sewa Vila</p>
                    </div>
                </div>
            </a>
            <a href="/sewamotor">
                <div class="col-xs-2" style="padding-right:4px; width: 100px; transition: 0.3s;">
                    <div class="text-center single-destinations" style="min-height:80px;border-radius:8px;box-shadow: 0 5px 10px 1px rgba(0,0,0,.08);webkit-box-shadow: 0 5px 10px 1px rgba(0,0,0,.08);">
                        <div style="margin-top: 0px;padding:10px 25px 10px 25px;">
                            <img class="img-responsive" src="/mobile/img/icon/sewa-motor.png" alt="" style="width: 100%;padding-top:5px; transform: scale(1.4,1.4); margin-top: 13px;">
                        </div>
                        <p style="font-size:10px; font-family: 'Open Sans', sans-serif; font-weight: 700;">Sewa Motor</p>
                    </div>
                </div>
            </a>
            <a href="/outbound">
                <div class="col-xs-2" style="padding-right:4px; width: 100px; transition: 0.3s;">
                    <div class="text-center single-destinations" style="min-height:80px;border-radius:8px;box-shadow: 0 5px 10px 1px rgba(0,0,0,.08);webkit-box-shadow: 0 5px 10px 1px rgba(0,0,0,.08);">
                        <div style="margin-top: 0px;padding:10px 25px 10px 25px;">
                            <img class="img-responsive" src="/mobile/img/icon/outbound-icon.png" alt="" style="width: 100%;padding-top:5px; transform: scale(1.4,1.4); margin-top: 11px;">
                        </div>
                        <p style="font-size:10px; font-family: 'Open Sans', sans-serif; font-weight: 700;">Outbound</p>
                    </div>
                </div>
            </a>
            <a href="keretaapi">
                <div class="col-xs-2" style="padding-right:4px; width: 100px;transition: 0.3s;">
                    <div class="text-center single-destinations" style="min-height:80px;border-radius:8px;box-shadow: 0 5px 10px 1px rgba(0,0,0,.08);webkit-box-shadow: 0 5px 10px 1px rgba(0,0,0,.08);">
                        <div style="margin-top: 0px;padding:10px 25px 10px 25px;">
                            <img class="img-responsive" src="/mobile/img/icon/train.png" alt="" style="width: 100%;padding-top:5px; margin-top: 0px;">
                        </div>
                        <p style="font-size:10px; font-family: 'Open Sans', sans-serif; font-weight: 700;">Kereta Api</p>
                    </div>
                </div>
            </a>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="container text-center" style="margin-top: 30px; font-family: 'museo500'">
      <h2 style="color:#074e8c;font-weight:700;" class="mt-2 mb-50">Mengapa Memilih Lepas Suntuk?</h2>
    </div>
  </section>
  <div class="col-md-12 mb-50">
    <div class="col-sm-4" style="margin-bottom:15px">
      <div class="col-sm-4">
        <img src="img/icon/evertime-icon.png" class="img-responsive">
      </div>
      <div class="col-md-8">
        <h4 style="margin-top:15px;font-weight:700;">Berpengalaman</h4>
        <p>Selama 3 tahun kami menjadi teman Suntukers untuk berpetualang seru</p>
      </div>
    </div>

    <div class="col-sm-4" style="margin-bottom:15px">
      <div class="col-sm-4">
        <img src="img/icon/evertime-icon.png" class="img-responsive">
      </div>
      <div class="col-md-8">
        <h4 style="margin-top:15px;font-weight:700">Driver & Guide Ramah</h4>
        <p>Kami bersama tim yang professional siap menyajikan liburan menyenangkan</p>
      </div>
    </div>
    <div class="col-sm-4" style="margin-bottom:15px">
      <div class="col-sm-4">
        <img src="img/icon/evertime-icon.png" class="img-responsive">
      </div>
      <div class="col-md-8">
        <h4 style="margin-top:15px;font-weight:700">Itinerary Fleksibel</h4>
        <p>Menyediakan berbagai paket dan Suntukers bisa request sesuai keinginan </p>
      </div>
    </div>
    <div class="col-sm-4" style="margin-bottom:15px">
      <div class="col-sm-4">
        <img src="img/icon/evertime-icon.png" class="img-responsive">
      </div>
      <div class="col-md-8">
        <h4 style="margin-top:15px;font-weight:700">Akses Informasi Mudah</h4>
        <p>Teknologi yang terintegrasi memberikan kemudahan pemesanan dan informasi</p>
      </div>
    </div>
    <div class="col-sm-4" style="margin-bottom:15px">
      <div class="col-sm-4">
        <img src="img/icon/evertime-icon.png" class="img-responsive">
      </div>
      <div class="col-md-8">
        <h4 style="margin-top:15px;font-weight:700">Jemput Dimana Saja</h4>
        <p>Suntukers bisa dijemput di meeting point paket sesuai keinginan</p>
      </div>
    </div>
    <div class="col-sm-4" style="margin-bottom:15px">
      <div class="col-sm-4">
        <img src="img/icon/evertime-icon.png" class="img-responsive">
      </div>
      <div class="col-md-8">
        <h4 style="margin-top:15px;font-weight:700">Ready Setiap Hari</h4>
        <p>Suntukers bisa memilih waktu trip sesuai keinginan, kami siap menemani setiap hari</p>
      </div>
    </div>
  </div>
  <section>
    <div class="container text-center">
      <h2 style="color:#074e8c;font-weight:700" class="mt-50">Paket Seru-seruan</h2>
      <h4 style="color:#000;font-weight:700;" class="mt-2 mb-30">Dunia lebih luas dari meja kerjamu. Yuk! liburan bareng Lepas Suntuk<h4>
    </div>
  </section>
  <section>
    <div class="col-md-12">
        @foreach ($tours->sortByDesc('viewed') as $tour)
        <div class="col-md-4 destination" style="margin-bottom:15px; transition: 0.3s;">
            <a href="{{route('tours.show', $tour->slug)}}" style="text-decoration: none;">
                <div class="single-destination">
                    <div class="thumb">
                        <img class="img-fluid" src="/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->main_photo}}" alt="" style="height: 250px; width: 100%; object-fit: cover; display: inline;border-radius:8px;">
                    </div>
                    <div class="desc">
                        <h2 style="color:#fff;text-shadow: 2px 2px 4px #000000; font-family: 'Open Sans', sans-serif; font-size: 22px; font-weight: 700;">{{$tour->name}}</h2>
                        <div class="col-xs-12" style="margin-top:95px;color:#fff;">

                            <div class="col-xs-12" style="background: linear-gradient(to bottom,rgba(0, 0, 0, 0.49),rgba(0,0,0,.02));margin-top:-10px">
                                <div class="row" style="margin-top: 24px;">
                                    <div class="col-xs-6 text-left">
                                        <h4 style="color:#fff; font-family: 'Open Sans', sans-serif;"><span style="font-weight: 600">Durasi {{$tour->durations}} Hari</span></h4>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <h4 style="color:#fff; font-family: 'Open Sans', sans-serif"><span style="font-weight: 600">Start From</span></h4>
                                        <h4 style="color:#f8b600; font-family: 'Open Sans', sans-serif"><span style="font-weight: 600">Rp @if ($tour->tours_metas->sortBy('price')->first()->price >= 100000000)
                                                {{substr($tour->tours_metas->sortBy('price')->first()->price, 0, 6)}}K/orang
                                                @elseif ($tour->tours_metas->sortBy('price')->first()->price >= 10000000)
                                                {{substr($tour->tours_metas->sortBy('price')->first()->price, 0, 5)}}K/orang
                                                @elseif ($tour->tours_metas->sortBy('price')->first()->price >= 1000000)
                                                {{substr($tour->tours_metas->sortBy('price')->first()->price, 0, 4)}}K/orang
                                                @elseif ($tour->tours_metas->sortBy('price')->first()->price >= 100000)
                                                {{substr($tour->tours_metas->sortBy('price')->first()->price, 0, 3)}}K/orang
                                                @elseif ($tour->tours_metas->sortBy('price')->first()->price >= 10000)
                                                {{substr($tour->tours_metas->sortBy('price')->first()->price, 0, 2)}}K/orang
                                                @endif</span></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
  </section>
  <section>
    <div class="text-center">
      <a style="border-radius:8px; font-family: 'Open Sans', sans-serif;" href="/tours" class="genric-btn primary">Lihat semua paket...</a>
    </div>
  </section>
  <section>
    <div class="container text-center">
      <h2 style="color:#074e8c;font-weight:700;" class="mt-50">Yuk Explore di Berbagai Kota Indonesia</h2>
      <h4 style="color:#000;font-weight:700;" class="mt-2 mb-30">Tidak ada tempat yang membosankan, karena Indonesia seindah ini!<h4>
    </div>
  </section>
  <div class="col-md-12">
      <div class="col-md-6" style="margin-bottom:15px;padding-right:0px;">
          @foreach($destinations as $destination)
            <a href="/tours?destination_id={{$destination->id}}">
              <div class="col-md-4" style="margin-bottom:1px;padding:5px; transition: 0.3s;">
                  <div class="single-destination">
                      <div class="thumb">
                          <img class="img-fluid" src="/photos/destinations/{{$destination->user_id}}/{{$destination->id}}/{{$destination->photo}}" alt="" style="height: 165px; width: 100%; object-fit: cover; display: inline;border-radius:8px;">
                      </div>
                      <!--<div class="desc">-->
                      <!--    <h5 style="color:#fff;text-shadow: 2px 2px 4px #000000;">{{$destination->name}}</h5>-->
                      <!--</div>-->
                  </div>
              </div>
            </a>
          @endforeach
      </div>
      <a href="/tours?destination_id={{$destination1->id}}">
        <div class="col-md-6" style="padding:0px;margin:0px">
            <div class="col-md-12" style="margin-bottom:15px;margin-bottom:1px;padding:5px">
                <div class=" single-destination">
                    <div class="thumb">
                        <img class="img-fluid" src="/photos/destinations/{{$destination1->user_id}}/{{$destination1->id}}/{{$destination1->photo}}" alt="" style="height: 343px; width: 100%; object-fit: cover; display: inline;border-radius:8px;">
                    </div>
                    <div class="desc">
                        <!--<h5 style="color:#fff;text-shadow: 2px 2px 4px #000000;">{{$destination1->name}}</h5>-->
                    </div>
                </div>
            </div>
        </div>
      </a>
  </div>
  <section>
    <div class="text-center" style="margin-bottom: 50px;">
      <a style="border-radius:8px; font-family: 'Open Sans', sans-serif;" href="/destinations" class="genric-btn primary">Selengkapnya</a>
    </div>
  </section>
 
  <div class="col-md-12" style="margin-bottom: 50px">
      <div class="col-md-6" style="margin-bottom:15px;">
          <div class="col-md-12 text-center">
              <h2 style="color:#074e8c;font-weight:700">Sewa Mobil Yuk!</h2>
          </div>
          <div class="col-md-12" style="margin-bottom:15px;">
            <a>
              <div class="single-destination">
                  <div class="thumb">
                      <img class="img-fluid" src="/photos/carrentals/{{$car->user_id}}/{{$car->id}}/{{$car->photo}}" alt="" style="height: 350px; width: 100%; object-fit: cover; display: inline;border-radius:8px;">
                  </div>
                  <div class="desc">
                      <div class="col-xs-12" style="margin-top:155px;color:#fff;">

                          <div class="col-xs-12" style="background: linear-gradient(to bottom,rgba(0, 0, 0, 0.49),rgba(0,0,0,.02));margin-top:70px">
                              <div class="row" style="margin-top: 24px;">
                                  <div class="col-xs-12 text-center">
                                      <h4 style="color:#fff; font-family: 'Open Sans', sans-serif; font-weight: 600"><span>Start From</span></h4>
                                      <h4 style="color:#f8b600; font-family: 'Open Sans', sans-serif; font-weight: 600"><span>
                                      Rp @if ($car->price_full_day >= 100000000)
                                        {{substr($car->price_full_day, 0, 6)}}K/hari
                                      @elseif ($car->price_full_day >= 10000000)
                                        {{substr($car->price_full_day, 0, 5)}}K/hari
                                      @elseif ($car->price_full_day >= 1000000)
                                        {{substr($car->price_full_day, 0, 4)}}K/hari
                                      @elseif ($car->price_full_day >= 100000)
                                        {{substr($car->price_full_day, 0, 3)}}K/hari
                                      @elseif ($car->price_full_day >= 10000)
                                        {{substr($car->price_full_day, 0, 2)}}K/hari
                                      @endif</span></h4>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
            </a>
          </div>
          <section>
              <div class="text-center">
                  <a style="border-radius:8px; font-family: 'Open Sans', sans-serif;" href="{{route('carrentals.show')}}" class="genric-btn primary">Lihat semua unit...</a>
              </div>
          </section>

      </div>

      <div class="col-md-6" style="margin-bottom:15px;">
          <div class="col-md-12 text-center">
              <h2 style="color:#074e8c;font-weight:700">Sewa Villa Batu</h2>
          </div>
          <div class="col-md-12" style="margin-bottom:15px;">
              <div class="single-destination">
                  <div class="thumb">
                      <img class="img-fluid" src="/photos/villas/{{$villa->user_id}}/{{$villa->id}}/{{$villa->main_photo}}" alt="" style="height: 350px; width: 100%; object-fit: cover; display: inline;border-radius:8px;">
                  </div>
                  <div class="desc">
                      <div class="col-xs-12" style="margin-top:155px;color:#fff;">

                          <div class="col-xs-12" style="background: linear-gradient(to bottom,rgba(0, 0, 0, 0.49),rgba(0,0,0,.02));margin-top:70px">
                              <div class="row" style="margin-top: 24px;">
                                  <div class="col-xs-12 text-center">
                                      <h4 style="color:#fff; font-family: 'Open Sans', sans-serif; font-weight: 600"><span>Start From</span></h4>
                                      <h4 style="color:#f8b600; font-family: 'Open Sans', sans-serif; font-weight: 600"><span>
                                        Rp @if ($villa->price >= 100000000)
                                          {{substr($villa->price, 0, 6)}}K/malam
                                        @elseif ($villa->price >= 10000000)
                                          {{substr($villa->price, 0, 5)}}K/malam
                                        @elseif ($villa->price >= 1000000)
                                          {{substr($villa->price, 0, 4)}}K/malam
                                        @elseif ($villa->price >= 100000)
                                          {{substr($villa->price, 0, 3)}}K/malam
                                        @elseif ($villa->price >= 10000)
                                          {{substr($villa->price, 0, 2)}}K/malam
                                        @endif
                                      </span></h4>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
          <section>
              <div class="text-center">
                  <a style="border-radius:8px; font-family: 'Open Sans', sans-serif;" href="/villas" class="genric-btn primary">Lihat semua villa...</a>
              </div>
          </section>

      </div>

  </div>
  <br>
  <br>
  
  <section>
    <div class="container text-center">
      <h2 style="color:#074e8c;font-weight:700;" class="mt-50">Gallery Suntukers!</h2>
      <h4 style="color:#000;font-weight:700;" class="mt-2 mb-30">Terima kasih telah menjadi bagian keluarga Suntukers!<h4>
    </div>
  </section>
  <section class="destinations-area" style="padding-top:0px;background: #ffffff;">

    <div class="col-xs-4" style="padding:0">
      <div class="single-destinations" style="margin-top: 0px;">
        <div class="single-destination relative" style="padding: 0px;margin-bottom: 0px;">
          <div class="thumb" style="padding: 0px;border-radius: 0%;">
            <a href="/mobile/img/gallerysuntukers/galsun1.jpg" class="img-gal">
              <img class="img-fluid" src="/mobile/img/gallerysuntukers/galsun1.jpg" alt="" style="border-radius: 0%;height: 250px;  width: 100%; object-fit: cover; display: inline;">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-4" style="padding:0">
      <div class="single-destinations" style="margin-top: 0px;">
        <div class="single-destination relative" style="padding: 0px;margin-bottom: 0px;">
          <div class="thumb" style="padding: 0px;border-radius: 0%;">
            <a href="/mobile/img/gallerysuntukers/galsun2.jpg" class="img-gal">
              <img class="img-fluid" src="/mobile/img/gallerysuntukers/galsun2.jpg" alt="" style="border-radius: 0%;height: 250px;  width: 100%; object-fit: cover; display: inline;">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-4" style="padding:0">
      <div class="single-destinations" style="margin-top: 0px;">
        <div class="single-destination relative" style="padding: 0px;margin-bottom: 0px;">
          <div class="thumb" style="padding: 0px;border-radius: 0%;">
            <a href="/mobile/img/gallerysuntukers/galsun3.jpg" class="img-gal">
              <img class="img-fluid" src="/mobile/img/gallerysuntukers/galsun3.jpg" alt="" style="border-radius: 0%;height: 250px;  width: 100%; object-fit: cover; display: inline;">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-4" style="padding:0">
      <div class="single-destinations" style="margin-top: 0px;">
        <div class="single-destination relative" style="padding: 0px;margin-bottom: 0px;">
          <div class="thumb" style="padding: 0px;border-radius: 0%;">
            <a href="/mobile/img/gallerysuntukers/galsun4.jpg" class="img-gal">
              <img class="img-fluid" src="/mobile/img/gallerysuntukers/galsun4.jpg" alt="" style="border-radius: 0%;height: 250px;  width: 100%; object-fit: cover; display: inline;">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-4" style="padding:0">
      <div class="single-destinations" style="margin-top: 0px;">
        <div class="single-destination relative" style="padding: 0px;margin-bottom: 0px;">
          <div class="thumb" style="padding: 0px;border-radius: 0%;">
            <a href="/mobile/img/gallerysuntukers/galsun5.jpg" class="img-gal">
              <img class="img-fluid" src="/mobile/img/gallerysuntukers/galsun5.jpg" alt="" style="border-radius: 0%;height: 250px;  width: 100%; object-fit: cover; display: inline;">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-4" style="padding:0">
      <div class="single-destinations" style="margin-top: 0px;">
        <div class="single-destination relative" style="padding: 0px;margin-bottom: 0px;">
          <div class="thumb" style="padding: 0px;border-radius: 0%;">
            <a href="/mobile/img/gallerysuntukers/galsun6.jpg" class="img-gal">
              <img class="img-fluid" src="/mobile/img/gallerysuntukers/galsun6.jpg" alt="" style="border-radius: 0%;height: 250px;  width: 100%; object-fit: cover; display: inline;">
            </a>
          </div>
        </div>
      </div>
    </div>

  </section>
  
   <section style="background-color:#E6E7E8;">
    <div class="col-md-12 mt-20 mb-10" style="padding:0px;">
      <div class="col-md-7 text-left">
        <h4 style="color:#000;font-weight:700">Berlangganan newsletter spesial promo dan penawaran terbaik<h4>
      </div>
      <div class="col-md-3">
        <input class="form-control" placeholder="Masukkan nama Anda">
      </div>
      <div class="col-md-2">
        <input style="background-color:#f8b600" class="btn btn-warning btn-block" type="submit" value="Berlangganan">
      </div>
    </div>
  </section>

   
    
  <section style="background-image: url('img/footer.jpg');background-repeat:no-repeat;
    width: 100%;background-size:  cover;display: table;max-width: none;padding-top:15px;">
    <div class="text-center">
      <p style="color: #FABF00; font-size: 30px; font-weight: 700; margin-bottom: 0px; margin-top: 30px; font-family: 'Open Sans', sans-serif; text-align: left; margin-left: 55px;">Kini Liburan Semakin Mudah dalam Gengggaman</p>
      <p style="color: #fff; font-size: 18px; margin-top: 0px; margin-bottom: 15px; font-family: 'Open Sans', sans-serif; text-align: left; margin-left: 58px;">Dapatkan banyak PROMO hanya dengan mendownload aplikasinya</p>
    </div>
    <div class="col-sm-6 text-center" style="margin-top: 63px;">
      <h4 style="color: #fff; font-size: 18px; margin-top: 0px; margin-bottom: 15px; font-family: 'Open Sans', sans-serif; text-align: left; margin-left: 58px;">Unduh Aplikasi Lepas Suntuk Sekarang!<h4>
          <a href="https://play.google.com/store/apps/details?id=app.com.lepassuntuk.lepassuntuk&hl=en_US"> <img src="img/googleplay-desktop.svg" style="width:200px;"> </a>
          <a href="https://play.google.com/store/apps/details?id=app.com.lepassuntuk.lepassuntuk&hl=en_US"> <img src="img/appstore-desktop.svg" style="width:200px;"> </a>
    </div>
    <div class="col-md-6 text-center">
      <img src="img/mockup-app.png" style="width: 200px; margin-top: -80px; margin-bottom: 33px; margin-right: -245px;">
    </div>
  </section>
  
    <!--<section style="margin-top:0px; padding:5px; margin-left: 0px;">-->
    <!--<div class="container">-->
    <!--    <div class="row">-->
    <!--        <div class="col-md-8 text-center">-->
    <!--            <div class="embed-responsive embed-responsive-16by9">-->
    <!--                <iframe style="height: 360px; width: 640px;" class="embed-responsive-item" src="https://www.youtube.com/embed/JKR2jBn2GkQ" allowfullscreen></iframe>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-md-4 text-center">-->
    <!--           <div class="embed-responsive embed-responsive-16by9">-->
    <!--                <iframe style="height: 360px; width: 640px;" class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--</section>-->

  
  
  @include('layouts.footer')


</body>

</html>
