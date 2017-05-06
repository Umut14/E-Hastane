<?PHP
include("inc/header.php");
save_user();
?>
<div style="background-color: #ECF0F5; min-height: 650px;" class="container-fluid ">
    <div class="col-md-offset-3 col-md-6 col-sm-6">

        <form style="margin-top: 50px; margin-bottom: 15px" class="form-horizontal" onsubmit="return isValid(this)" method="post" action="">
            <div class="form-group text-center">
                <div class="col-sm-offset-1 col-sm-10">
                    <h2 class="marginust">Formu Doldurarak Hemen Kayıt Olun </h2>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-md-8 col-sm-8">
                    <select name="rol" class="form-control">
                        <?php
                        foreach(unvan() as $n) {
                            echo '<option value="' . $n['Unvan_ID'] . '">' . $n['Unvan_Adi'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <input name="Ad" type="text" class="form-control"  placeholder="Adınız">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <input name="Soyad" type="text" class="form-control" placeholder="Soyadınız">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <input name="Tc" type="text" class="form-control" placeholder="TC Numaranız">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <input name="Telefon" type="text" class="form-control" placeholder="Telefon Numaranız">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <select name="Uni" class="form-control">
                        <?php
                        foreach(uniler() as $u) {
                            echo '<option value="' . $u['UniID'] . '">' . $u['UniAdi'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <select name="Sehir" class="form-control">
                      <?php
                      foreach(sehirler() as $s) {
                        echo '<option value="' . $s['Plaka'] . '">' . $s['SehirAdi'] . '</option>';
                      }
                      ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <input name="Email" type="text" class="form-control" placeholder="E-mail">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <input name="Sifre" type="password" class="form-control" placeholder="Şifre">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Kayıt Ol</button>
                </div>
            </div>
        </form>

    </div>
</div>
<?php

include("inc/footer.php");
?>
