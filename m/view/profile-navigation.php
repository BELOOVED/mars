<?php if (!isset($us['id'])) {header("location: /");} ?>
<script type="text/javascript">
  document.querySelector(".background-image").remove()
</script>
<div class="global-container ">
  <div class="container">
    <div class="container-content">
      <div class="flex-wrap"></div>
      <aside class="sidebar">
        <div class="main-sidebar"></div>
      </aside>
      <section class="page-content ">
        <div></div>
        <div class="user-profile-menu">
          <div class="page-bg"></div>
          <div class="menu-header">
            <h2>Ayarlar</h2>
            <div class="balance">
              <div class="block">
                <span>
                <?=$us['balance']?>
                <span>&lrm;₺</span></span>
                <p>ANA CÜZDAN</p>
              </div>
              <div class="block">
                <span>
                0,00
                <span>&lrm;₺</span></span>
                <p>BONUS CÜZDANI</p>
              </div>
            </div>
          </div>
          <h3>HESAP AYARLARI</h3>
          <nav class="menu">
            <ul>
              <li><a class="undefined " href="profile"><i class="icon-mobile-profile"></i><span>HESAP BİLGİLERİ</span><i class="icon-arrow-right"></i></a></li>
              <li><a class="undefined " href="security"><i class="icon-security"></i><span>Hesap Güvenliği</span><i class="icon-arrow-right"></i></a></li>
              <li><a class="undefined " href="change-password"><i class="icon-mobile-password"></i><span>ŞİFREMİ DEĞİŞTİR</span><i class="icon-arrow-right"></i></a></li>
              <li><a class="undefined " href="change-mail"><i class="icon-mobile-mail"></i><span>E-POSTA ADRESİ DEĞİŞTİR</span><i class="icon-arrow-right"></i></a></li>
              <li onclick="logOut()"><a><i class="icon-logout-1"></i><span>ÇIKIŞ YAP</span><i class="icon-arrow-right"></i></a></li>
            </ul>
          </nav>
          <h3>CÜZDAN AYARLARI</h3>
          <nav class="menu">
            <ul>
              <li onclick="openmodal('deposit-modal')"><a><i class="icon-mobile-menu-deposit"></i><span>PARA YATIR</span><i class="icon-arrow-right"></i></a></li>
              <li onclick="openmodal('deposit-modal')"><a><i class="icon-mobile-menu-withdrawal"></i><span>PARA ÇEKİM</span><i class="icon-arrow-right"></i></a></li>
              <li><a class="undefined " href="transaction"><i class="icon-mobile-menu-history"></i><span>GEÇMİŞ</span><i class="icon-arrow-right"></i></a></li>
              <li><a class="undefined " href="bonus-settings"><i class="icon-mobile-menu-active-bonus"></i><span>BONUSLARIM</span><i class="icon-arrow-right"></i></a></li>
              <li><a class="undefined " href="promotions"><i class="icon-gift"></i><span>PROMOSYONLAR</span><i class="icon-arrow-right"></i></a></li>
            </ul>
          </nav>
          <h3>Sorumlu Oyun</h3>
          <nav class="menu">
            <ul>
              <li><a class="undefined " href="#self-limit/deposit"><i class="icon-mobile-menu-deposit-limit"></i><span>YATIRIM LİMİTİ</span><i class="icon-arrow-right"></i></a></li>
              <li><a class="undefined " href="#self-limit/loss"><i class="icon-mobile-menu-loss-limit"></i><span>KAYIP LİMİTİ</span><i class="icon-arrow-right"></i></a></li>
              <li><a class="undefined " href="#self-exclusion"><i class="icon-mobile-menu-session"></i><span>HESABIMI KAPAT</span><i class="icon-arrow-right"></i></a></li>
              <li><a class="undefined " href="#timeout"><i class="icon-mobile-menu-break"></i><span>HESABIMI DONDUR</span><i class="icon-arrow-right"></i></a></li>
              <li><a class="undefined " href="#reality-check"><i class="icon-mobile-menu-self"></i><span>ÇEVRİMİÇİ SÜRE</span><i class="icon-arrow-right"></i></a></li>
            </ul>
          </nav>
        </div>
      </section>
    </div>
  </div>
</div>
