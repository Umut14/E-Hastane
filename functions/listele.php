<?php

function randevu_listele($kim_icin) {
  global $db;
  if ($kim_icin == 1) { // Hemsire için randevuları listele
    $query = $db->prepare("SELECT *, r.Tarih as Randevu_Tarihi FROM randevular r
      INNER JOIN users u ON u.User_ID = r.Hasta WHERE r.Hemsire = ? ORDER BY r.Tarih ASC");
    $row = $query->execute(array(id()));
  }
  else { // Hastanın kendi randevuları
    $query = $db->prepare("SELECT *, r.Tarih as Randevu_Tarihi FROM randevular r
      INNER JOIN users u ON u.User_ID = r.Hemsire WHERE r.Hasta = ? ORDER BY r.Tarih ASC");
    $row = $query->execute(array(id()));
  }

  return $query;
}

function unvan_cek($unvan_id) {
    global $db;
    $query = $db->prepare("SELECT * FROM unvanlar WHERE Unvan_ID = ?");
    $query->execute(array($unvan_id));
    $row = $query->fetch();
    return $row['Unvan_Adi'];
}

function hemsireler() {
  global $db;
  if (isset($_GET['yetenek'])) {
    $yetenek = $_GET['yetenek'];

    $query = $db->prepare("SELECT * FROM users u
      INNER JOIN user_yetenek y ON y.Hemsire = u.User_ID
      WHERE u.Rol > 1 AND y.Yetenek = ?");
    $query->execute(array($yetenek));

      return $query;

  }
  else {
    return $db->query("SELECT * FROM users WHERE Rol > 1");
  }

}


function yetenek_listele($kimin) {
  global $db;

  if ($kimin) {
    $query = $db->prepare("SELECT * FROM yetenekler y
      INNER JOIN user_yetenek uy ON uy.Yetenek = y.Yetenek_ID
      WHERE uy.Hemsire = ?");

      $query->execute(array($kimin));
      return $query->fetchAll();
  }
  else {
    return $db->query("SELECT * FROM yetenekler");
  }

}

function user_info($id) {

  global $db;

  $query = $db->prepare("SELECT * FROM users u
    LEFT JOIN sehirler s ON s.Plaka = u.Sehir
    WHERE u.User_ID = ?");
  $query->execute(array($id));
  return $query->fetch();
}
function unvan() {
    global $db;
    return $db->query("SELECT * FROM unvanlar");
}

function sehirler() {
  global $db;
  return $db->query("SELECT * FROM sehirler ORDER BY SehirAdi ASC ");
}

function uniler() {
    global $db;
    return $db->query("SELECT * FROM uniler");
}

function uni_cek($id) {
  global $db;
  $query = $db->prepare("SELECT * FROM uniler WHERE UniID = ?");
  $query->execute(array($id));
  $cek = $query->fetch();
  return $cek['UniAdi'];
}
