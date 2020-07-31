<?php 
include"../baglan.php";

@session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $Ayar['ayar_baslik'] ?></title>

  <!-- Bootstrap -->
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form action="login_kontrol.php" method="POST">
            <h1>Giriş Formu</h1>
            <?php 
            if(isset($_GET['logout']))
            {
              ?>
              <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                Çıkış Yapılmıştır
              </div>
              <?php 
            }

            if(isset($_GET['hata']))
            {
              ?>
              <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                Kullanıcı Mail veya Şifre HATALI
              </div>
              <?php 
            }
            ?>
            <div>
              <input type="text" name="kadi" class="form-control" placeholder="Mail Adresinizi Giriniz" required="" />
            </div>
            <div>
              <input type="password" name="sifre" class="form-control" placeholder="Şifrenizi Giriniz" required="" />
            </div>
            <div>
              <input type="submit" value="Giriş Yap" class="btn btn-default submit" style="float: none; margin: 0; width: 100%">
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <div class="clearfix"></div>
              <br />
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>
</html>
