
<div class="col-md-3 col-sm-3" style="height: auto; margin-bottom: 15px;">
    <div class="main-left text-center">
        <img class="img-circle img-responsive font" src="img/1.png" alt="Profil">
        <div style="margin-top: 15px; font-weight: bold; font-size: 15px;">
          <?php echo user_info(id())['Ad'] . " " .user_info(id())['Soyad']; ?>
        </div>
    </div>
    <div class="main-left2">
        <span style="font-weight: bold">Hakkında</span>
        <div style=" margin-top: 15px; border: 0; border-top: 1px solid #eee;"></div>
        <ul class="menu">
            <li class="left-li2">
                <a href=""><i class="bosluk fa fa-book"></i>Eğitim</a>
                <div class="bosluk-ust">
                    <?php echo uni_cek(user_info(id())['Universite']); ?>
                </div>
            </li>
            <div style=" margin-top: 15px; border: 0; border-top: 1px solid #eee;"></div>
            <li class="left-li">
                <a href=""><i class="bosluk fa fa-map-marker"></i>Konum</a>
                <div class="bosluk-ust">
                    <?=user_info(id())['SehirAdi']?>
                </div>
            </li>
              <?php if (user_info(id())['Rol'] > 1) { ?>
            <div style=" margin-top: 15px; border: 0; border-top: 1px solid #eee;"></div>
            <li class="left-li">
                <a href=""><i class="bosluk fa fa-pencil"></i>Yetenekler</a>
                <?php foreach(yetenek_listele(id()) as $y) {
                    echo '<div class="bosluk-ust">' . $y['Yetenek_Adi'] . '</div>';
                }?>
            </li><?php } ?>
            <div style=" margin-top: 15px; border: 0; border-top: 1px solid #eee;"></div>
            <li class="left-li">
                <a href=""><i class="bosluk fa fa-phone"></i>Telefon Numarası</a>
                <div class="bosluk-ust">
                    <?php echo user_info(id())['Telefon']?>
                </div>
            </li>
        </ul>
    </div>
</div>
