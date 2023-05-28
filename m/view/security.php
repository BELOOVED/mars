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
        <div class="user-info otp-settings">
          <div class="personal-information">
            <div class="personal-info-header">
              <div class="personal-info-header">
                <a href="profile-navigation" class="back"><i class="icon-arrow-left"></i></a>
                <h2>Hesap Güvenliği</h2>
              </div>
            </div>
            <div class="otp-settings-wrap">
              <div class="step-1">
                <div class="otp-settings-description">
                  <h2>Ek güvenlik önlemleri nelerdir?</h2>
                  <p>Hesabınıza kötü niyetli kişilerin erişmesini istemiyorsanız ek güvenlik yöntemlerimizden birini seçerek hesabınızı daha güvenli hale getirebilirsiniz.</p>
                  <p>SMS: Hesabınıza her girmek istediğinizde telefonunuza gelecek kod ile giriş yapmanızı sağlar. </p>
                  <p>Authenticator : Hesabınıza her girmek istediğinizde Authenticator uygulaması ile tek kullanımlık şifre üreterek bu şifre ile giriş yapmanızı sağlar. (Bu yöntemi aktif etmek için hesabınıza Masaüstünden giriş yapmanız gerekmektedir.)</p>
                </div>
                <div class="otp-settings-switcher"><label class="checkbox"><span class="checkbox-wrap"><input type="checkbox"><span class="icon icon-checkmark-round"></span><span class="text">Ek güvenlik önlemlerini etkinleştirin.</span></span></label></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
