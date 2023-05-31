<style>
  .widget-visible {
  display: none !important;
}
</style>
<?php if (!isset($us['id'])) { ?>
  <div class="auth-btns">
    <button class="button sign-up" onclick="openmodal('signup-modal')"><i class="icon-create-account"></i>Kayıt Ol</button>
    <button class="button sign-in" onclick="openmodal('signin-modal')"><i class="icon-mobile-profile"></i>GİRİŞ Yap</button>
  </div>
<? }else{ ?>
  <div class="search-box" id="searchDiv" style="display: none;"><div class="search-window"><div class="search-window-content"><div class="search-header"><h2>Lütfen aramak istediğiniz kelimeyi yazınız</h2><i onclick="searchBox()" class="icon-close-round"></i></div><div class="search-input"><span class="icon-wrap"><i class="icon-search middle"></i></span><input type="text" class="input" id="search-window-input" value=""></div><div class="search-result-tabs"></div><div class="search-result"></div></div></div></div>
      <div class="profile-menu">
        <div class="center" style="margin-top: 10px;">
          <div class="header-mail" onclick="window.location.href='messages'">
            <div class="middle">
              <div class="animation-wrap ">
                <i class="icon-mobile-inbox"></i>
                <span>MESAJ KUTUSU</span>
              </div>
            </div>
          </div>
          <div class="deposit" onclick="openmodal('deposit-modal')">
            <div class="middle">
              <i class="icon-mobile-deposit"></i>
              <span>PARA YATIR</span>
            </div>
          </div>
          <div class="money-wrap">
            <div class="middle">
              <a class="undefined " href="transaction">
                <i class="icon-wallet"></i>
                <span> <?=$us['balance']?> TRY </span>
              </a>
            </div>
          </div>
          <div class="live-help" title="DESTEK" id="openChatButton">
            <div class="middle">
              <i class="support icon-mobile-chat"></i>
              <span>DESTEK</span>
            </div>
          </div>
          <div class="search-box" id="searchButton" onclick="searchBox()">
            <div class="middle">
              <i class="search-icon icon-zoom"></i>
              <span>ARA</span>
            </div>
          </div>
        </div>
      </div>
<? } ?>
<script>
function searchBox(){
    $("#searchDiv").toggle();
  }
  // LiveChatInc Chat Widget'i açmak için işlev
function openLiveChat() {
  LC_API.open_chat_window();
}

// Canlı Sohbete Başla butonuna tıklandığında openLiveChat işlevini çağır
document.getElementById('openChatButton').addEventListener('click', openLiveChat);

  </script>
</div>
</div>
</div>
<?php include 'modals.php'; ?>
<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
<script type="text/javascript" src="./assets/js/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="./assets/js/slick.min.js"></script>
<script type="text/javascript" src="./assets/js/script.js?v=1"></script>
<script type="text/javascript" src="./assets/js/app.js?v=2.0"></script>
<script>
$('.banner .banner-container>div').slick({
dots: false,
infinite: true,
speed: 300,
slidesToShow: 1,
autoplay: false,
autoplaySpeed: 5000,
arrows:false
});


</script>
<?=html_entity_decode($main['sources'], ENT_QUOTES, 'UTF-8')?>
<?php if(isset($_GET['deposit'])){?><script>openmodal('deposit-modal')</script><?}?>
</body>
</html>
