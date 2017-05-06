<?php

  function update_user() {
    global $db;
    if ($_POST) {
      $ad = post("Ad");
      $soyad = post("Soyad");
      $mail = post("Email");
      $universite = post("Uni");
      $konum = post ("Sehir");
      $tel = post ("Tel");

      $data = array($ad, $soyad, $mail, $universite, $konum, $tel, id());

      if (!in_array("", $data)) { // Verilerde boş var mı yok mu kontrol et
        $query = $db->prepare("UPDATE users SET Ad = ?, Soyad = ?, E_Mail = ?, Universite = ?,
          Sehir = ?, Telefon = ? WHERE User_ID = ?");
        $query->execute($data);
      }
    }

  }

function randevu_iptal() {
    global $db;

    if (isset($_GET['iptal'])) {
        $randevu = $_GET['iptal'];
        $query = $db->prepare("DELETE FROM randevular WHERE Randevu_ID = ?");
        $query->execute(array($randevu));
    }

}