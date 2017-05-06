<div class="main-right">
    <div class="togglable-tabs">

        <ul class="nav nav-tabs" id="myTabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" id="home-tab" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">Hemşire Listesi</a></li>
            <!-- <li role="presentation"><a href="#profile" id="profile-tab" aria-controls="profile" role="tab" data-toggle="tab">Uygun Olduğu Zamanlar</a></li> -->
            <!-- <li role="presentation"><a href="#settings" id="settings-tab" aria-controls="settings" role="tab" data-toggle="tab">Bilgi Güncelle</a></li> -->
        </ul>

        <div class="tab-content" id="myTabContent">
            <div role="tabpanel" class="tab-pane fade in active bosluk-tab" id="home" aria-labelledby="home-tab">

                <div class="bottomtop">

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
                                                    <input class="form-control span2" type="text" name="date_picker"/>
                                                    <span class="add-on">
                                                <span class="calender glyphicon glyphicon-calendar"></span>
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

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Seç</th>
                                    <th>Adı</th>
                                    <th>Soyadı</th>
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
                                        <td style="padding-top: 12px; padding-bottom: 10px">
                                            <div>
                                                <input type="text" class="rating rating-loading" value="3" data-size="xs" title="">
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        <?php } ?>

                    </div>

            </div>
            <!-- <div role="tabpanel" class="tab-pane fade bosluk-tab" id="settings" aria-labelledby="settings-tab">
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
                /* update_user() komutunu yaz php içinde */
            </div> -->
        </div>
    </div>
</div>
