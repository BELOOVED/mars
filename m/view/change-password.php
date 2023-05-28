<?php if (!isset($us['id'])) {header("location: /");} ?>
<script type="text/javascript">
  document.querySelector(".background-image").remove()
</script>
<div class="global-container ">
  <div class="container">
    <div class="container-content">
      <section class="page-content ">
        <div class="user-settings">
          <div class="page-bg"></div>
          <div class="personal-information change-password">
            <div class="personal-info-header">
              <a href="profile-navigation" class="back"><i class="icon-arrow-left"></i></a>
              <h2>ŞİFREMİ DEĞİŞTİR</h2>
            </div>
            <form class="personal-info-form">
              <div>
                <div class="form-label "><span class="label">Geçerli Şifreniz</span><label class="mask-input"><input name="oldPassword" placeholder="Geçerli Şifreniz" type="password" class="input" value=""></label></div>
              </div>
              <div>
                <div class="form-label multi-form-label">
                  <span class="label">Yeni Şifre</span>
                  <div class="password-group">
                    <div class="view-wrap"><span class="password-progress undefined"></span><label class="mask-input"><input name="password" placeholder="Şifre" type="password" class="input" value=""></label></div>
                    <div class="view-wrap"><label class="mask-input"><input name="confirmPassword" placeholder="Şifreyi Onayla" type="password" class="input" value=""></label></div>
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
