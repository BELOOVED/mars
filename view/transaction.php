<div class="global-container" bis_skin_checked="1">
  <div class="container" bis_skin_checked="1">
    <div class="container-content " bis_skin_checked="1">
      <?php include 'modules/sidebar.php'; ?>
      <section class="page-content ">
        <div bis_skin_checked="1"></div>
        <div class="user-transactions" rt-if="this.props.isLoggedIn" bis_skin_checked="1">
          <div class="page-bg" bis_skin_checked="1"></div>
          <div class="user-transactions-header" bis_skin_checked="1">
            <div class="tabs" bis_skin_checked="1">
              <div bis_skin_checked="1"><button class="selected">Tümü</button></div>
              <div bis_skin_checked="1"><button class="">Oyun</button></div>
              <div bis_skin_checked="1"><button class="">Ödeme</button></div>
              <div bis_skin_checked="1"><button class="">Bekleyen Çekim</button></div>
              <div bis_skin_checked="1"><button class="">Spor Bahsi</button></div>
            </div>
            <div class="period" bis_skin_checked="1">
              <h2>Arama Periyodu</h2>
              <div class="date-group" bis_skin_checked="1">
                <div class="calendar" bis_skin_checked="1">
                  <div class="react-datepicker-wrapper" bis_skin_checked="1">
                    <div class="react-datepicker__input-container" bis_skin_checked="1"><input type="text" placeholder="Filtre Başlangıç Tarihi" class="" value=""></div>
                  </div>
                  <div class="react-datepicker-wrapper" bis_skin_checked="1">
                    <div class="react-datepicker__input-container" bis_skin_checked="1"><input type="text" placeholder="Filtre Bitiş Tarihi" class="" value=""></div>
                  </div>
                </div>
                <button class="button">Yükle</button>
              </div>
            </div>
          </div>
          <div class="user-account-wrap" bis_skin_checked="1">
            <div class="user-account-block" bis_skin_checked="1"></div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
