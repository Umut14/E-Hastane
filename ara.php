<?PHP
include("inc/header.php");
?>

<?php if (!session()) header("Location: giris.php"); ?>

<div class="container-fluid" style="padding:0;">
    <?php include("inc/leftbar.php"); ?>
    <a name="ara"></a>
    <div class="col-md-10 col-sm-10 ">
        <div class="row right">
            <div class="col-md-12 col-sm-12">
                <h3 style="margin-top: 10px">Bilgiler</h3>
            </div>
            <div class="col-md-9 col-sm-9 bottom479">
                <div class="main-right bottomtop">
                        <h3 style="margin-top: 0px">Arama İşlemi Formu</h3>
                        <form style="margin-top: 15px" action="hemsirelistele.php">
                            <div class="form-group">
                              <select class="col-md-4 col-sm-4 btn btn-primary" name="yetenek">
                                <?php foreach (yetenek_listele(0) as $y) {
                                  echo '<option value="' . $y['Yetenek_ID'] . '">' . $y['Yetenek_Adi'] . '</option>';
                                }
                                ?>
                              </select>
                            </div>
                            <div style="padding-top: 40px" class="clearfix"></div>
                            <button type="submit" class="btn btn-primary">Ara</button>
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
