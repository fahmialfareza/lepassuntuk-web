<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Villa | Villa | Admin | Lepas Suntuk</title>
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
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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
          <li><a href="{{route('admin.villa.index')}}">Villa</a></li>
          <li class="active">Edit Villa</li>
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
            <h3 class="box-title">Edit Villa</h3> <br>
          </div>
          <div class="box-body">
            <form class="" action="{{route('admin.villa.update', $villa->id)}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <input name="_method" type="hidden" value="PUT">

              <div class="form-group">
                <label>Nama *</label>
                <input type="text" name="name" class="form-control" placeholder="Contoh : Villa Batu" value="{{$villa->name}}" required>
                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{$errors->first('name')}}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label>Deskripsi *</label>
                <textarea class="textarea" placeholder="Deskripsi...." name="description"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$villa->description}}</textarea>
                @if ($errors->has('location'))
                  <span class="help-block">
                    <strong>{{$errors->first('location')}}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label>Alamat Lengkap *</label>
                <input type="text" name="location" class="form-control" placeholder="Contoh : Jalan Terusan Kembang Turi Gang VI no 22 Kota Malang, Jawa Timur" value="{{$villa->location}}" required>
                @if ($errors->has('location'))
                  <span class="help-block">
                    <strong>{{$errors->first('location')}}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label>Link Google Maps (Embed) *</label>
                <input type="text" name="map" class="form-control" placeholder='Contoh : <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.474229824895!2d112.62646611488212!3d-7.949846081404278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629da588bb52b%3A0x82155d9198792220!2sLepas+Suntuk+%E2%80%A2+Paket+Wisata+Bromo+Malang+Batu!5e0!3m2!1sen!2sid!4v1550582733133" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                ' value="{{$villa->map}}" required>
                @if ($errors->has('map'))
                  <span class="help-block">
                    <strong>{{$errors->first('map')}}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label>Harga *</label>
                <input type="number" name="price" class="form-control" placeholder="Contoh : 500000" value="{{$tourmeta->price}}" required>
                @if ($errors->has('price'))
                  <span class="help-block">
                    <strong>{{$errors->first('price')}}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto Utama</label>
                <input type="file" id="exampleInputFile" name="main_photo" accept="image/x-png,image/gif,image/jpeg,image/x-MS-bmp" value="{{old('main_photo')}}">
                <p class="help-block">Maksimal Foto 1 MB.</p>
                @if ($errors->has('main_photo'))
                  <span class="help-block">
                    <strong>{{$errors->first('main_photo')}}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto 1</label>
                <input type="file" id="exampleInputFile" name="photo1" accept="image/x-png,image/gif,image/jpeg,image/x-MS-bmp" value="{{old('photo1')}}">
                <p class="help-block">Maksimal Foto 1 MB.</p>
                @if ($errors->has('photo1'))
                  <span class="help-block">
                    <strong>{{$errors->first('photo1')}}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto 2</label>
                <input type="file" id="exampleInputFile" name="photo2" accept="image/x-png,image/gif,image/jpeg,image/x-MS-bmp" value="{{old('photo2')}}">
                <p class="help-block">Maksimal Foto 1 MB.</p>
                @if ($errors->has('photo2'))
                  <span class="help-block">
                    <strong>{{$errors->first('photo2')}}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto 3</label>
                <input type="file" id="exampleInputFile" name="photo3" accept="image/x-png,image/gif,image/jpeg,image/x-MS-bmp" value="{{old('photo3')}}">
                <p class="help-block">Maksimal Foto 1 MB.</p>
                @if ($errors->has('photo3'))
                  <span class="help-block">
                    <strong>{{$errors->first('photo3')}}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto 4</label>
                <input type="file" id="exampleInputFile" name="photo4" accept="image/x-png,image/gif,image/jpeg,image/x-MS-bmp" value="{{old('photo4')}}">
                <p class="help-block">Maksimal Foto 1 MB.</p>
                @if ($errors->has('photo4'))
                  <span class="help-block">
                    <strong>{{$errors->first('photo4')}}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto 5</label>
                <input type="file" id="exampleInputFile" name="photo5" accept="image/x-png,image/gif,image/jpeg,image/x-MS-bmp" value="{{old('photo5')}}">
                <p class="help-block">Maksimal Foto 1 MB.</p>
                @if ($errors->has('photo5'))
                  <span class="help-block">
                    <strong>{{$errors->first('photo5')}}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto 6</label>
                <input type="file" id="exampleInputFile" name="photo6" accept="image/x-png,image/gif,image/jpeg,image/x-MS-bmp" value="{{old('photo6')}}">
                <p class="help-block">Maksimal Foto 1 MB.</p>
                @if ($errors->has('photo6'))
                  <span class="help-block">
                    <strong>{{$errors->first('photo6')}}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto 7</label>
                <input type="file" id="exampleInputFile" name="photo7" accept="image/x-png,image/gif,image/jpeg,image/x-MS-bmp" value="{{old('photo7')}}">
                <p class="help-block">Maksimal Foto 1 MB.</p>
                @if ($errors->has('photo7'))
                  <span class="help-block">
                    <strong>{{$errors->first('photo7')}}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto 8</label>
                <input type="file" id="exampleInputFile" name="photo8" accept="image/x-png,image/gif,image/jpeg,image/x-MS-bmp" value="{{old('photo8')}}">
                <p class="help-block">Maksimal Foto 1 MB.</p>
                @if ($errors->has('photo8'))
                  <span class="help-block">
                    <strong>{{$errors->first('photo8')}}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Foto 9</label>
                <input type="file" id="exampleInputFile" name="photo9" accept="image/x-png,image/gif,image/jpeg,image/x-MS-bmp" value="{{old('photo9')}}">
                <p class="help-block">Maksimal Foto 1 MB.</p>
                @if ($errors->has('photo9'))
                  <span class="help-block">
                    <strong>{{$errors->first('photo9')}}</strong>
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
<!-- Bootstrap WYSIHTML5 -->
<script src="/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
</body>
</html>
