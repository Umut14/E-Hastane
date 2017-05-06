<?PHP
include("inc/header.php");
?>
<?php if (!session()) header("Location: giris.php"); ?>

<div class="container-fluid" style="padding:0;">
    <a name="hemsire"></a>
    <?php include("inc/leftbar.php"); ?>
    <div class="col-md-10 col-sm-10">
        <div class="row right">
            <div class="col-md-12 col-sm-12">
                <h3 style="margin-top: 10px">Bilgiler</h3>
            </div>
            <div class="col-md-9 col-sm-9 bottom479">
                <div class="main-right bottomtop">

                  <?php if (isset($_GET['hemsire'])) { ?>

                    <form style="margin-top: 15px" action="" method="POST">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Gün Seçiniz</th>
                                    <th>Saat Seçiniz</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding-top: 13px; padding-bottom: 0px; width: 30%">
                                        <div class="col-md-10 col-sm-10" style="padding: 0; margin: 0 auto;">
                                            <div class="input-append date dp3" data-date-format="yyyy-mm-dd">
                                                <input class="form-control span2" type="date" name="date_picker"/>
                                                <span class="add-on">
                                                <!-- <span class="calender glyphicon glyphicon-calendar"></span> -->
                                            </span>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            $('.dp3').datepicker({
                                                language: 'tr'
                                            });
                                        </script>
                                    </td>
                                    <td style="padding-top: 13px; padding-bottom: 0px; width: 30%">

                                        <select  style="padding-top: 10px" class="btn btn-default form-group" name="saat">

                                            <?php
                                            for ($i = 0; $i < 24; $i++) {

                                                $a = $i;

                                                if (strlen($a) == 1) $a = '0' . $a;

                                                echo '<option value="' . $i . '">' . $a . ':00' . '</option>';
                                            }

                                            ?>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                        <hr style="margin-top: -20px">
                        <div class="form-group">
                            <button class="btn btn-primary" value="1">Randevuyu Kaydet</button>
                        </div>
                    </form>

                  <?php if(randevu_kaydet()) { ?>
                          <div class="form-group">
                              <button class="btn btn-success" value="1">Randevunuz başarılı bir şekilde sisteme kaydedilmiştir.</button>
                          </div>
                  <?php } ?>

                  <?php } else { ?>

                        <h3 style="margin-top: 0px">Hemşire Listesi</h3>

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Seç</th>
                                    <th>Adı</th>
                                    <th>Soyadı</th>
                                    <th>Ünvanı</th>
                                    <th>Puanı</th>
                                </tr>
                                </thead>
                                <tbody>
                                  <?php foreach(hemsireler() as $h) { ?>
                                    <tr>
                                        <!--<td><input type="radio" name="hemsire_sec" value="<?=$h['User_ID']?>"></td>-->
                                        <td class="hastalist" style="padding-top: 25px; padding-bottom: 0px">
                                            <a href="?hemsire=<?=$h['User_ID']?>">Seç</a>
                                        </td>
                                        <td class="hastalist" style="padding-top: 25px; padding-bottom: 10px"><?=$h['Ad']?></td>
                                        <td class="hastalist" style="padding-top: 25px; padding-bottom: 10px"><?=$h['Soyad']?></td>
                                        <td class="hastalist" style="padding-top: 25px; padding-bottom: 10px"><?=unvan_cek($h['Rol'])?></td>
                                        <td style="padding-top: 12px; padding-bottom: 10px">
                                            <div>
                                                <form action="deneme.php" method="POST">
                                                  <input type="text" class="rating rating-loading" value="5" data-size="xs" title="">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                  <?php } ?>
                                </tbody>
                            </table>
                        <?php } ?>
                    </div>
            </div>
            <?php include("inc/sidebar.php"); ?>
        </div>
    </div>
</div>
<script>
    $(document).on('ready', function () {

        $('.rating,.kv-gly-star,.kv-gly-heart,.kv-uni-star,.kv-uni-rook,.kv-fa,.kv-fa-heart,.kv-svg,.kv-svg-heart').on(
            'change', function () {
                console.log('Rating selected: ' + $(this).val());
            });
    });
</script>
<?php
include("inc/footer.php");
?>
