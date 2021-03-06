<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Kulzein | Log in</title>
 <link href='<?=base_url("assets/uploads/images/logoIconKulzein2.png"); ?>' rel='shortcut icon' type='image/x-icon' />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet"
    href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img src="<?=base_url("assets/vendor/AdminLTE-3.0.5/dist/img/logoatas.png"); ?>">
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Silahkan Masuk</p>
        <form action="<?=base_url('index.php/login/ceklogin');?>" method="POST">
          <?php 
              $info = $this->session->flashdata('info');
              if(!empty($info)){
                echo $info;
              }
            ?>
          <div class="input-group mb-3">
            
            <input type="text" class="form-control" placeholder="email" name="email"><br>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span> 
              </div>
            </div>
          </div>
          

          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="password" name="password">
            
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
                
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Ingat Saya
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Masuk</button>
            </div>
            
            <!-- /.col -->
          </div>
        </form>

       

        
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url('assets');?>/vendor/AdminLTE-3.0.5/dist/js/adminlte.min.js"></script>

</body>

</html>
