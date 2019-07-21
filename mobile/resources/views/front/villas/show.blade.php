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
    <title>{{$villa->name}} | Lepas Suntuk</title>
    <link rel="stylesheet" href="/style/custom/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
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
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="/js/popper.min.js"></script>
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

    <style>
        .menu {
            width: 100%;
            z-index: 99;
            text-align: center;
            position: static;
        }

        .menu.sticky {
            position: fixed;
            margin-top: 67px;
            top: 0;
            text-align: center;
            padding: 15px;
            background: #3884C2;
            position: fixed;
            height: 55px;
            top: 0;
        }

        /* PAGE STYLING FOR DEMO. IGNORE */

        .menu {
            padding: 0;
            margin-top: 0px;
            padding: 15px;
            background: #3884C2;
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

</head>

<body>

    <header id="header" class="header-scrolled" style="background-image:linear-gradient(to bottom right, #004785, #3884C2);height: 68px;">

        <div class="container main-menu">
            <div class="col-xs-4" style="padding-left:0px;">
                <div class="pull-left">
                    <a href="{{route('villas.show_all')}}"><img style="height:19px;margin-top:5px;" src="/img/panah.png"></a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class=" text-center">
                    <a href="/"></a><img style="width:100px;margin-top: -7px;" src="/img/lepassuntuk.png" alt="" title="" /></a>
                </div>
            </div>
            <div class="col-xs-4" style="padding-right:0px">
                <div class="pull-right">
                    <a data-toggle="modal" data-target="#myModal"><img style="height:23px;margin-top:5px;" src="/img/share.png"></a>
                </div>
            </div>
        </div>
        </div>
    </header>

    <section class="destinations-area section-gap" style="padding-top:0px;padding-bottom:0px;padding-top:37px; background: #ffffff;" id="deskripsi">
        <div class="container" style="width: 100%;position: relative; text-align: center; color: white;">
            <div class="row">
                <div style="position: relative; text-align: center; color: white; width: 100%;">
                    <img src="https://lepassuntuk.com/photos/villas/{{$villa->user_id}}/{{$villa->id}}/{{$villa->main_photo}}" alt="Snow" style="width:100%;">
                    <div class="bottom-left" style="padding:0px;width:100%;  position: absolute; bottom: 0px; left: 0px;">
                        <div class="col-xs-12 text-left" style="color:#fff; margin-top:205px; margin-bottom: -5px; background: rgba(5, 116, 191,0.5);">
                            <h4 style="font-family: 'ABeeZee', sans-serif;">{{$villa->name}}</h4>
                            <h5 style="font-family: 'ABeeZee', sans-serif;">{{$villa->location}}</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <ul class="menu">
        <li class="menu-item">
            <a href="#deskripsi" class="js-anchor-link menu-link" style="color:#fff;padding-left:7px;padding-right:7px;">Fasilitas </a>
        </li>
        <li class="menu-item">
            <a href="#harga" class="js-anchor-link menu-link" style="color:#fff;padding-left:3px;padding-right:3px;">Harga</a>
        </li>
        <li class="menu-item">
            <a href="#itenary" class="js-anchor-link menu-link" style="color:#fff;padding-left:3px;padding-right:3px;">Lokasi </a>
        </li>
        <li class="menu-item">
            <a href="#foto" class="js-anchor-link menu-link" style="color:#fff;padding-left:3px;padding-right:3px;">Foto </a>
        </li>
    </ul>


    <section class="destinations-area" style="padding-top:0px;padding-bottom:0px;margin-top:10px; background: #ffffff;">
        <div class="container">
            <p class="text-justify" style="color:#000">{!!nl2br($villa->description)!!}</p>
        </div>
    </section>

    <section class="destinations-area" style="margin-top:0px; background: #3884C2; color:#fff;" id="harga">
        <div class="container">
            <div class="col-md-12 text-center">
                <h4 class="menu-item" style="color:#fff;padding-left:5px;padding-right:5px;padding:5px">Harga</h4>
            </div>
        </div>
    </section>
    <section class="destinations-area" style="padding-top:0px;padding-bottom:0px;margin-top:10px; background: #fff; color: #000">
        <div class="container">
            <table class="table" style="border-top: 0px;">
                <tbody>
                        <td class="text-left">
                            Harga
                        </td>
                        <td class="text-right">
                            Rp {{number_format($villa->price , 2 , ',' , '.' )}}/malam
                        </td>
                </tbody>
            </table>
        </div>
    </section>

    <section class="destinations-area" style="margin-top:-10px; background: #3884C2;color:#fff;" id="itenary">
        <div class="container">
            <div class="col-md-12 text-center">
                <h4 class="menu-item" style="color:#fff;padding-left:5px;padding-right:5px;padding:5px">Map</h4>
            </div>
        </div>
    </section>
    <section class="destinations-area" style="padding-top:0px;padding-bottom:0px;margin-top:10px; background: #ffffff; color: #000">
        <div class="container mb-10">
            {!!htmlspecialchars_decode(stripslashes(str_replace('width="600" height="450"', 'width="100%" height="300"', $villa->map)))!!}
        </div>
    </section>

    <section class="destinations-area" style="margin-top:-10px; background: #3884C2;color:#fff;" id="foto">
        <div class="container">
            <div class="col-md-12 text-center">
                <h4 class="menu-item" style="color:#fff;padding-left:5px;padding-right:5px;padding:5px">Foto</h4>
            </div>
        </div>
    </section>
    <section class="destinations-area" style="padding-top:0px;padding-bottom:60px;margin-top:10px; background: #ffffff;">
        <div class="container">
            <section class="destinations-area section-gap" style="padding-top:0px;padding-bottom:0px; background: #ffffff;">
                <div class="container">
                    <div class="row">
                        <div class="active-recent-blog-carusel">
                            @for($i = 1; $i < 10; $i++) <?php $photo='photo' . $i; ?> <?php $spot = 'spot' . $i; ?>
                                @if ($villa->$photo != '')
                                <div class="single-recent-blog-post item">
                                    <div>
                                        <a href="#" style="text-decoration: none;">
                                            <div class="single-destination">
                                                <div class="thumb">
                                                    <div class="overlay overlay-bg"></div>
                                                    <img class="img-fluid" src="https://lepassuntuk.com/photos/villas/{{$villa->user_id}}/{{$villa->id}}/{{$villa->$photo}}" alt="" style="height: 250px; width: 100%; object-fit: cover; display: inline;">
                                                </div>
                                                <div class="desc">
                                                    <div class="col-xs-12" style="margin-top:200px;color:#fff;">
                                                        <div class="col-xs-12" style="background: linear-gradient(to bottom,rgba(0, 0, 0, 0.49),rgba(0,0,0,.02));padding-bottom:15px">
                                                            <div class="row" style="margin-top: 0px;">
                                                                <div class="col-xs-12 text-center">
                                                                    <h4 style="color:#fff;"><span>{{$villa->$spot}}</span></h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endif
                              @endfor
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>



    <section class="footer navbar-fixed-bottom" style="background-color:#fff">
        <div class="col-xs-12" style="padding:10px 0px 15px 0px">
            <div class="col-xs-6">
                <div class="text-center">
                    <a target="_blank" href="http://api.whatsapp.com/send?phone=6281259807887" class="btn btn-success">Chat Whatsapp <span class="fa fa-whatsapp"></span></a>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="text-center">
                    <a target="_blank" href="http://api.whatsapp.com/send?phone=6281259807887&&text=Ingin memesan villa {{$villa->name}}" class="btn" style="background-color:#F29B00;color:#fff">Pesan Sekarang <span class="fa fa-shopping-cart"></span></a>
                </div>
            </div>
        </div>
        </div>
    </section>
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

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <div class="row">
              <div class="col-xs-10">
                <h4 class="modal-title">Share {{$villa->name}}</h4>
              </div>
              <div class="col-xs-2">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <a target="_blank" href="https://www.facebook.com/sharer.php?u={{url()->full()}}">
                <i class="fa fa-facebook-square w3-xxxlarge"></i>
            </a>
            <a target="_blank" href="https://twitter.com/intent/tweet?text={{$villa->name}} - Lepas Suntuk&url={{url()->full()}}&via=Lepas Suntuk&original_referer={{url()->full()}}">
                <i class="fa fa-twitter-square w3-xxxlarge"></i>
            </a>
            <a target="_blank" href="https://plus.google.com/share?url={{url()->full()}}">
                <i class="fa fa-google-plus-square w3-xxxlarge"></i>
            </a>
            <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url={{url()->full()}}&title={{$villa->name}} - Lepas Suntuk&ro=false&summary=Liburan dengan {{$villa->name}}! Hanya di Lepas Suntuk!&source=">
                <i class="fa fa-linkedin-square w3-xxxlarge"></i>
            </a>
            <a target="_blank" href="http://api.whatsapp.com/send?text={{url()->current()}}">
                <i class="fa fa-whatsapp w3-xxxlarge"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

</body>

</html>
