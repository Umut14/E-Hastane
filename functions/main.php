<?php

session_start();

include_once("updates.php");
include_once("listele.php");
include_once("kayitlar.php");

function connect () {
    try {
        $db = new PDO("mysql:host=localhost; dbname=ehastane; charset=utf8", "root", "");
    } catch ( PDOException $e ){
        print $e->getMessage();
    }
    return $db;
}

$db = connect();

function post($post) {
    return filter($_POST[$post]);
}

function filter($string) {
    return htmlspecialchars(trim($string));
}

function login() {
  global $db;
  if ($_POST) {
      $email = post("email");
      $sifre= post("sifre");

      $query = $db->prepare("SELECT * FROM users WHERE E_Mail = ? AND Password = ?");
      $row = $query->execute(array($email, $sifre));

      if ($query->rowCount()) { // Herhangi bir veri varsa
          $cek = $query->fetch(); // Verileri çektir - $cek demek array aslında
          $id = $cek['User_ID']; // Array içinden id'sini çektir
          $rol = $cek['Rol']; // Hemşire mi Hasta mı. Hemşire = 1, Hasta = 0
          create_session($id, $rol);
      }
      else {
          echo "<div style='color: #FFF; font-size: 18px; height: 60px; line-height: 60px; text-align: center; background-color: #C4332F; '>Giriş Başarısız, Lütfen Tekrar Deneyiniz</div>";
      }
    }
}

function session() {
  if (isset($_SESSION['ID'])) return 1;
  else return false;
}

function create_session($id, $rol) {

  session_destroy();
  session_start();

  $_SESSION['ID'] = $id;
  $_SESSION['ROL'] = $rol;

  header("Location: giris.php");
}

function id() {
  if (session()) return $_SESSION['ID'];
  else return 0;
}
