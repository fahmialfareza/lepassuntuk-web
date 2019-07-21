<style>
    nav {
      width: 100%;
      margin: 0 auto;
      background: #fff;
      padding: 50px 0;
      box-shadow: 0px 5px 0px #dedede;
    }
    nav ul {
     width: 100%;
      list-style: none;
      text-align: center;
    }
    nav ul li {
     width: 100%;
      display: inline-block;
    }
    nav ul li a {
     width: 100%;
      display: block;
      padding: 15px;
      text-decoration: none;
      color: #aaa;
      text-align:right;
    }
    nav ul li a,
    nav ul li a:after,
    nav ul li a:before {
      transition: all .2s;
    }

    /* SHIFT */
    nav.shift ul li a {
      position:relative;
      z-index: 1;
    }
    nav.shift ul li a:hover {
     width: 100%;
      color: #f8b600;
    }
    nav.shift ul li a:after {
     width: 100%;
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      margin: auto;
      width: 100%;
      height: 1px;
      content: '.';
      color: transparent;
      background: #E6E7E8;
      visibility: none;
      opacity: 0;
      z-index: -1;
    }
    nav.shift ul li a:hover:after {
      opacity: 1;
      visibility: visible;
      height: 100%;
    }

</style>
<header id="header" class="header-scrolled" style="background-image:linear-gradient(to bottom right, #004785, #0574BF);height: 68px;">

    <div class="container main-menu">
        <div class="">
            <div class="pull-left">
              @if (Auth::check())
                @if(Auth::user()->admin == 0)
                  <a href="{{route('home')}}" class="fa fa-user-circle-o fa-2x" style="color:#fff;"></a>
                @else
                  <a href="{{route('admin.carrentals.index')}}" class="fa fa-user-circle-o fa-2x" style="color:#fff;"></a>
                @endif
              @endif
            </div>
            <div id="logo" class=" text-center">
                <a href="/"><img style="width:100px;margin-top: -7px;" src="/img/lepassuntuk.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container" class="shift">
                <ul class="nav-menu">
                    <li>
                        <div class="col-md-12 text-center">
                            <div class="text-center"><img src="/img/lepassuntukbiru.png" style="height:55px;margin-bottom:15px;"></div>
                        </div>
                        <div class="col-md-12">
                            @if (Auth::check())
                              @if(Auth::user()->admin == 0)
                                <a href="{{route('user.bookings.index')}}" style="padding: 0px; color: #fff;" class="text-center genric-btn btn-xs primary circle arrow">{{strtoupper(Auth::user()->name)}}<span class="lnr lnr-arrow-right" style="color: #fff"></span></a>
                              @else
                                <a href="/admin/carrentals" style="padding: 0px; color: #fff;" class="text-center genric-btn btn-xs primary circle arrow">ADMIN</a>
                              @endif
                            @else
                              <a href="/login" style="padding: 0px; color: #fff;" class="text-center genric-btn btn-xs primary circle arrow">LOGIN</span></a>
                            @endif
                        </div>
                        
                        @if (!Auth::check())
                          <h4 style="font-size: 11px;color:#1464A5;margin-top: 10px;" href="/register">Belum Mendaftar? <b>Daftar Sekarang</b></h4>
                        @endif
                    </li>
                    <br>
                    <li class="pull-right" style="font-size: 15px;">
                        <a href="/"><span>Home </span><img src="/img/icon/home.png" style="height:15px;"></a>
                    </li>
                    <li class="pull-right" style="font-size: 15px;">
                        <a href="{{route('tours.show_all')}}"><span>Paket Wisata </span><img src="/img/icon/paket-wisata.png" style="height:15px;"></a>
                    </li>
                    <li class="pull-right" style="font-size: 15px;">
                        <a href="{{route('carrentals.show')}}"><span>Sewa Mobil </span><img src="/img/icon/mobil.png" style="height:15px;"></a>
                    </li>
                    <li class="pull-right" style="font-size: 15px;">
                        <a href="{{route('villas.show_all')}}"><span>Sewa Vila </span><img src="/img/icon/villa-nav.png" style="height:15px;"></a>
                    </li>
                    @if (Auth::check())
                      @if(Auth::user()->admin == 0)
                      <li class="pull-right" style="font-size: 15px;">
                          <a href="{{route('user.bookings.index')}}"><span>Pesanan Saya </span><img src="/img/icon/pesanan-saya.png" style="height:15px;"></a>
                      </li>
                      @endif
                    @endif
                    <li class="pull-right" style="font-size: 15px;">
                        <a href="{{route('policy')}}"><span>Kebijakan Privasi </span><img src="/img/icon/privasi.png" style="height:15px;"></a>
                    </li>
                    <li class="pull-right" style="font-size: 15px;">
                        <a href="{{route('requirement')}}"><span>Syarat dan Ketentuan </span><img src="/img/icon/syarat.png" style="height:15px;"></a>
                    </li>
                    <li class="pull-right" style="font-size: 15px;">
                        <a href="{{route('faq')}}"><span>FAQ </span><img src="/img/icon/faq.png" style="height:15px;"></a>
                    </li>
                    <li class="pull-right" style="font-size: 15px;">
                        <a href="{{route('aboutus')}}"><span>Tentang Kami </span><img src="/img/icon/tentang.png" style="height:15px;"></a>
                    </li>
                    <li class="pull-right" style="font-size: 15px;">
                        <a href="{{route('contact')}}"><span>Hubungi Kami </span><img src="/img/icon/kontak.png" style="height:15px;"></a>
                    </li>
                    @if (Auth::check())
                    <li class="pull-right" style="font-size: 15px;">
                        <a href="/logout"><span>Log Out </span><img src="/img/icon/logout.png" style="height:15px;"></a>
                    </li>
                    @endif
                    
                        <div class="container">
                        <div class="row">
                        <div class="col-md-12 text-center">
                            <p style="font-size: 15px; text-align:center; color:#1464A5; margin-top: 10px; font-weight: 400;">Follow Us</p>
                            <a style="padding-right:5px" href="https://www.facebook.com/wisatamalangjatim/"><span class="fa fa-facebook-official fa-3x"></span></a>
                            <a style="padding-right:5px" href="https://www.youtube.com/channel/UCTbG_OQ9McnKpc3hN1lGrKg"><span class="fa fa-youtube-play  fa-3x"></span></a>
                            <a style="padding-right:5px" href="https://www.instagram.com/lepassuntuk/"><span class="fa fa-instagram  fa-3x"></span></a>
                        </div>
                        </div>
                        </div>
                    
                </ul>
            </nav>
        </div>
    </div>
</header>
