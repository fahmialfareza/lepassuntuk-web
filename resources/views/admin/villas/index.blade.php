<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Villa | Admin | Lepas Suntuk</title>
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
          Villa
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
          <li class="active"><a href="{{route('admin.villa.index')}}">Villa</a></li>
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
            <h3 class="box-title">Villa</h3> <br>
            <h3><a href="{{route('admin.villa.create')}}" class="btn btn-primary">Tambah Villa</a></h3>
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
                  <th>Nama Villa</th>
                  <th>Aksi</th>
                  <th>Deskripsi</th>
                  <th>Alamat Lengkap</th>
                  <th>Harga</th>
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
                  <th>Spot 1</th>
                  <th>Spot 2</th>
                  <th>Spot 3</th>
                  <th>Spot 4</th>
                  <th>Spot 5</th>
                  <th>Spot 6</th>
                  <th>Spot 7</th>
                  <th>Spot 8</th>
                  <th>Spot 9</th>
                  <th>Map</th>
                  <!--<th>Aksi</th>-->
                </tr>
              </thead>
              <tbody>
                <?php foreach ($villas as $villa): ?>
                  <tr>
                    <td>{{$villa->id}}</td>
                    <td>{{$villa->name}}</td>
                    <td>
                      <a href="{{route('admin.villa.edit', $villa->id)}}" class="btn btn-xs btn-primary">Edit</a> <br>
                      <form class="" action="{{route('admin.villa.destroy', $villa->id)}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-xs btn-danger" name="delete">Hapus</button>
                      </form>
                    </td>
                    <td><p style="width : 500px;"> {!!nl2br($villa->description)!!} </p></td>
                    <td>{{$villa->location}}</td>
                    <td>Rp {{number_format($villa->price , 2 , ',' , '.' )}}/malam</td>
                    <td>
                      <a target="_blank" href="/photos/villas/{{$villa->user_id}}/{{$villa->id}}/{{$villa->main_photo}}">{{$villa->main_photo}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/villas/{{$villa->user_id}}/{{$villa->id}}/{{$villa->photo1}}">{{$villa->photo1}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/villas/{{$villa->user_id}}/{{$villa->id}}/{{$villa->photo2}}">{{$villa->photo2}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/villas/{{$villa->user_id}}/{{$villa->id}}/{{$villa->photo3}}">{{$villa->photo3}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/villas/{{$villa->user_id}}/{{$villa->id}}/{{$villa->photo4}}">{{$villa->photo4}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/villas/{{$villa->user_id}}/{{$villa->id}}/{{$villa->photo5}}">{{$villa->photo5}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/villas/{{$villa->user_id}}/{{$villa->id}}/{{$villa->photo6}}">{{$villa->photo6}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/villas/{{$villa->user_id}}/{{$villa->id}}/{{$villa->photo7}}">{{$villa->photo7}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/villas/{{$villa->user_id}}/{{$villa->id}}/{{$villa->photo8}}">{{$villa->photo8}}</a>
                    </td>
                    <td>
                      <a target="_blank" href="/photos/villas/{{$villa->user_id}}/{{$villa->id}}/{{$villa->photo9}}">{{$villa->photo9}}</a>
                    </td>
                    <td>{{$villa->spot1}}</td>
                    <td>{{$villa->spot2}}</td>
                    <td>{{$villa->spot3}}</td>
                    <td>{{$villa->spot4}}</td>
                    <td>{{$villa->spot5}}</td>
                    <td>{{$villa->spot6}}</td>
                    <td>{{$villa->spot7}}</td>
                    <td>{{$villa->spot8}}</td>
                    <td>{{$villa->spot9}}</td>
                    <td>{{$villa->map}}</td>
                    <!--<td>-->
                    <!--  <a href="{{route('admin.villa.edit', $villa->id)}}" class="btn btn-xs btn-primary">Edit</a> <br>-->
                    <!--  <form class="" action="{{route('admin.villa.destroy', $villa->id)}}" method="post">-->
                    <!--    {{csrf_field()}}-->
                    <!--    <input name="_method" type="hidden" value="DELETE">-->
                    <!--    <button type="submit" class="btn btn-xs btn-danger" name="delete">Hapus</button>-->
                    <!--  </form>-->
                    <!--</td>-->
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
