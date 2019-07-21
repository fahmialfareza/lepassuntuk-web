<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Destinasi | Destinasi | Admin | Lepas Suntuk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/adminlte/bower_components/Ionicons/css/ionicons.min.css">
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
          Rental Mobil
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
          <li><a href="{{route('admin.destinations.index')}}">Destinasi</a></li>
          <li class="active">Edit Destinasi</li>
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
            <h3 class="box-title">Edit Destinasi</h3> <br>
          </div>
          <div class="box-body">
            <form class="" action="{{route('admin.destinations.update', $destination->id)}}" method="post" enctype="multipart/form-data">
              <input name="_method" type="hidden" value="PUT">
              {{csrf_field()}}
              <div class="form-group">
                <label>Provinsi *</label>
                <select class="form-input" name="province_id">
                    @foreach ($provinces as $province)
                      <option value="{{$province->id}}" @if ($destination->province_id == $province->id)
                        selected
                      @endif  >{{$province->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Nama *</label>
                <input type="text" name="name" class="form-control" placeholder="Contoh : Malang" value="{{old('name', $destination->name)}}" required>
                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{$errors->first('name')}}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto Destinasi</label>
                <input type="file" id="exampleInputFile" name="photo" accept="image/x-png,image/gif,image/jpeg,image/x-MS-bmp" value="{{old('photo', $destination->photo)}}">
                <p class="help-block">Maksimal Foto 1 MB.</p>
                @if ($errors->has('photo'))
                  <span class="help-block">
                    <strong>{{$errors->first('photo')}}</strong>
                  </span>
                @endif
              </div>
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
            </form>
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
<!-- SlimScroll -->
<script src="/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/dist/js/demo.js"></script>
</body>
</html>
