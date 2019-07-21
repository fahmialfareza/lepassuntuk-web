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
                            Ada pesanan baru dengan ID LS-505{{ $notification['data']['booking_id'] }}
                          @elseif ($notification->type == "App\Notifications\NewRequestBooking")
                            Ada request pesanan baru dengan ID RLS-{{ $notification['data']['request_booking_id'] }}
                          @endif
                        </a>
                    </li>
                  @endforeach
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="/admin/notifications">View all</a></li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="data:image/jpeg;base64,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" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="data:image/jpeg;base64,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" class="img-circle" alt="User Image">

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
