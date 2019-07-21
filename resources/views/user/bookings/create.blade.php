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
        <li class="active">1. Pesan</li>
        <li>2. Review</li>
        <li>3. Pembayaran</li>
      </ol>
    </div>

    <div class="col-md-12">
      <div class="col-md-12" style="width:100%;padding:15px;border-radius:18px;background-color:#fff;margin-bottom:15px;">

        <form class="" action="{{route('user.bookings.store', $tour->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          @if (session('error'))
              <div class="alert alert-danger" role="alert">
                  {{session('error')}}
              </div>
          @endif
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{session('status')}}
              </div>
          @endif
          <h2 style="font-weight: 700; margin:0px;">{{$tour->name}}</h2>
          <br>
		  <div class="row">
		  <div class="col-md-6">
          <div class="form-group">
              <label style="color:#337ab7;">NAMA *</label>
              <input type="text" class="form-control" name="name" placeholder="Contoh: Ronaldo" value="{{$user->name}}" required>
              @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{$errors->first('name')}}</strong>
                </span>
              @endif
          </div>
		  </div>
		  <div class="col-md-6">
		  <div class="form-group">
              <label style="color:#337ab7;">ID INSTAGRAM</label>
              <input type="text" class="form-control" name="id_instagram" value="{{old('id_instagram')}}" placeholder="Beri tanda (-) jika tidak ada">
              @if ($errors->has('id_instagram'))
                <span class="help-block">
                  <strong>{{$errors->first('id_instagram')}}</strong>
                </span>
              @endif
          </div>
		  </div>
          <div class="col-md-6">
		  <div class="form-group">
              <label style="color:#337ab7;">NOMOR HANDPHONE/WA *</label>
              <input type="text" class="form-control" name="phone_number" placeholder="Contoh: 08123456789" value="{{old('phone_number')}}" required>
              @if ($errors->has('phone_number'))
                <span class="help-block">
                  <strong>{{$errors->first('phone_number')}}</strong>
                </span>
              @endif
          </div>
		  </div>
          <div class="col-md-6">
		  <div class="form-group">
              <label style="color:#337ab7;">ID LINE</label>
              <input type="text" class="form-control" name="id_line" value="{{old('id_line')}}" placeholder="Beri tanda (-) jika tidak ada">
              @if ($errors->has('id_line'))
                <span class="help-block">
                  <strong>{{$errors->first('id_line')}}</strong>
                </span>
              @endif
          </div>
		  </div>
          <div class="col-md-6">
		  <div class="form-group">
              <label style="color:#337ab7;">ALAMAT ASAL *</label>
              <input type="text" class="form-control" name="address" value="{{old('address')}}" placeholder="Contoh: Jalan Mbappe no 1 Malang" required>
              @if ($errors->has('address'))
                <span class="help-block">
                  <strong>{{$errors->first('address')}}</strong>
                </span>
              @endif
          </div>
		  </div>
          <div class="col-md-6">
		  <div class="form-group">
              <label style="color:#337ab7;">ALAMAT PENJEMPUTAN</label>
              <input type="text" class="form-control" name="pickup_address" value="{{old('pickup_address')}}" placeholder="Contoh: Jalan Messi no 1 Malang">
              <div style="font-size:12px;margin-top:5px;">(Jika belum menentukan, dapat dikonfirmasi lebih lanjut)</div>
              @if ($errors->has('pickup_address'))
                <span class="help-block">
                  <strong>{{$errors->first('pickup_address')}}</strong>
                </span>
              @endif
          </div>
		  </div>
          <div class="col-md-6">
		  <div class="form-group">
              <label style="color:#337ab7;">PILIH TANGGAL *</label>
              <input style="line-height: 16px; background-color: #fff;" class="form-control" name="date" id="date" value="{{old('date')}}" required readonly>
              @if ($errors->has('date'))
                <span class="help-block">
                  <strong>{{$errors->first('date')}}</strong>
                </span>
              @endif
              <script>
                var array = [
                    @foreach ($tour->tours_dates as $date)
                      "{{$date->date}}",
                    @endforeach
                ]

                $('#date').datepicker({
                  minDate: 3,
                  maxDate: 200,
                  beforeShowDay: function(date){
                      var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                      return [ array.indexOf(string) == -1 ]
                  }
                });
              </script>
          </div>
		  </div>
          <div class="col-md-6">
		  @if ($tour->destination->province_id == 10)
		  @if ($tour->id != 8)
            <div class="form-group">
                <label style="color:#337ab7;">ANTAR JEMPUT JUANDA</label> <br>
                <select style="height: 38px;" name="shuttle" id="shuttle" class="form-control" required>
                  <option value="0">Tanpa Antar/Jemput (Rp 0)</option>
                  <option value="1">Jemput Juanda (Rp 250.000,00)</option>
                  <option value="2">Antar Juanda (Rp 250.000,00)</option>
                  <option value="3">Antar Jemput Juanda (Rp 500.000,00)</option>
                </select>
                @if ($errors->has('shuttle'))
                  <span class="help-block">
                    <strong>{{$errors->first('shuttle')}}</strong>
                  </span>
                @endif
            </div>
          @endif
          @endif
		  </div>
          <div class="col-md-6">
		  <div class="form-group">
              <label style="color:#337ab7;">JUMLAH PESERTA *</label>
              <select style="height: 38px;" name="tours_meta_id" id="tours_meta_id" class="form-control" required>
                @foreach($tourmetas->sortBy('passanger') as $tourmeta)
                  <option value="{{$tourmeta->id}}">{{$tourmeta->passanger}} orang (Rp {{number_format($tourmeta->price , 2 , ',' , '.' )}}/orang)</option>
                @endforeach
              </select>
              @if ($errors->has('tours_meta_id'))
                <span class="help-block">
                  <strong>{{$errors->first('tours_meta_id')}}</strong>
                </span>
              @endif
              <script type="text/javascript">
                  $.ajaxSetup({
                     headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
                  });
                  $('#tours_meta_id').on('change', function(e){
                      console.log(e);
                      var toursmeta = e.target.value;
                      //ajax
                      $.get('/user/bookings/toursmeta/' + toursmeta, function(data){
                          console.log(data);
                              $('#shuttle').empty();
                          $.each(data, function(index, subcatObj){
                              $('#shuttle').append('<option value ="'+ subcatObj.id +'">'+subcatObj.message+'</option>');
                          });
                      });
                  });
              </script>
          </div>
		  </div>
          <div class="col-md-6">
		  <div class="form-group">
              <label style="color:#337ab7;">EMAIL *</label>
              <input type="text" class="form-control" name="email" value="{{$user->email}}" placeholder="Contoh: fahmialfareza@icloud.com" readonly required>
              @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{$errors->first('email')}}</strong>
                </span>
              @endif
          </div>
		  </div>
		  <div class="col-md-12">
		   <div class="form-group">
            <div class="text-center">
              <button type="submit" style="border-radius:8px; width: 30%; margin-left: 330px;" class="genric-btn primary btn-block">Pesan Sekarang</button>
            </div>
          </div>
		  </div>
		  </div>
          
          
          
          
          
          
         
      </div>
  <!--<section class="footer navbar-fixed-bottom" style="background-color:#fff">-->
  <!--    <div class="col-xs-12" style="padding:10px 0px 15px 0px">-->
  <!--        <div class="col-xs-12">-->
  <!--            <div class="text-center">-->
  <!--                <button type="submit" class="btn btn-block" style="background-color:#F29B00;color:#fff">Pesan <span class="fa fa-shopping-cart"></span></button>-->
  <!--            </div>-->
  <!--        </div>-->
  <!--    </div>-->
  <!--</section>-->
  </form>

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
            <a href="#6" data-toggle="tab">Lokasi</a>
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
