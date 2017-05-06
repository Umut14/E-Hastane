<?PHP
include("inc/header.php");
?>
<?php if (!session()) header("Location: giris.php"); ?>

<div class="container-fluid" style="padding:0;">
  <?php include("inc/leftbar.php"); ?>
  <a name="hastalistesi"></a>
  <div class="col-md-10 col-sm-10">
    <div class="row right">
        <div class="col-md-12 col-sm-12">
            <h3 style="margin-top: 10px">Bilgiler</h3>
        </div>
        <div class="col-md-9 col-sm-9 bottom479">
        <div class="main-right bottomtop">
            <h3 style="margin-top: 0px">Hasta Listesi</h3>
            <form style="margin-top: 15px" action="">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Adı</th>
                        <th>Soyadı</th>
                        <th>Tarih</th>
                        <th>Saat</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach(randevu_listele(1) as $r) { ?>
                    <tr>
                        <td style="padding-top: 15px; padding-bottom: 12px"><?=$r['Ad']?></td>
                        <td style="padding-top: 15px; padding-bottom: 12px"><?=$r['Soyad']?></td>
                        <td style="padding-top: 15px; padding-bottom: 12px"><?=$r['Randevu_Tarihi']?></td>
                        <td style="padding-top: 15px; padding-bottom: 12px"><?=$r['Saat']?>:00</td>

                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </form>
          </div>
      </div>
        <?php include("inc/sidebar.php"); ?>
    </div>
  </div>
</div>
<?php
include("inc/footer.php");
?>
