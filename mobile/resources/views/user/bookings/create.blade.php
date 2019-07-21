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


</head>

<body>

    <header id="header" class="header-scrolled" style="background-image:linear-gradient(to bottom right, #004785, #3884C2);height: 68px;">

        <div class="container main-menu">
            <div class="col-xs-2" style="padding-left:0px;">
                <div class="pull-left">
                    <a href="{{route('tours.show', $tour->slug)}}"><img style="height:19px;margin-top:5px;" src="/img/panah.png"></a>
                </div>
            </div>
            <div class="col-xs-8">
                <div class=" text-center">
                    <a href="index.html"></a>
                    <h4 style="color:#fff;margin-top:5px">Pesan Paket</h4></a>
                </div>
            </div>


        </div>
        </div>
    </header>


    <style>
        .menu {
    width: 100%;
    z-index: 99;
	text-align:center;
    position: static;
}

.menu.sticky {
    position: fixed;margin-top:67px;
    top: 0;
	text-align:center;
	padding:15px;
    background: #0574BF;
    position: fixed;
	height:55px;
    top: 0;
}

/* PAGE STYLING FOR DEMO. IGNORE */

.menu {
    padding: 0;
	margin-top:-10px;
	padding:15px;
    background: #0574BF;
}

.menu-item {
    font-size: 15px;
	font-family: inherit;
    font-weight: 500;
    border: none;
    display: inline-block;

}

.menu-item:first-child {
    margin-left: 0;
}

@keyframes menu-link-fade {
    from {
        color: #000;
    }
    to {
        color: #0078d7;
    }
}

@keyframes menu-border-fade {
    from {
        border-color: #fff;
    }
    to {
        border-color: #0078d7;
    }
}
	</style>


    <section class="destinations-area section-gap" style="padding-top:0px;padding-bottom:0px;padding-top:37px; background: #ffffff;" id="deskripsi">
        <div class="container" style="width: 100%;position: relative; text-align: center; color: white;">
            <div class="row">
                <div style="position: relative; text-align: center; color: white; width: 100%;">
                    <img src="https://lepassuntuk.com/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->main_photo}}" alt="Snow" style="width:100%;">
                    <div class="bottom-left" style="padding:0px;width:100%;  position: absolute; bottom: 0px; left: 0px;">
                        <div class="col-xs-12 text-left" style="color:#fff; margin-top:205px;background: rgba(5, 116, 191,0.5);">
                            <h4 style="font-family: 'ABeeZee', sans-serif;">{{$tour->name}}</h4>
                            <h5 style="font-family: 'ABeeZee', sans-serif;">{{$tour->location}}</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="destinations-area" style="padding-top:0px;padding-bottom:75px;margin-top:10px; background: #ffffff;">
        <div class="container">
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
                <div class="form-group">
                    <label style="color:#337ab7;">NAMA *</label>
                    <input type="text" class="form-control" name="name" placeholder="Contoh: Ronaldo" value="{{$user->name}}" required>
                    @if ($errors->has('name'))
                      <span class="help-block">
                        <strong>{{$errors->first('name')}}</strong>
                      </span>
                    @endif
                </div>
                <div class="form-group">
                    <label style="color:#337ab7;">NOMOR HANDPHONE/WA *</label>
                    <input type="text" class="form-control" name="phone_number" placeholder="Contoh: 08123456789" value="{{old('phone_number')}}" required>
                    @if ($errors->has('phone_number'))
                      <span class="help-block">
                        <strong>{{$errors->first('phone_number')}}</strong>
                      </span>
                    @endif
                </div>
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
                <div class="clearfix"></div>
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
                <div class="form-group">
                    <label style="color:#337ab7;">ALAMAT ASAL *</label>
                    <input type="text" class="form-control" name="address" value="{{old('address')}}" placeholder="Contoh: Jalan Mbappe no 1 Malang" required>
                    @if ($errors->has('address'))
                      <span class="help-block">
                        <strong>{{$errors->first('address')}}</strong>
                      </span>
                    @endif
                </div>
                <div class="form-group">
                    <label style="color:#337ab7;">ID LINE</label>
                    <input type="text" class="form-control" name="id_line" value="{{old('id_line')}}" placeholder="Beri tanda (-) jika tidak ada">
                    @if ($errors->has('id_line'))
                      <span class="help-block">
                        <strong>{{$errors->first('id_line')}}</strong>
                      </span>
                    @endif
                </div>
                <div class="form-group">
                    <label style="color:#337ab7;">ID INSTAGRAM</label>
                    <input type="text" class="form-control" name="id_instagram" value="{{old('id_instagram')}}" placeholder="Beri tanda (-) jika tidak ada">
                    @if ($errors->has('id_instagram'))
                      <span class="help-block">
                        <strong>{{$errors->first('id_instagram')}}</strong>
                      </span>
                    @endif
                </div>
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
                <div class="form-group">
                    <label style="color:#337ab7;">EMAIL *</label>
                    <input type="text" class="form-control" name="email" value="{{$user->email}}" placeholder="Contoh: fahmialfareza@icloud.com" readonly required>
                    @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{$errors->first('email')}}</strong>
                      </span>
                    @endif
                </div>
                @if ($tour->destination->province_id == 10)
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
        </div>
    </section>
    <section class="footer navbar-fixed-bottom" style="background-color:#fff">
        <div class="col-xs-12" style="padding:10px 0px 15px 0px">
            <div class="col-xs-12">
                <div class="text-center">
                    <button type="submit" class="btn btn-block" style="background-color:#F29B00;color:#fff">Pesan <span class="fa fa-shopping-cart"></span></button>
                </div>
            </div>
        </div>
    </section>
    </form>



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
