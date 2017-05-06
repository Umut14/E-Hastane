<?PHP
include("inc/header.php");
?>
<?php if (!session()) header("Location: giris.php"); ?>

<div class="container-fluid" style="padding:0;">
    <?php include("inc/leftbar.php"); ?>

    <div class="col-md-10 col-sm-10">
        <div class="row right">
            <div class="col-md-12 col-sm-12">
                <h3 style="margin-top: 10px;">Bilgiler</h3>
            </div>
            <div class="col-md-9 col-sm-9 bottom479">
                <div class="main-right bottomtop">
                    <h3 style="margin-top: 0px">Bilgi Güncelle</h3>
                    <form action="" method="POST" style="margin-top: 10px">

                        <input type="hidden" name="guncelle_formu" value="1">
                        <div class="form-group">
                            <label>Adı</label>
                            <input type="text" class="form-control" name="Ad" placeholder="Adınız"
                                   value="<?=user_info(id())['Ad']?>">
                        </div><div class="form-group">
                            <label>Soyadı</label>
                            <input type="text" class="form-control" name="Soyad" placeholder="Soyadınız"
                                   value="<?=user_info(id())['Soyad']?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="Email" placeholder="Email"
                                   value="<?=user_info(id())['E_Mail']?>">
                        </div>
                        <div class="form-group">
                            <label>Eğitim</label>
                            <select name="Uni" class="form-control">
                                <?php

                                $uni = user_info(id())['Universite'];

                                foreach(uniler() as $u) {
                                    if ($u['UniID'] == $uni) $selected = "selected";
                                    else $selected = "";
                                    $option = '<option value="' . $u['UniID'] . '" ' . $selected . '>' . $u['UniAdi'] . '</option>';
                                    echo $option;
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Konum</label>
                            <select name="Sehir" class="form-control">
                                <?php
                                $sehir = user_info(id())['Sehir'];
                                foreach(sehirler() as $s) {
                                    if ($s['Plaka'] == $sehir) $selected = "selected";
                                    else $selected = "";
                                    echo '<option value="' . $s['Plaka'] . '" ' . $selected . '>' . $s['SehirAdi'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Telefon Numarası</label>
                            <input type="text" class="form-control" name="Tel" placeholder="Telefon Numarası"
                                   value="<?=user_info(id())['Telefon']?>">
                        </div>
                        <button type="submit" class="btn btn-danger">Bilgilerimi Güncelle</button>
                    </form>
                    <?php update_user(); ?>
                </div>
            </div>
            <?php include("inc/sidebar.php"); ?>
        </div>
    </div>
</div>
<?php
include("inc/footer.php");
?>
