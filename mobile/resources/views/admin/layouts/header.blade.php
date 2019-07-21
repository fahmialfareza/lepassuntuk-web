<header class="main-header" id="app">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand"><b>Admin</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rental Mobil <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li @if (Request::is('admin/carrentals'))
                      class="active"
                  @endif><a href="/admin/carrentals">Rental Mobil</a></li>
              <li @if (Request::is('admin/carrentals/create*'))
                      class="active"
                  @endif><a href="/admin/carrentals/create">Tambah Mobil</a></li>
              <!-- <li class="divider"></li>
              <li><a href="/admin/carrentals/trashed">Mobil Dihapus</a></li> -->
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Villa <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li @if (Request::is('admin/villa'))
                      class="active"
                  @endif><a href="/admin/villa">Villa</a></li>
              <li @if (Request::is('admin/villa/create*'))
                      class="active"
                  @endif><a href="/admin/villa/create">Tambah Villa</a></li>
              <!-- <li class="divider"></li>
              <li><a href="/admin/carrentals/trashed">Mobil Dihapus</a></li> -->
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Destinasi <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li @if (Request::is('admin/destinations'))
                      class="active"
                  @endif><a href="/admin/destinations">Destinasi</a></li>
              <li @if (Request::is('admin/destinations/create*'))
                      class="active"
                  @endif><a href="/admin/destinations/create">Tambah Destinasi</a></li>
              <!-- <li class="divider"></li>
              <li><a href="/admin/carrentals/trashed">Mobil Dihapus</a></li> -->
            </ul>
          </li>
          <li @if (Request::is('admin/requestbookings*'))
                  class="active"
              @endif><a href="/admin/requestbookings">Request Pesanan</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Paket Wisata <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li @if (Request::is('admin/tours'))
                      class="active"
                  @endif><a href="/admin/tours">Paket Wisata</a></li>
              <li @if (Request::is('admin/tours/create*'))
                      class="active"
                  @endif><a href="/admin/tours/create">Tambah Paket Wisata</a></li>
              <!-- <li class="divider"></li>
              <li><a href="/admin/carrentals/trashed">Mobil Dihapus</a></li> -->
            </ul>
          </li>
          <li @if (Request::is('admin/bookings*'))
                  class="active"
              @endif><a href="/admin/bookings">Pesanan</a></li>
          <li @if (Request::is('admin/users*'))
                  class="active"
              @endif><a href="/admin/users">Pengguna</a></li>
              <li @if (Request::is('admin/admins*'))
                      class="active"
                  @endif><a href="/admin/admins">Admin</a></li>
      </div>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu" id="refresh">
        <ul class="nav navbar-nav">
          <!-- Notifications Menu -->
          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">{{ Auth::user()->unreadNotifications()->count() }}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Kamu mempunyai {{ Auth::user()->unreadNotifications()->count() }} notifikasi</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  @foreach (Auth::user()->unreadNotifications as $notification)
                    <li><!-- start notification -->
                        <a href="/notification/read/{{$notification->id}}">
                          @if ($notification->type == "App\Notifications\NewBooking")
                            Ada pesanan baru dengan ID LS-{{ $notification['data']['booking_id'] }}
                          @elseif ($notification->type == "App\Notifications\NewRequestBooking")
                            Ada request pesanan baru dengan ID RLS-{{ $notification['data']['request_booking_id'] }}
                          @endif
                        </a>
                    </li>
                  @endforeach
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="/adminlte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  {{Auth::user()->name}} - Admin
                  <small>Admin sejak {{Auth::user()->created_at}}</small>
                </p>
              </li>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <form class="" action="{{route('logout')}}" method="post">
                    {{csrf_field()}}
                    <button type="submit" name="logout" class="btn btn-default btn-flat">Log Out</button>
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-custom-menu -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</header>
