
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin  | Add Gallery</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('/') }}plugins/fontawesome-free/css/all.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset ('/') }}plugins/select2/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('/') }}dist/css/adminlte.min.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo2.png') }}" type="image/x-icon" />

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item"> <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a> </li>
      <li class="nav-item d-none d-sm-inline-block active">
        <a href="/admin/tabelGallery" class="nav-link">Data Foto</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/tambahGallery" class="nav-link">Tambah Foto</a>
      </li>
    </ul>
        </ul>
      <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Admin Account</span>
          <div class="dropdown-divider"></div>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Logout
          </button>
        </form>
        </div>
      </li>
     </ul>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Welcome to Your Gallery</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/images/Logo.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->namaLengkap }}  </a>
        </div>
      </div>

    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallery</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Tambah Foto</h3>
              </div>

              <!-- form start -->
              <form method="POST" action="{{ route('SimpanGallery') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="judulFoto">Nama foto</label>
                    <input type="text" class="form-control" id="judulFoto" placeholder="Masukkan Nama Foto" name="judulFoto">
                  </div>
                    <div class="form-group">
                    <label for="deskripsiFoto">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsiFoto" placeholder="Masukkan Deskripsi" name="deskripsiFoto">
                  </div>
                  <div class="form-group">
                    <label for="lokasiFile">Masukkan Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="lokasiFile" placeholder="masukkan gambar buku" name="lokasiFile">
                        <label class="custom-file-label" for="Gambarbuku">Choose File</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="add produk">Submit</button>
                </div>
              </form>
            </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


    <!-- /.content -->
  </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2024 <a href="https://github.com/aliraaswrld">aliraaswrld</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script>
    $(function () {
      $('.select2').select2()
    });
</script>
</body>
</html>
