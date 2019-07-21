<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Paket Wisata | Admin | Lepas Suntuk</title>
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
          Paket Wisata
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
          <li class="active"><a href="{{route('admin.tours.index')}}">Paket Wisata</a></li>
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
            <h3 class="box-title">Paket Wisata</h3> <br>
            <h3><a href="{{route('admin.tours.create')}}" class="btn btn-primary">Tambah Paket Wisata</a></h3>
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
                  <th>Nama</th>
                  <th>Destinasi</th>
                  <th>Lokasi</th>
                  <th>Durasi</th>
                  <th>Foto Utama</th>
                  <th>Foto 1</th>
                  <th>Foto 2</th>
                  <th>Foto 3</th>
                  <th>Foto 4</th>
                  <th>Foto 5</th>
                  <th>Foto 6</th>
                  <th>Foto 7</th>
                  <th>Foto 8</th>
                  <th>Foto 9</th>
                  <th>Lokasi Google Maps</th>
                  <th>Daftar Harga</th>
                  <th>Disable Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($tours as $tour): ?>
                  <tr>
                    <td>{{$tour->id}}</td>
                    <td>{{$tour->name}}</td>
                    <td>{{$tour->destination->name}}</td>
                    <td>{{$tour->location}}</td>
                    <td>{{$tour->duration}} hari</td>
                    <td>
                      <a target="_blank" href="/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->main_photo}}">{{$tour->main_photo}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->photo1}}">{{$tour->photo1}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->photo2}}">{{$tour->photo2}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->photo3}}">{{$tour->photo3}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->photo4}}">{{$tour->photo4}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->photo5}}">{{$tour->photo5}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->photo6}}">{{$tour->photo6}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->photo7}}">{{$tour->photo7}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->photo8}}">{{$tour->photo8}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/tours/{{$tour->user_id}}/{{$tour->id}}/{{$tour->photo9}}">{{$tour->photo9}}</a>
                    </td>
                    <td>{{$tour->map}}</td>
                    <td>
                        <a href="{{route('admin.toursmeta.index', $tour->id)}}" class="btn btn-xs btn-primary">List Harga</a>
                    </td>
                    <td>
                      <a href="{{route('admin.toursdate.index', $tour->id)}}" class="btn btn-xs btn-primary">Disable Tanggal</a>
                    </td>
                    <td>
                      <a href="{{route('admin.tours.edit', $tour->id)}}" class="btn btn-xs btn-primary">Edit</a> <br>
                      <form class="" action="{{route('admin.tours.destroy', $tour->id)}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-xs btn-danger" name="delete">Hapus</button>
                      </form>
                    </td>
                  </tr>
                <?php endforeach; ?>
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
