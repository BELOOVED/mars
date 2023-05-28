<?php

require_once 'mobile.class.php';

ob_start();
session_start();
error_reporting(0);
date_default_timezone_set('Europe/Istanbul');

// Database Info
const DB_HOST = "localhost";
const DB_LOGIN = "marsbahis_123a";
const DB_PASS = "4Pdc5r09?";
const DB_NAME = "marsbahis_123a";
const SYSNAME = 'Marsbahis';
const ENV = 'prod';

const ADMIN_PATH = 'ates';
const USERID = '201904683453';

include "providers.php";

// Connecting Database
$db = new Mysqli(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);
if ($db->connect_errno) {
  die('Mysql connection is incorrect');
}
$db->set_charset("utf8");

// Get main table from database
$main = $db->query("SELECT * from main where id=1")->fetch_assoc();

// Get user data
$user_id = intval($_SESSION['user_id']);
if (!empty($user_id)) {
  $us = $db->query("SELECT * from users where id='$user_id'")->fetch_assoc();
}

// Admin logged status
$admin = false;
if ($_SESSION['admin_login'] == $main['admin_login'] && $_SESSION['admin_password'] == $main['admin_password']) {
  $admin = true;
}

// Mobile device detection
$detect = new Mobile_Detect;
$mobile = $detect->isMobile();

// Odds Api
function findCache($link, $md = true, $must = false)
{
  $link = $_SERVER['DOCUMENT_ROOT'] . '/cache/' . ($md == true ? md5($link) : $link);
  $fp = fopen($link, 'r');
  $content = fread($fp, filesize($link));
  fclose($fp);
  $content = json_decode($content, true);
  if ($content['time'] > time() || $md == false || $must == true) {
    return $content['content'];
  } else {
    return false;
  }
}

function writeCache($link, $content, $time = 60, $md = true)
{
  $link = $_SERVER['DOCUMENT_ROOT'] . '/cache/' . ($md == true ? md5($link) : $link);
  $fp = fopen($link, 'w');
  fwrite($fp, json_encode(array('time' => (time() + $time), 'content' => $content), JSON_UNESCAPED_UNICODE));
  fclose($fp);
  return true;
}
function ramd($pe)
{
  $rand = rand(100, $pe * 100);
  $num = number_format($rand / 100, 2, '.', '');
  return $num;
}

class Betapi
{
  public $api = '';
  function __construct($api)
  {
    $this->api = $api;
  }
  function getSource($url)
  {
    $cache = findCache($url);
    if ($cache != false) {
      return $cache;
    }
    $ch = curl_init($this->api . $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, $_SERVER['HTTP_HOST']);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 YaBrowser/18.11.1.716 Yowser/2.5 Safari/537.36');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $source = curl_exec($ch);
    if ($source == 'error' || $source == 'wrong' || empty($source)) {
      return findCache($url, true, true);
    }
    writeCache($url, $source, 150);
    return $source;
  }
}

$betapi = new Betapi('https://grapibot.herokuapp.com');
