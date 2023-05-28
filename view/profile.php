<div class="global-container">
  <div class="container">
    <div class="container-content ">
      <?php include 'modules/sidebar.php'; ?>
      <section class="page-content ">
        <div bis_skin_checked="1"></div>
        <div class="user-info" bis_skin_checked="1">
          <div class="personal-information" bis_skin_checked="1">
            <div class="personal-info-header" bis_skin_checked="1">
              <h2>Hesap Ayrıntıları</h2>
            </div>
            <form class="personal-info-form">
              <div class="form-label " bis_skin_checked="1"><span class="label">
                Hesap ID
                </span><label class="mask-input"><input type="text" class="input" disabled="" value="1943467"></label>
              </div>
              <div class="form-label " bis_skin_checked="1"><span class="label">
                Kullanıcı Adı
              </span><label class="mask-input"><input type="text" class="input" disabled="" value="<?=$us['login']?>"></label>
              </div>
              <div class="form-label " bis_skin_checked="1"><span class="label">
                Adınız
                </span><label class="mask-input"><input name="firstName" disabled="" placeholder="Ad" type="text" class="input" value=""></label>
              </div>
              <div class="form-label " bis_skin_checked="1"><span class="label">
                Soyadınız:
                </span><label class="mask-input"><input name="lastName" disabled="" placeholder="Soyad" type="text" class="input" value=""></label>
              </div>
              <div class="form-label " bis_skin_checked="1">
                <span class="label">
                Ülke:
                </span>
                <label class="mask-input">
                  <div class="Select has-value is-clearable is-disabled is-searchable Select--single" bis_skin_checked="1">
                    <div class="Select-control" bis_skin_checked="1">
                      <span class="Select-multi-value-wrapper" id="react-select-5--value">
                        <div class="Select-value" bis_skin_checked="1"><span class="Select-value-label" role="option" aria-selected="true" id="react-select-5--value-item">Türkiye</span></div>
                        <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-5--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" bis_skin_checked="1" style="border: 0px; width: 1px; display: inline-block;"></div>
                      </span>
                      <span class="Select-arrow-zone"><span class="Select-arrow"></span></span>
                    </div>
                  </div>
                </label>
              </div>
              <div class="form-label " bis_skin_checked="1"><span class="label">
                Şehir
                </span><label class="mask-input"><input name="city" placeholder="Şehir" type="text" class="input" value=""></label>
              </div>
              <div class="form-label " bis_skin_checked="1"><span class="label">
                E-posta
                </span><label class="mask-input"><input name="email" disabled="" class="input" value=""></label>
              </div>
              <div class="form-label " bis_skin_checked="1"><span class="label">
                Adres
                </span><label class="mask-input"><input name="address" disabled="" placeholder="Adres" type="text" class="input" value=""></label>
              </div>
              <div class="form-label " bis_skin_checked="1"><span class="label">
                Telefon Numarası
                </span><label class="mask-input"><input name="phone" disabled="" class="input" value=""></label>
              </div>
            </form>
          </div>
          <div class="profile-info-popup-wrap" bis_skin_checked="1"></div>
        </div>
      </section>
    </div>
  </div>
</div>
