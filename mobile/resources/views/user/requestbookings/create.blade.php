<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <title>Request Booking | Lepas Suntuk</title>
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

    <section class="destinations-area section-gap" style="padding-top:55px;padding-bottom:0px;margin-top:55px; background: #ffffff;">
        <div class="container">
            <div class="row d-flex justify-content-center" style="padding-bottom:0px;">
                <div class="menu-content col-lg-12">
                    <div class="title text-center">
                        <h4 style="margin-top: -20px;margin-bottom: 20px; color:#004785"><b style="color:#004785;">Request Form Pemesanan Wisata</b></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="destinations-area section-gap" style="padding-top:0px;padding-bottom:0px;padding-top:0px; background: #ffffff;">
        <div class="container">
          <form class="" action="{{route('user.requestbookings.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
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
                <div class="col-lg-6 form-group">
                    <p><b style="color:#000">Nama *</b></p>
                    <input name="name" placeholder="Nama Anda" class="mb-10 form-control" value="{{Auth::user()->name}}" readonly required type="text">
                    @if ($errors->has('name'))
                      <span class="help-block">
                        <strong>{{$errors->first('name')}}</strong>
                      </span>
                    @endif
                    <p><b style="color:#000">No. Handphone *</b></p>
                    <input name="phone_number" placeholder="Contoh: 081...." class="mb-10 form-control" value="{{old('phone_number')}}" required type="number">
                    @if ($errors->has('phone_number'))
                      <span class="help-block">
                        <strong>{{$errors->first('phone_number')}}</strong>
                      </span>
                    @endif
                    <p><b style="color:#000">Email *</b></p>
                    <input name="email" placeholder="Email Anda" class="mb-10 form-control" readonly value="{{Auth::user()->email}}" required type="email">
                    @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{$errors->first('email')}}</strong>
                      </span>
                    @endif
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-5 form-group">
                            <p><b style="color:#000">Tgl Pergi *</b></p>
                            <input name="depart" id="depart" style="background-color: #fff;" value="{{old('depart')}}" class="mb-10 form-control" readonly required>
                            @if ($errors->has('depart'))
                              <span class="help-block">
                                <strong>{{$errors->first('depart')}}</strong>
                              </span>
                            @endif
                            <script>
                              var array = []

                              $('#depart').datepicker({
                                minDate: 3,
                                maxDate: 200,
                                beforeShowDay: function(date){
                                    var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                                    return [ array.indexOf(string) == -1 ]
                                }
                              });
                            </script>
                        </div>
                        <div class="col-xs-2 form-group">
                            <span class="fa fa-calendar fa-3x" style="margin-top:22px;"></span>
                        </div>
                        <div class="col-xs-5 form-group">
                            <p><b style="color:#000">Tgl Pulang *</b></p>
                            <input name="return" id="return" value="{{old('return')}}" style="background-color: #fff;" class="mb-10 form-control" readonly required>
                            @if ($errors->has('return'))
                              <span class="help-block">
                                <strong>{{$errors->first('return')}}</strong>
                              </span>
                            @endif
                            <script>
                              var array = []

                              $('#return').datepicker({
                                minDate: 4,
                                maxDate: 200,
                                beforeShowDay: function(date){
                                    var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                                    return [ array.indexOf(string) == -1 ]
                                }
                              });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-5 form-group">
                            <p><b style="color:#000">Budget *</b></p>
                            <input type="number" name="budget" placeholder="Contoh: 100000" value="{{old('budget')}}" class="mb-10 form-control" required>
                            @if ($errors->has('budget'))
                              <span class="help-block">
                                <strong>{{$errors->first('budget')}}</strong>
                              </span>
                            @endif
                        </div>
                        <div class="col-xs-2 form-group">
                        </div>
                        <div class="col-xs-5 form-group">
                            <p><b style="color:#000">Jml Orang *</b></p>
                            <input type="number" name="passanger" placeholder="Contoh: 10" value="{{old('passanger')}}" class="mb-10 form-control" required>
                            @if ($errors->has('passanger'))
                              <span class="help-block">
                                <strong>{{$errors->first('passanger')}}</strong>
                              </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 form-group">
                    <p><b style="color:#000">Detail Pemesanan *</b></p>
                    <textarea style="height: 250px;" class="form-control" placeholder="Detail Pesanan" name="detail" value="{{old('detail')}}" required></textarea>
                    @if ($errors->has('detail'))
                      <span class="help-block">
                        <strong>{{$errors->first('detail')}}</strong>
                      </span>
                    @endif
                </div>
            </div>
            <div class="text-center">
              <button type="submit" style="border-radius: 7px; text-align: center; display: inline-flex; flex-direction: column; justify-content: center; align-items: center;" class="genric-btn primary btn-block arrow mb-10">
                    Kirim Request
              </button>
            </div>
          </form>
        </div>
    </section>
</body>

</html>
