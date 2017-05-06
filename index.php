<?PHP
 include("inc/header.php");
?>

<?php if (!session()) header("Location: giris.php"); ?>

<div class="container-fluid" style="padding:0;">
    <?php include("inc/leftbar.php"); ?>
    <a name="profil"></a>
    <div class="col-md-10 col-sm-10">
        <div class="row right">
            <div class="col-md-12 col-sm-12">
                <h3 style="margin-top: 10px">Bilgiler</h3>
            </div>
            <div class="col-md-9 col-sm-9 bottom479">
                <?php include("inc/right.php"); ?>
            </div>
            <?php include("inc/sidebar.php"); ?>
        </div>
    </div>
</div>
<?php
include("inc/footer.php");
?>
