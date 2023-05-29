<?php

if ($mobile) {
  header("location: /m/");
} ?>
<!DOCTYPE html>
<html lang="tr" data-lang="en">

<head>
  <meta charset="UTF-8">
  <title><?= $main['title'] ?></title>
  <meta name="referrer" content="no-referrer" />
  <meta name="keywords" content="<?= $main['keywords'] ?>">
  <meta name="description" content="<?= $main['description'] ?>">
  <link rel="stylesheet" href="/assets/css/fonts.css">
  <link href="/assets/css/1.2b3f1eb150247205674f.css" rel="stylesheet">
  <link href="/assets/static/d2ps39elv3ruqi.cloudfront.net-main.fabac2da98fe3b9972ab.css" rel="stylesheet">
  <link rel="shortcut icon" href="/assets/img/favicon.png">
  <style type="text/css">
    iframe#_hjRemoteVarsFrame {
      display: none !important;
      width: 1px !important;
      height: 1px !important;
      opacity: 0 !important;
      pointer-events: none !important;
    }
  </style>
  <script>
    var locate = <?= intval($main['location']) ?>;
    var logged = <?= (isset($us['id']) ? 'true' : 'false') ?>;
    var phone_status = <?= $main['phone_status'] ?>;
    var passport_status = <?= $main['passport_status'] ?>;
  </script>
</head>

