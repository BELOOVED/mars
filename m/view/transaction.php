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
        <div class="user-transactions">
          <div class="page-bg"></div>
          <div class="personal-info-header">
            <a href="profile-navigation" class="back"><i class="icon-arrow-left"></i></a>
            <h2>GEÇMİŞ</h2>
          </div>
          <div class="user-transactions-header">
            <div class="tabs">
              <div><button class="selected">Tümü</button></div>
              <div><button class="">Oyun</button></div>
              <div><button class="">Ödeme</button></div>
              <div><button class="">Bekleyen Çekim</button></div>
              <div><button class="">Spor Bahsi</button></div>
            </div>
            <div class="period">
              <h2>Arama Periyodu</h2>
              <div class="date-group">
                <div class="calendar">
                  <div class="date"><input type="date" class="input" placeholder="Filtre Başlangıç Tarihi" min="" value=""></div>
                  <div class="date"><input type="date" class="input" placeholder="Filtre Bitiş Tarihi" min="" value=""></div>
                </div>
                <button class="button">Yükle</button>
              </div>
            </div>
          </div>
          <div class="user-account-wrap">
            <div class="user-account-block"></div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
