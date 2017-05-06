<?php
include ("functions/main.php");
if (isset($_POST["guncelle_formu"])) header("Location: /Umut/UmutProje/");
header_remove();
?>
<!DOCTYPE html>
<html lang="TR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anasayfa</title>

    <link href="bootstrap/css/font-awesome.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/datepicker.css">
    <link rel="stylesheet" href="bootstrap/css/star-rating.css" media="all" type="text/css"/>

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="bootstrap/css/main.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script src="bootstrap/js/jquery.js"></script>

    <script src="bootstrap/js/bootstrap-datepicker.js"></script>
    <script src="bootstrap/js/bootstrap-datepicker.tr.js" charset="UTF-8"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="bootstrap/js/star-rating.js" type="text/javascript"></script>

    <title>Anasayfa</title>
</head>
<body>

<header class="header container-fluid">

    <div style="width:100%;left:0;position:absolute;z-index:99999;">
      <div class="col-md-2 col-sm-2 left-header">
          <a href="index.php"><img class="img-responsive" src="img/right.png" style="margin: 0 auto; padding-top: 5px" alt=""></a>
      </div>

        <?php if (session()) { ?>

        <div class="col-md-10 col-sm-10 right-header">
            <div class="navbar-right special">
              <?php if (user_info(id())['Rol'] > 1) { ?>

              <a style="color: #FFF; text-decoration: none;" href="ekle.php">+ Yetenek Ekle - </a>
              <?php } ?>
              <span style="color: #f78f6e; font-weight: bold"><?=user_info(id())['Ad']?> <?=user_info(id())['Soyad']?></span>
              -<a style="color: #FFF;text-decoration: none;" href="cikis.php"> Çıkış Yap</a></div>
        </div>

    </div>
    <?php } else { ?>
      <div class="col-md-10 col-sm-10 right-header">
          <div class="navbar-right special"><a style="color: #FFF" href="giris.php">Giriş Yap</a></div>
      </div>

      <?php } ?>
</header>
