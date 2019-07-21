<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pesanan | Admin | Lepas Suntuk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/adminlte/dist/css/skins/_all-skins.min.css">

  <meta name="userId" content="{{ Auth::check() ? Auth::user()->id : '' }}">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  @include('admin.layouts.header')
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Pesanan
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
          <li class="active"><a href="{{route('admin.bookings.index')}}">Pesanan</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="callout callout-info">
          <h4>Tip!</h4>
          <p></p>
        </div>
        <div class="callout callout-danger">
          <h4>Warning!</h4>
          <p></p>
        </div>
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Pesanan</h3> <br>
          </div>
          <div class="box-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
            @endif
            <table id="example1" style="overflow: scroll; display: block" class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Paket Wisata</th>
                  <th>Harga Paket Wisata</th>
                  <th>Pemesan</th>
                  <th>Tanggal</th>
                  <th>Jumlah Orang</th>
                  <th>Nama</th>
                  <th>No. HP</th>
                  <th>Email</th>
                  <th>Total Harga</th>
                  <th>Konfirmasi?</th>
                  <th>Pembayaran Terakhir</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($bookings->sortByDesc('id') as $booking)
                  <tr>
                    <td>LS-{{$booking->id}}</td>
                    <td>{{$booking->tour->name}}</td>
                    <td>{{$booking->tours_meta->price}}</td>
                    <td>{{$booking->user->name}}</td>
                    <td>{{$booking->date}}</td>
                    <td>{{$booking->passanger}}</td>
                    <td>{{$booking->name}}</td>
                    <td>{{$booking->phone_number}}</td>
                    <td>{{$booking->email}}</td>
                    <td>{{$booking->price_total}}</td>
                    <td>
                      @if ($booking->confirmation == 1)
                        Pemesanan Berhasil Dikonfirmasi
                      @elseif ($booking->confirmation === 0)
                        Pemesanan Gagal Dikonfirmasi
                      @else
                        Belum Ada Aksi
                        <form class="" action="{{route('admin.bookings.update', $booking->id)}}" method="post">
                          {{csrf_field()}}
                          <input name="_method" type="hidden" value="PUT">
                          <input type="hidden" name="confirmation" value="1">
                          <button type="submit" class="btn btn-xs btn-primary" name="update">Konfirmasi Pesanan</button>
                        </form>
                        <form class="" action="{{route('admin.bookings.update', $booking->id)}}" method="post">
                          {{csrf_field()}}
                          <input name="_method" type="hidden" value="PUT">
                          <input type="hidden" name="confirmation" value="0">
                          <button type="submit" class="btn btn-xs btn-danger" name="update">Tolak Konfirmasi</button>
                        </form>
                      @endif
                    </td>
                    <td>
                        {{$booking->expired}}
                    </td>
                    <td>
                      <form class="" action="{{route('admin.bookings.destroy', $booking->id)}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-xs btn-danger" name="delete">Hapus</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin.layouts.footer')
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
