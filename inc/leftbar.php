<div class="col-md-2 col-sm-2 left left479" >
    <ul class="nav navbar">
        <li class="left-li">
            <a href="index.php#profil"><i class="bosluk fa fa-user-circle-o"></i>Profil</a>


            <?php if (session()) { ?>

            <?php if (user_info(id())['Rol'] > 1) { ?>
                <a href="hastalistele.php#hasta"><i class="bosluk fa fa-heartbeat"></i>Hastalar</a>
                <a href="bilgiguncelle.php"><i class="bosluk fa fa-edit"></i>Bilgi Güncelle</a>

            <?php } else { ?>
                <a href="ara.php#ara"><i class="bosluk fa fa-search"></i>Arama yap</a>
                <a href="hemsirelistele.php"><i class="bosluk fa fa-heartbeat"></i>Hemşireler</a>
                <a href="randevularim.php"><i class="bosluk fa fa-calendar-check-o"></i>Randevularım</a>
                <a href="bilgiguncelle.php"><i class="bosluk fa fa-edit"></i>Bilgi Güncelle</a>
            <?php } ?>

            <?php } ?>

        </li>
    </ul>
</div>