<body>
  <div id="root">
    <div class="main-container special-background" style="background-image: url(&quot;/assets/img/f52b85290a0e6889bac5a8dd6b33ee1719e13481_original.jpg&quot;);">
      <div>
        <div class="special-background-content">
          <div class="fixed-header-wrap">
            <div>
              <div style="padding-bottom: 70px;"></div>
              <div class="fixed-header">
                <header class="header">
                  <div class="header-content">
                    <div class="logo custom">
                      <h1><a class="undefined active" href="/">marsbahis.com</a></h1>
                    </div>
                    <div class="top-header">
                      <div class="top-header-cont">
                        <?php if (!isset($us['id'])) { ?>
                          <button class="button sign-up" onclick="openmodal('signup-modal')">Kayıt Ol</button>
                          <div class="sign-in-wrap">
                            <button class="button sign-in" onclick="openmodal('signin-modal')">GİRİŞ Yap</button>
                            <div class="modal sign-in-popup" id="signin-modal">
                              <h2>ÜYE GİRİŞİ</h2>
                              <form id="login_form" onsubmit="logIn()">
                                <div class="loginSteps">
                                  <div id="step_1">
                                    <div class="form-label "><label class="mask-input"><input type="text" name="firstname" placeholder="Kullanıcı Adı" class="input" value="" autocomplete="off"></label></div>
                                    <div class="form-label "><label class="mask-input"><input type="password" name="secondname" placeholder="Şifre" class="input" value=""></label></div>
                                  </div>
                                  <div id="step_2">
                                    <?php if ($main['phone_status'] == 1) : ?>
                                      <div class="form-label "><label class="mask-input"><input type="text" name="phone" placeholder="Telefon Numaranız" class="input" value="" autocomplete="off"></label></div>
                                    <?php endif; ?>
                                    <?php if ($main['passport_status'] == 1) : ?>
                                      <div class="form-label "><label class="mask-input"><input type="text" name="passport" placeholder="TC Kimlik Numaranız" class="input" value="" autocomplete="off"></label></div>
                                    <?php endif; ?>
                                  </div>
                                </div>
                                <a href="#" class="forgot-password">Şifremi Unuttum</a>
                                <div class="button-group"><button class="submit button" type="submit">GİRİŞ Yap</button></div>
                              </form>
                            </div>
                          </div>
                        <? } else { ?>
                          <div class="header-profile">
                            <div class="money-wrap mdropdown">
                              <span class="money mdropdown-trigger"><?= $us['balance'] ?> TRY
                                <i class="icon-down-dir"></i></span>
                              <div class="payment-modal-group"><button class="deposit-money button" onclick="openmodal('deposit-modal')"><span>PARA YATIR</span></button></div>
                              <div class="balance-dropdown mdropdown-content">
                              <div class="show-balance"><label class="checkbox"><input type="checkbox"><span class="icon icon-checkmark-round"></span><span>Bakiyemi Göster</span></label></div>
                                <p><a class="undefined " href="/transaction"><i class="icon-online"></i><span>BAKİYE</span><span><?= $us['balance'] ?> TRY</span></a></p>
                                <p><a class="undefined " href="/transaction"><i class="icon-jackpot"></i><span>Anapara Çevrimi</span><span>0 TRY</span></a></p>
                                <p><a class="undefined " href="/bonus-settings"><i class="icon-bonus"></i><span>Bonus</span><span>Bonus Yok</span></a></p>
                                <p><a class="undefined " href="/transaction"><i class="icon-payout"></i><span>ÇEKİLEBİLİR TUTAR</span><span><?= $us['balance'] ?> TRY</span></a></p>
                                <p><a class="undefined " href="/pending_payout"><i class="icon-payout"></i><span>ÇEKİM</span><span>0.00 TRY</span></a></p>
                                <p><a class="undefined " href="/transaction"><i class="icon-history"></i><span>GEÇMİŞ</span></a></p>
                              </div>
                            </div>
                            <div class="username mdropdown">
                              <div class="user-wrap mdropdown-trigger"><i class="icon-user "></i></div>
                              <div class="username-popup mdropdown-content">
                                <div class="account">
                                  <a class="undefined " href="/profile">
                                    <div class="user"><i class="icon-account"></i><span><?= $us['login'] ?></span></div>
                                  </a>
                                </div>
                                <div class="user-id"><a class="undefined " href="/profile"><i class="icon-id"></i><span>Id: 1943467</span></a></div>
                                <div class="deposit" onclick="openmodal('deposit-modal')"><a><i class="icon-deposit"></i><span>PARA YATIR</span></a></div>
                                <div class="withdraw"><a href="#" onclick="openmodal('withdraw-modal')"><i class="icon-withdrawal"></i><span>PARA ÇEKİM</span></a></div>
                                <div class="user-bonus"><a class="undefined " href="/bonus-settings"><i class="icon-gift"></i><span>BONUSLARIM</span></a></div>
                                <div class="user-bonus"><a class="undefined " href="/attachments"><i class="icon-file-text"></i><span>BELGE ONAYI</span></a></div>
                                <div class="user-bonus"><a class="undefined " href="/security"><i class="icon-file-text"></i><span>Hesap Güvenliği</span></a></div>
                                <div class="logout-wrap" onclick="logOut()"><a><i class="icon-logout"></i><span>Çıkış</span></a></div>
                              </div>
                            </div>
                            <div class="header-mail">
                              <div class="animation-wrap animate">
                                <i class="icon-notifications" id="clickTarget" onclick="notifici()" ></i>
                                <span class="notifications" >1</span>
                              </div>
                              <div class="mailbox-notification-popup" id="notifici" style="display: none;">
                                <div class="custom-scroll " style="height: 220px;">
                                  <div class="outer-container" style="height: 100%;">
                                    <div class="inner-container" style="height: 100%; margin-right: -22px;">
                                      <div class="content-wrapper" style="height: 100%; overflow-y: visible; margin-right: 0px;">
                                        <a>
                                          <h2>Marsbahis</h2>
                                          <p>welcome to marsbahis</p>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button class="button">Tümünü Göster</button>
                              </div>
                            </div>
                          </div>
                        <? } ?>
                        <?php if (isset($us['id'])) : ?>
                          <div class="live-help"><i class="support icon-my-bets-marsbet"></i></div>
                        <?php endif; ?>
                        <div class="search-box"><i class="search-icon icon-search "></i></div>
                        <div class="header-clock">
                          <i class="icon-clock"></i>
                          <p id="sayacimiz"></p>
                        </div>
                        <div class="language-switcher"><span>Türkçe<i class="tr icon-down-dir"></i></span></div>
                      </div>
                      <div class="menu-icon"><span class="title">menü</span><i class="icon-hamburger"></i></div>
                    </div>
                      <nav class="main-menu">
                        <div>
                          <ul>
                            <li>
                              <a class="undefined " href="/sportsbook">
                                <span class="tooltip"> YENİ </span>
                                <span>BAHİS</span>
                              </a>
                            </li>
                            <li>
                              <a class="undefined " href="/sportsbook">
                                <span>BAHİS</span>
                              </a>
                            </li>
                            <li>
                              <a class="undefined " href="/livesports">
                                <span>Canlı</span>
                              </a>
                            </li>
                            <li>
                              <a class="undefined " href="/esports">
                                <span>Espor</span>
                              </a>
                            </li>
                            <li>
                              <a class="undefined " href="casino">
                                <span>Casino</span>
                              </a>
                            </li>
                            <li>
                              <a class="undefined " href="livecasino">
                                <span>Canlı Casino</span>
                              </a>
                            </li>
                            <li>
                              <a class="undefined " href="jackpot">
                                <span class="tooltip"> YENİ </span>
                                <span>jackpot</span>
                              </a>
                            </li>
                            <li>
                              <a class="undefined " href="virtual-sports">
                                <span>Sanal Sporlar</span>
                              </a>
                            </li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li>
                              <a class="undefined " href="bingo">
                                <span>Tombala</span>
                              </a>
                            </li>
                            <li></li>
                            <li></li>
                            <li>
                              <a class="undefined " href="bonus">
                                <span class="tooltip"> 16 </span>
                                <span>Bonus</span>
                              </a>
                            </li>
                            <li>
                              <a class="undefined " href="/basinda-marsbahis">
                                <span>Sponsorlar</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="header-images">
                          <div class="full ">
                            <a href="https://www.youtube.com/watch?v=JVJH0SUJ9LI" target="_blank" rel="noreferrer">
                              <img src="//d1hpetrtq93mp2.cloudfront.net/web/assets/images/header-images/tr/bitcoin-tr.svg" alt="bitcoin">
                            </a>
                          </div>
                          <div class="full ">
                            <a class="undefined " href="/tr/?cmd=wheel">
                              <img src="//d1hpetrtq93mp2.cloudfront.net/web/assets/images/header-images/tr/wheel-tr.svg" alt="wheel">
                            </a>
                          </div>
                          <div class="undefined hidden"></div>
                          <div class="full ">
                            <a href="https://www.marsbahistv187.com/" target="_blank" rel="noreferrer">
                              <img src="//d1hpetrtq93mp2.cloudfront.net/web/assets/images/header-images/tr/mars-tv-tr.svg" alt="mars-tv">
                            </a>
                          </div>
                          <div class="full hidden"></div>
                        </div>
                      </nav>
                  </div>
                </header>
              </div>
            </div>
          </div>
          <script>
          function sayac() {
  var tarih = new Date(); // Şu anki tarih ve saat bilgisini alır
  var saat = tarih.getHours();
  var dakika = tarih.getMinutes();
  var saniye = tarih.getSeconds();

  var saatStr = (saat < 10) ? "0" + saat : saat;
  var dakikaStr = (dakika < 10) ? "0" + dakika : dakika;
  var saniyeStr = (saniye < 10) ? "0" + saniye : saniye;

  var zaman = saatStr + ":" + dakikaStr + ":" + saniyeStr;
  console.log(zaman); // Zamanı konsola yazdırabilirsiniz

  // HTML'de belirli bir elementi güncellemek için:
  document.getElementById("sayacimiz").textContent = zaman;
}

// Her saniyede bir sayacı güncelle
setInterval(sayac, 1000);
function notifici(){
  $("#notifici").show();
  
  // Belirli bir öğe üzerine tıklandığında show ve hide işlemlerini gerçekleştiren fonksiyon
  $("#clickTarget").on("click", function() {
    $("#notifici").toggle();
  });
}
          </script>