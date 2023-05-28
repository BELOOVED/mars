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
        <div class="user-bonuses">
          <div class="user-bonuses-block">
            <div class="personal-info-header">
              <a class="back" href="profile-navigation"><i class="icon-arrow-left"></i></a>
              <h2>PROMOSYONLAR</h2>
            </div>
            <div class="margin-top-20" data-tabs="true">
              <ul class="react-tabs__tab-list" role="tablist">
                <li class="react-tabs__tab react-tabs__tab--selected" role="tab" id="react-tabs-0" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-1" tabindex="0"><span>BONUSLARIM</span></li>
                <li class="react-tabs__tab" role="tab" id="react-tabs-2" aria-selected="false" aria-disabled="false" aria-controls="react-tabs-3"><span>BONUS GEÇMİŞİ</span></li>
                <li class="react-tabs__tab" role="tab" id="react-tabs-4" aria-selected="false" aria-disabled="false" aria-controls="react-tabs-5"><span>FREE SPIN</span></li>
              </ul>
              <div class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" id="react-tabs-1" aria-labelledby="react-tabs-0">
                <div class="margin-top-20">
                  <div class="page-bg"></div>
                  <div class="personal-info-header">
                    <a href="profile-navigation" class="back"><i class="icon-arrow-left"></i></a>
                    <h2>Bonus Durumum</h2>
                  </div>
                  <div class="empty-bonuses">
                    <p>Aktif Bonusunuz Yoktur</p>
                  </div>
                </div>
                <div class="button-wrap"></div>
              </div>
              <div class="react-tabs__tab-panel" role="tabpanel" id="react-tabs-3" aria-labelledby="react-tabs-2"></div>
              <div class="react-tabs__tab-panel" role="tabpanel" id="react-tabs-5" aria-labelledby="react-tabs-4"></div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
