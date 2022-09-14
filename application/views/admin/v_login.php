<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UMKM GLAGAH | Masuk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/img/logos/logo-umkm-glagah-favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/iCheck/square/blue.css'?>">


  <style type="text/css">
      body{
        background-image: url('<?php echo base_url('assets/images/background.jpg')?>');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
        top: 0
      }
      .login_wrapper{
        margin-top: 0
      }
      .form-login{
        background: #fffe;
        padding: 30px
      }
      .loginpage-logo{
        background-color: #023047;
        margin-bottom: 100px;
        padding: 20px;
      }
    </style>
</head>
  <body class="d-flex align-items-center">
    <div class="loginpage-logo text-center">
      <img src="<?php echo base_url()?>assets/img//logos/logo-umkm.png" width="300"/>
    </div>

    <div class="animate form-login">
      <section class="">
        <form action="<?php echo site_url('/administrator/auth')?>" method="POST">
          <h3 class="text-danger"><i class="fa fa-map-marker"></i> UMKM DESA GLAGAH</h3>
            <h1>Login Form</h1>
              <?=$this->session->flashdata('msg')?>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="Username" name="username" required="" />
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password" required="" />
                </div>

                <div class="checkbox icheck">
                  <label>
                  <input type="checkbox"> Remember Me
                  </label>
                </div>
                    
                <div>
                  <button type="submit" class="btn btn-primary btn-block submit">Masuk</button>
                    <a href="<?php echo site_url()?>/admin/register" class="btn btn-dark btn-block" style="background: #DCDCDC">Daftar</a><br>
                    <a class="btn btn-success" href="<?= site_url()?>/home"><span><i class="fa fa-angle-left pull-left">  Kembali ke Beranda</i></span></a>
                </div>
          </form>
      </section><br>
        <!--<div>
          <p><strong>Admin</strong></p>
          Username : raya <br>
          Password : 123 <hr>

          <p><strong>Super Admin</strong></p>
          Username : admin<br>
          Password : admin
        </div>-->
    </div>
    <!--<div class="col-sm-12"> <br><br><br><br><br><br> </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8"><br>
              
            </div>
          </div>
          
        </div>
        <div class="col-md-6 d-xs-none">
          <img src="<?php echo base_url('assets/img/bg-umkm-2.png')?>" width="80%">
        </div> -->
  </body>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url().'assets/plugins/iCheck/icheck.min.js'?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
