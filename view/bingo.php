<div class="global-container">
  <?php if (!isset($us['id'])) { ?>
    <div class="container">
      <div class="container-content full-page">
        <div class="flex-wrap"></div>
        <section class="page-content full-page full-iframe ">
          <div></div>
          <div class="bingo">
            <div class="error-message sport-book-error"><span>Oynamak için lütfen giriş yapın</span></div>
          </div>
        </section>
      </div>
    </div>
  <? }else{ ?>
    <div class="container">
      <iframe src="<?=BINGO_URL?>" style="width:100%;height:calc(100vh - 120px);border:none"></iframe>
    </div>
    <? } ?>
  </div>
