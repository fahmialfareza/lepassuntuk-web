    <style>
      @font-face {
            font-family: 'museo500';
            src: url('/fonts/museo300-regular-webfont.woff2') format('woff2'),
                 url('/fonts/museo300-regular-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
      }   
      
        #header {
		font-family: 'museo500', sans-serif;
	}
	
    </style>

    


<header id="header" class="header-scrolled" style="background-image:linear-gradient(to right, #2887DB, #0574BF);height: 68px;">

  <div class="container main-menu">
    <div class="col-md-1" style="padding-left:0px;">
      <div class="pull-left">
        <a href="/"><img style="width:100px;margin-top: -7px;" src="/img/lepassuntuk.png" alt="" title="" /></a>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="text-center">
        <ul class="nav-menu">
          <li @if (Request::is('tours*'))
                  class="active"
              @endif ><a href="{{route('tours.show_all')}}" style="font-size:15px; text-decoration: none;" href="">
                  <!--<img src="/img/icon/line.png" style="height:25px;">-->
                  Paket Wisata</a></li>
          <li @if (Request::is('carrentals*'))
                  class="active"
              @endif ><a href="{{route('carrentals.show')}}" style="font-size:15px; text-decoration: none;" href="">Sewa Mobil</a></li>
          <li @if (Request::is('villas*'))
                  class="active"
              @endif ><a href="{{route('villas.show_all')}}" style="font-size:15px; text-decoration: none;" href="">Sewa Villa</a></li>
          <li @if (Request::is('villas*'))
                  class="active"
              @endif ><a href="/sewamotor" style="font-size:15px; text-decoration: none;" href="">Sewa Motor</a></li> 
          <li @if (Request::is('villas*'))
                  class="active"
              @endif ><a href="/outbound" style="font-size:15px; text-decoration: none;" href="">Outbound</a></li>
          <li @if (Request::is('villas*'))
                  class="active"
              @endif ><a href="/keretaapi"  style="font-size:15px; text-decoration: none;" href="">Kereta Api</a></li>      
          <li @if (Request::is('user/requestbookings/create*'))
                  class="active"
              @endif ><a href="/user/requestbookings/create" style="font-size:15px; text-decoration: none;" href="">Request</a></li>
     <form action="/tours" method="GET">
                <input type="text" name="search" value="{{Request::get('search')}}" class="form-control" placeholder="Aku pengen ke..." style="width: 23%; margin-left: 450px; position: relative; left: 260px; top: -27px; font-size: 1.50rem;">
            </form>
      </div>
      
    </div>
    <div class="col-sm-3" style="padding-right:0px">
      <div class="pull-right">
        <ul class="nav-menu" style="text-align:center;">
          @if (Auth::check())
            @if (Auth::user()->admin == 1) 
              <div style="color:#fff;"><span class="fa fa-user-circle"></span><a style="text-decoration: none; font-family : 'arial';" href="{{route('admin.carrentals.index')}}">ADMIN</a></div>
            @else
              <div style="color:#fff;"><span class="fa fa-user-circle"></span><a style="text-decoration: none; font-family : 'arial';" href="{{route('home')}}">{{Auth::user()->name}}</a> | <span class="fa fa-book"></span><a style="text-decoration: none; font-family : 'arial';" href="{{route('user.bookings.index')}}">My Order</a></div>
            @endif
            <div style="font-size:14px;; color:#fff;"><span class="fa fa-sign-out"></span> <a style="text-decoration: none; font-family : 'arial';" href="/logout">Logout</a></div>
          @else
            <div style="color:#fff;"><span class="fa fa-user-circle"></span><a style="text-decoration: none; font-family : 'arial';" href="{{route('register')}}">DAFTAR</a> | <a style="text-decoration: none; font-family : 'arial';" href="{{route('login')}}">MASUK</a></div>
          @endif
        </ul>
      </div>
    </div>

  </div>
  </div>
</header>
