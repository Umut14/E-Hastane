<?php
  include("inc/header.php");
  if (isset($_GET['kaldir']))
    yetenek_kaldir();

  yetenek_ekle();
?>


<div style="background-color: #ECF0F5; min-height: 650px;" class="container-fluid ">
  <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 yetenekekle">
      <div class="row" >
        <div class="col-xs-6 col-sm-6" style="margin-top: 20px;" >
          <form class="form" onsubmit="return isValid(this)" method="POST" action="">
            <div class="form-group text-center">
              <h3 class="eklestyle">Yeteneklerinizi Buradan Ekleyiniz </h3>
            </div>

            <input type="hidden" name="yetenek_ekle" value="true">

            <ul class="col-md-12 col-sm-12 form-group yetenek_listesi">
              <?php

              $eski_yetenekler = array();

              foreach (yetenek_listele(id()) as $key) {
                $eski_yetenekler[] = $key['Yetenek_ID'];
              }

              // print_r($eski_yetenekler);

              foreach(yetenek_listele(0) as $y) {
                if (!in_array($y['Yetenek_ID'], $eski_yetenekler)) {
                  $input = '<li><input class="yetenekkutu" id="check_yetenek" type="checkbox" name="yetenek[]" value="' . $y['Yetenek_ID'] . '">';
                  $input .= '<span class="yetenektext" for="check_yetenek">' . $y['Yetenek_Adi'] . ' </span> ';
                  $input .= '<div style="clear:both;"></div></li>';
                  echo $input;
                }
              }

              ?>
            </ul>

            <div class="col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10">
              <button style="margin-bottom: 30px" type="submit" class="btn btn-primary btn-lg btn-block eklebuton">Ekle</button>
            </div>
          </form>
        </div>

        <div class="col-xs-6 col-sm-6 ekleformstyle">
          <div class="form-group text-center">
            <h3 class="eklestyle">Yetenekleriniz</h3>
          </div>
          <ul class="col-md-12 col-sm-12 form-group yetenek_listesi">
            <?php
            foreach(yetenek_listele(0) as $y) {
              if (in_array($y['Yetenek_ID'], $eski_yetenekler)) {
                $input = '<li>';
                $input .= '<span class="yetenektext">' . $y['Yetenek_Adi'] . ' </span>';
                $input .= '<a style="float: right; margin-top: 7px; margin-right: 7px;" href="ekle.php?kaldir=' . $y['Yetenek_ID'] . '">Kaldır</a>';
                $input .= '<div style="clear:both;"></div></li>';
                echo $input;
              }
            }
            ?>
          </ul>
        </div>
      </div>
  </div>
</div>

<?php
include("inc/footer.php");
?>
