<div class="global-container">
  <div class="container">
    <div class="container-content ">
      <?php include 'modules/sidebar.php'; ?>
      <section class="page-content ">
        <div class="user-password">
          <div class="change-password">
            <div class="personal-info-header">
              <h2>ŞİFREMİ DEĞİŞTİR</h2>
            </div>
            <form class="personal-info-form">
              <div class="form-label">
                <div class="form-label "><span class="label">
                  Geçerli Şifreniz
                  </span><label class="mask-input"><input name="oldPassword" placeholder="Geçerli Şifreniz" type="password" class="input" readonly="" value=""></label>
                </div>
              </div>
              <div class="form-label">
                <div class="form-label multi-form-label">
                  <span class="label">
                  Yeni Şifre
                  </span>
                  <div class="password-group">
                    <div class="view-wrap"><span class="password-progress undefined"></span><label class="mask-input"><input name="password" placeholder="Şifre" type="password" class="input" readonly="" value=""></label></div>
                    <div class="view-wrap"><label class="mask-input"><input name="confirmPassword" placeholder="Şifreyi Onayla" type="password" class="input" readonly="" value=""></label></div>
                  </div>
                </div>
              </div>
              <div class="button-wrap"><button class="button inactive-button">
                Güncelle
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
