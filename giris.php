<?PHP
include("inc/header.php");
if (!session()) {

?>
<div style="background-color: #ECF0F5; min-height: 580px; height: auto;" class="container-fluid">
    <div class="col-md-offset-3 col-md-6 col-sm-6">
        <form class="form-horizontal giristop" method="POST" action="">
            <div class="form-group">
                <div class="col-sm-offset-2 col-md-8 col-sm-8">
                    <img style="margin: 0 auto;" class="img-responsive" src="img/logoo.jpg" alt="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-md-8 col-sm-8">
                    <input name="email" type="text" class="form-control"  placeholder="E-mail Adresiniz">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-md-8 col-sm-8">
                    <input name="sifre" type="password" class="form-control" placeholder="Şifre">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-md-8 col-sm-8">
                    <button name="gonder" type="submit" class="btn btn-primary btn-lg btn-block">Giriş Yap</button>
                </div>
            </div>

            <div class="form-group text-center">
                <div class="btn btn-primary" >
                    <a href="kayit.php" style="color: #FFF; text-decoration: none;">Hemen Kayıt OL</a>
                </div>
                <!-- <div style="margin-bottom: 0px" class="collapse" id="collapseExample">
                    <div class="well">
                        <a href="kayit.php" class="btn btn-danger">Kayıt Ol</a>
                    </div>
                </div> -->
            </div>

        </form>


    </div>
</div>
<?php } else {
  header("Location: index.php");
} ?>
<?php
login();
include("inc/footer.php");
?>
