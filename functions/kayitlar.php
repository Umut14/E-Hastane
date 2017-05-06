<?php

function randevu_kaydet() {
  global $db;

  if ($_POST) {
    $hasta = id();
    $hemsire = $_GET['hemsire'];

    $gun = post("date_picker");
    $saat = post("saat");

    $query = $db->prepare("INSERT INTO randevular SET Hasta = ?, Hemsire = ?, Tarih = ?, Saat = ?");
    $query->execute(array($hasta, $hemsire, $gun, $saat));

    return $query;
  }
  else return false;
}


function yetenek_ekle() {
  global $db;

  $eski_yetenekler = array();

  foreach (yetenek_listele(id()) as $key) {
    $eski_yetenekler[] = $key['Yetenek_ID'];
  }

  if ($_POST) {
    $yetenekler = $_POST["yetenek"];

    if (count($yetenekler) > 1) {
      foreach($yetenekler as $yetenek) {
        if (!in_array($yetenek, $eski_yetenekler)) {
          $query = $db->prepare("INSERT INTO user_yetenek SET Hemsire = ?, Yetenek = ?");
          $query->execute(array(id(), $yetenek));
        }
      }
    }
    else {
      if (!in_array($yetenekler[0], $eski_yetenekler)) {
        $query = $db->prepare("INSERT INTO user_yetenek SET Hemsire = ?, Yetenek = ?");
        $query->execute(array(id(), $yetenekler[0]));
      }
    }

    //header("Location: /Umut/UmutProje/ekle.php");
  }

}

function yetenek_kaldir() {
  global $db;
  $user = id();
  $yetenek = $_GET['kaldir'];

  $query = $db->prepare("DELETE FROM user_yetenek WHERE Hemsire = ? AND Yetenek = ?");
  $query->execute(array($user, $yetenek));

  if ($query) return true;

}

function save_user() {

  global $db;

  if ($_POST) {
      $rol = post("rol");
      $ad = post("Ad");
      $soyad = post("Soyad");
      $tc = post("Tc");
      $telefon = post("Telefon");
      $uni = post("Uni");
      $sehir = post("Sehir");
      $email = post("Email");
      $sifre = post("Sifre");

      echo $rol . " " . $ad;

      $query = $db->prepare("INSERT INTO users
        SET E_Mail = ?, Password = ?, Ad = ?, Soyad = ?, Tc = ?, Telefon = ?, Universite = ?, Sehir = ?, Rol = ?");
      $query->execute(array($email, $sifre, $ad, $soyad, $tc, $telefon, $uni, $sehir, $rol));

      create_session($id, $ad, $soyad);

  }

}
