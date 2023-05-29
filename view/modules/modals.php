<?php if (!isset($us['id'])) { ?>
  <div class="modal sign-up-wrap" id="signup-modal">
    <style>
      .sign-up-window .sign-up-window-content .sign-up-cont-wrap .form-wrap form .form-label .label {
        width: 29% !important;
      }
    </style>
    <div class="sign-up-window">
      <div class="sign-up-window-content">
        <div class="sign-up-header">
          <div class="header-content">
            <h2>ÜYELİK ADIMLARI 1 / 3</h2>
            <div class="live-help" onclick="openzopim()">
              <i class="support icon-help-rounded">
              </i>
            </div>
            <i class="icon-close-round" onclick="closemodal()">
            </i>
          </div>
        </div>
        <div class="sign-up-cont-wrap">
          <div class="line">
            <div class="form-wrap">
              <form id="register_form" action="#" method="get">
                <div class="step ">
                  <div class="form-group group1">
                    <div class="form-label">
                      <span class="label">Kullanıcı Adı*</span>
                      <label class="mask-input">
                        <input name="login" id="rinput-login" placeholder="Kullanıcı Adı *" type="username" class="input" value="">
                      </label>
                    </div>
                    <div class="form-label">
                      <span class="label">E-posta</span>
                      <label class="mask-input">
                        <input name="email" placeholder="E-posta" type="email" class="input" value="">
                      </label>
                    </div>
                    <div class="form-label multi-form-label">
                      <span class="label">Şifre*</span>
                      <div class="password-group">
                        <div class="view-wrap">
                          <span class="password-progress undefined">
                          </span>
                          <label class="mask-input">
                            <input id="rinput-pass" name="password" placeholder="Şifre *" type="password" class="input" value="">
                          </label>
                        </div>
                        <div class="view-wrap">
                          <label class="mask-input">
                            <input name="confirmPassword" placeholder="Şifreyi Onayla *" type="password" class="input" value="">
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-label">
                      <span class="label">Telefon</span>
                      <label class="mask-input">
                        <input name="phone" placeholder="Telefon" type="text" class="input" value="">
                      </label>
                    </div>
                    <div class="form-label checkbox-wrap">
                      <label class="checkbox">
                        <span class="checkbox-wrap">
                          <input name="registerAgree" type="checkbox">
                          <span class="icon icon-checkmark-round">
                          </span>
                          <span class="text">
                            <a href="#/general-terms-and-conditions">Kural ve Şartları okudum, kabul ediyorum.</a>
                          </span>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="step" style="display:none">
                  <div class="form-group group2">
                    <div class="form-label ">
                      <span class="label">
                        Ad
                        *
                      </span>
                      <label class="mask-input">
                        <input name="firstName" placeholder="Ad *" type="text" class="input" value="">
                      </label>
                    </div>
                    <div class="form-label ">
                      <span class="label">
                        Soyad
                        *
                      </span>
                      <label class="mask-input">
                        <input name="lastName" placeholder="Soyad *" type="text" class="input" value="">
                      </label>
                    </div>
                    <div class="form-label ">
                      <span class="label">
                        Cinsiyet
                        *
                      </span>
                      <label class="mask-input">
                        <select name="cins">
                          <option value="0">Erkek</option>
                          <option value="1">Kadın</option>
                        </select>
                      </label>
                    </div>
                    <div class="form-label ">
                      <span class="label">
                        Adres
                        *
                      </span>
                      <label class="mask-input">
                        <input name="address" class="input" value="">
                      </label>
                    </div>
                  </div>
                </div>
                <div class="step-buttons">
                  <button type="submit" class="button" onclick="nextStepReg()" id="regfirstbtn">2. ADIMA GIDIN</button>
                  <button type="submit" class="button" onclick="signUp()" id="regsecbtn" style="display:none">ÜYE OL</button>
                </div>
              </form>
            </div>
            <script>
              function nextStepReg() {
                let login = $('#rinput-login');
                let pass = $('#rinput-pass');
                if (login.val().length <= 3 || pass.val().length <= 3) return swal.fire('Dikkat', 'Lütfen Tüm bilgileri doğru giriniz', 'warning');
                $('#regfirstbtn, #register_form .step:eq(0)').hide();
                $('#regsecbtn, #register_form .step:eq(1)').show();
              }
            </script>
            <div class="bonus-content">
              <div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<?php if (isset($us['id'])) { ?>
  <div class="modal ReactModalPortal" id="withdraw-modal">
    <div class="ReactModal__Overlay ReactModal__Overlay--after-open" onclick="closemodal()" aria-modal="true" style="position: fixed; inset: 0px; background-color: rgba(255, 255, 255, 0.75);">
      <div class="ReactModal__Content ReactModal__Content--after-open payment-modal " onclick="event.stopPropagation();" tabindex="-1">
        <div class="modal-header">
          <div class="modal-header-content">
            <h2>PARA ÇEKİM</h2>
            <div class="right-group">
              <div class="live-help">
                <i class="support icon-help-rounded">
                </i>
                <p>Canlı Destek</p>
              </div>
              <i onclick="closemodal()" class="icon-close">
              </i>
            </div>
          </div>
        </div>
        <div class="modal-content" onclick="swal.fire('Dikkat','Para Çekim için lütfen canlı desteğe bağlanınnız', 'warning' )">
          <div>
            <div class="modal-content-payments-type">
              <div class="line">
                <div class="payment-blocks">
                  <style>
                    .payment-stf:hover {
                      background: #f04e23
                    }

                    .payment-marscrypto:hover {
                      background: #4e4e50
                    }

                    .payment-banktransfer:hover {
                      background: #ffc919
                    }

                    .payment-ecopayz:hover {
                      background: #23447b
                    }

                    .payment-skrill:hover {
                      background: #862165
                    }

                    .payment-neteller:hover {
                      background: #8fc641
                    }

                    .payment-blocks tr:nth-of-type(1) {
                      background: red !important;
                    }
                  </style>
                  <div class="table">
                    <div class="thead">
                      <div class="tr">
                        <div class="td">
                        </div>
                        <div class="td">İsim</div>
                        <div class="td">Ücret</div>
                        <div class="td">Süreç</div>
                        <div class="td">Alt Limit </div>
                        <div class="td">Üst Limit </div>
                      </div>
                    </div>
                    <div class="tbody">
                      <div class="tr payment-marscrypto">
                        <div class="td">
                          <div class="image" style="background: rgb(78, 78, 80);">
                            <img src="/assets/static/payment_images/8d01cafef175fc22f0d4bd3c8af8b2f52c67c440.svg" alt="img" class="middle">
                          </div>
                        </div>
                        <div class="td">
                          BITCOIN
                        </div>
                        <div class="td">
                          Ücretsiz
                        </div>
                        <div class="td">
                          0-2 Saat
                        </div>
                        <div class="td">
                          200 TRY
                        </div>
                        <div class="td">
                          250000 TRY

                        </div>
                      </div>
                      <div class="tr payment-banktransfer">
                        <div class="td">
                          <div class="image" style="background: rgb(255, 201, 25);">
                            <img src="/assets/static/payment_images/e10464589ab65549139e024a5197dff70263f0c8.svg" alt="img" class="middle">
                          </div>
                        </div>
                        <div class="td">
                          ATM KARTSIZ ÇEKİM
                        </div>
                        <div class="td">
                          Ücretsiz
                        </div>
                        <div class="td">
                          0-2 Saat
                        </div>
                        <div class="td">
                          100 TRY
                        </div>
                        <div class="td">
                          19900 TRY

                        </div>
                      </div>
                      <div class="tr payment-ecopayz">
                        <div class="td">
                          <div class="image" style="background: rgb(35, 68, 123);">
                            <img src="/assets/static/payment_images/0288931a779ff0070cc9c247dfa392cbc9c764b6.svg" alt="img" class="middle">
                          </div>
                        </div>
                        <div class="td">
                          ECOPAYZ
                        </div>
                        <div class="td">
                          Ücretsiz
                        </div>
                        <div class="td">
                          0-2 Saat
                        </div>
                        <div class="td">
                          Sınırsız
                        </div>
                        <div class="td">
                          Sınırsız

                        </div>
                      </div>
                      <div class="tr payment-skrill">
                        <div class="td">
                          <div class="image" style="background: rgb(134, 33, 101);">
                            <img src="/assets/static/img/payment_images/8c068e96806cec158816aef305c235f5da80bb28.png" alt="img" class="middle">
                          </div>
                        </div>
                        <div class="td">
                          SKRILL
                        </div>
                        <div class="td">
                          Ücretsiz
                        </div>
                        <div class="td">
                          0-2 Saat
                        </div>
                        <div class="td">
                          20 EUR
                        </div>
                        <div class="td">
                          10000 EUR

                        </div>
                      </div>
                      <div class="tr payment-neteller">
                        <div class="td">
                          <div class="image" style="background: rgb(143, 198, 65);">
                            <img src="/assets/static/payment_images/ca4e4b0ce623be1c49997a1b0b7c6a870445814d.svg" alt="img" class="middle">
                          </div>
                        </div>
                        <div class="td">
                          Neteller
                        </div>
                        <div class="td">
                          Ücretsiz
                        </div>
                        <div class="td">
                          0-2 Saat
                        </div>
                        <div class="td">
                          50 EUR
                        </div>
                        <div class="td">
                          10000 EUR

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="/assets/static/img/attachments/2fc8dac0757486c1ae9bc78b02a8dd3dbba109e9_original.png" style="width: 300px;" class="fr-fic fr-dib">
                      </p>
                      <p>
                        <br>
                      </p>
                      <p>
                        <span style="background-color: initial;">Marsbahis hesabınıza kayıtlı e-posta adresiniz ile Skrill hesabınıza kayıtlı e-posta adresiniz aynı olmalıdır. Farklı e-posta adresi üzerinden Yatırım/Çekim işlemi yapılamaz.</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="ReactModalPortal modal" id="deposit-modal">
  <div class="ReactModal__Overlay ReactModal__Overlay--after-open" aria-modal="true" style="position: fixed; inset: 0px; background-color: rgba(255, 255, 255, 0.75);">
    <div class="ReactModal__Content ReactModal__Content--after-open payment-modal " tabindex="-1">
      <div class="modal-header">
        <div class="modal-header-content" style="margin-top: 18px;">
          <h2>PARA YATIR</h2>
          <div class="right-group">
            <div class="live-help" title="DESTEK">
              <i class="support icon-help-rounded" onclick="closemodal()"></i>
              <p>Canlı Destek</p>
            </div>
            <i class="icon-close"></i>
          </div>
        </div>
      </div>
      <div class="modal-content">
        <div>
          <div class="modal-content-payments-type">
            <div class="line">
              <div class="payment-blocks">
                <style>
                  .payment-marscryptousdttrc20:hover {
                    background: #093629
                  }

                  .payment-marscrypto:hover {
                    background: #4e4e50
                  }

                  .payment-marscrypto_eth:hover {
                    background: #262c39
                  }

                  .payment-marscryptotrx:hover {
                    background: #3f0906
                  }

                  .payment-peppara:hover {
                    background: #3c2b6e
                  }

                  .payment-fixturka:hover {
                    background: #393a3c
                  }

                  .payment-premiumpapara:hover {
                    background: #be2596
                  }

                  .payment-movenpaypapara:hover {
                    background: #23b71d
                  }

                  .payment-anindapapara:hover {
                    background: #730e0e
                  }

                  .payment-paysystem:hover {
                    background: #de8787
                  }

                  .payment-propay:hover {
                    background: #3088ba
                  }

                  .payment-turbohavale:hover {
                    background: #01a2fe
                  }

                  .payment-aonehavale:hover {
                    background: #6d33d9
                  }

                  .payment-banktransferalternate:hover {
                    background: #ecf021
                  }

                  .payment-safirbanktransfer:hover {
                    background: #80d5f3
                  }

                  .payment-movenpaybanktransfer:hover {
                    background: #5e2e91
                  }

                  .payment-turboyatirim:hover {
                    background: #3d6b9f
                  }

                  .payment-guvenliqr:hover {
                    background: #dddddd
                  }

                  .payment-cepbank:hover {
                    background: #eb2030
                  }

                  .payment-kriptopay:hover {
                    background: #1b213f
                  }

                  .payment-hetpa:hover {
                    background: #3c2b6e
                  }

                  .payment-ecopayz:hover {
                    background: #23447b
                  }

                  .payment-monetix:hover {
                    background: #b8acac
                  }

                  .payment-perfectmoney:hover {
                    background: #bb0909
                  }

                  .payment-promocodebonus:hover {
                    background: #533694
                  }

                  .payment-blocks tr:nth-of-type(1) {
                    background: red !important;
                  }
                </style>
                <div class="table">
                  <div class="thead">
                    <div class="tr">
                      <div class="td"></div>
                      <div class="td">İsim</div>
                      <div class="td">Süreç</div>
                      <div class="td">Alt Limit </div>
                      <div class="td">Üst Limit </div>
                    </div>
                  </div>
                  <div class="tbody">
                    <div class="tr payment-marscryptousdttrc20" onmouseover="changeContent(1)">
                      <div class="td">
                        <div class="image" style="background: rgb(9, 54, 41);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/220dbc6a7da50bf47addc9f7e11b55f52cfefdd4.svg?1667590542" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> TETHER USDT (TRC20) (%20 BONUS) </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 100 TRY </div>
                      <div class="td"> 1000000 TRY </div>
                    </div>
                    <div class="tr payment-marscrypto" onmouseover="changeContent(2)">
                      <div class="td">
                        <div class="image" style="background: rgb(78, 78, 80);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/8d01cafef175fc22f0d4bd3c8af8b2f52c67c440.svg?1536153312" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> BITCOIN (%20 BONUS) </div>
                      <div class="td"> 5 Dk. </div>
                      <div class="td"> 100 TRY </div>
                      <div class="td"> 1000000 TRY </div>
                    </div>
                    <div class="tr payment-marscrypto_eth" onmouseover="changeContent(3)">
                      <div class="td">
                        <div class="image" style="background: rgb(38, 44, 57);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/b51676444a9895565926860fa414f2f49bbcea90.svg?1536247148" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> ETHEREUM (%20 BONUS) </div>
                      <div class="td"> 5 Dk. </div>
                      <div class="td"> 100 TRY </div>
                      <div class="td"> 1000000 TRY </div>
                    </div>
                    <div class="tr payment-marscryptotrx">
                      <div class="td">
                        <div class="image" style="background: rgb(63, 9, 6);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/4b48f832fe39e8b621413c5d6c16a53779627ff5.svg?1667590754" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> TRON (TRX) (%20 BONUS) </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 100 TRY </div>
                      <div class="td"> 1000000 TRY </div>
                    </div>
                    <div class="tr payment-peppara">
                      <div class="td">
                        <div class="image" style="background: rgb(60, 43, 110);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/b106e0ccc06df7ac496c2e816e2c9aa1de8ab427.svg?1637789647" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> PEP HIZLI </div>
                      <div class="td"> Anında </div>
                      <div class="td"> Sınırsız </div>
                      <div class="td"> Sınırsız </div>
                    </div>
                    <div class="tr payment-fixturka">
                      <div class="td">
                        <div class="image" style="background: rgb(57, 58, 60);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/6a2d01a147c299805093524c933eeca80c8dc1e0.svg?1583574139" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> FİXTURKA 'PAYFİX' </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 25 TRY </div>
                      <div class="td"> 500000 TRY </div>
                    </div>
                    <div class="tr payment-premiumpapara">
                      <div class="td">
                        <div class="image" style="background: rgb(190, 37, 150);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/a9e1db7eecdb8bf919f1bf8ee418b149f73c3f04.svg?1666955331" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> PREMIUM PAPARA </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 250 TRY </div>
                      <div class="td"> 200000 TRY </div>
                    </div>
                    <div class="tr payment-movenpaypapara">
                      <div class="td">
                        <div class="image" style="background: rgb(35, 183, 29);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/c6373fffac76a4aaaf80332bdb9d4cb7d3466c05.svg?1632494630" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> PAPARAM </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 50 TRY </div>
                      <div class="td"> 500000 TRY </div>
                    </div>
                    <div class="tr payment-anindapapara">
                      <div class="td">
                        <div class="image" style="background: rgb(115, 14, 14);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/0279168ff366018941330a1c766d42afbaf7f6ca.png?1607026021" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> ANINDA PAPARA </div>
                      <div class="td"> 1 dk. </div>
                      <div class="td"> 100 TRY </div>
                      <div class="td"> 50000 TRY </div>
                    </div>
                    <div class="tr payment-paysystem">
                      <div class="td">
                        <div class="image" style="background: rgb(222, 135, 135);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/deea7bd80313efa17b8f1c45813b37c4152efadc.svg?1661864307" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> PAPARAPAY </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 100 TRY </div>
                      <div class="td"> 50000 TRY </div>
                    </div>
                    <div class="tr payment-propay">
                      <div class="td">
                        <div class="image" style="background: rgb(48, 136, 186);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/9e5f016f0fb1de6fe4bbd2155fc6ccc0d7cd21bf.svg?1661864257" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> PROPAY PAPARA </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 100 TRY </div>
                      <div class="td"> 100000 TRY </div>
                    </div>
                    <div class="tr payment-turbohavale">
                      <div class="td">
                        <div class="image" style="background: rgb(1, 162, 254);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/2ddd64a80a050af0a5bf49168994bb8cb854b663.svg?1661783052" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> TURBO HAVALE </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 50 TRY </div>
                      <div class="td"> 500000 TRY </div>
                    </div>
                    <div class="tr payment-aonehavale">
                      <div class="td">
                        <div class="image" style="background: rgb(109, 51, 217);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/52d82b1d66c614ac8d81bca0744321042adb9027.svg?1666686216" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> SÜPER HAVALE </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 50 TRY </div>
                      <div class="td"> 500000 TRY </div>
                    </div>
                    <div class="tr payment-banktransferalternate">
                      <div class="td">
                        <div class="image" style="background: rgb(236, 240, 33);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/275ff0e22b32df9b08b5f4955b7a225762d87e31.svg?1610057981" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> BANKA TRANSFERİ </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 250 TRY </div>
                      <div class="td"> 100000 TRY </div>
                    </div>
                    <div class="tr payment-safirbanktransfer">
                      <div class="td">
                        <div class="image" style="background: rgb(128, 213, 243);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/04667eaabfb141ff48f5d7bac6d561de30b24fdc.svg?1640563537" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> HAVALE YENİ </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 50 TRY </div>
                      <div class="td"> 500000 TRY </div>
                    </div>
                    <div class="tr payment-movenpaybanktransfer">
                      <div class="td">
                        <div class="image" style="background: rgb(94, 46, 145);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/0f4c5e124952ce8de87e3ebf3b4d3514544aeb66.svg?1661845433" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> HIZLI HAVALE </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 50 TRY </div>
                      <div class="td"> 20000 TRY </div>
                    </div>
                    <div class="tr payment-turboyatirim">
                      <div class="td">
                        <div class="image" style="background: rgb(61, 107, 159);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/211ac2d129c3fc8cf00da3c08feb124182ac8454.svg?1658404916" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> PAYBOL </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 5 TRY </div>
                      <div class="td"> 100000 TRY </div>
                    </div>
                    <div class="tr payment-guvenliqr">
                      <div class="td">
                        <div class="image" style="background: rgb(221, 221, 221);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/d2097bb33f7a0bd422bedf015dbe20621cf7b2d4.svg?1673529029" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> HIZLI QR </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 50 TRY </div>
                      <div class="td"> 5000 TRY </div>
                    </div>
                    <div class="tr payment-cepbank">
                      <div class="td">
                        <div class="image" style="background: rgb(235, 32, 48);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/c90095e3a6085b730fc0f369afdf8ecb29d43cf0.svg?1525869289" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> CEPBANK </div>
                      <div class="td"> 0-30 Dk. </div>
                      <div class="td"> 50 TRY </div>
                      <div class="td"> 100000 TRY </div>
                    </div>
                    <div class="tr payment-kriptopay">
                      <div class="td">
                        <div class="image" style="background: rgb(27, 33, 63);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/127330bab54279b7fc53c6312417012b380df680.svg?1649057591" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> DİĞER KRİPTO PARALAR </div>
                      <div class="td"> 10 dk. </div>
                      <div class="td"> 100 TRY </div>
                      <div class="td"> 1000000 TRY </div>
                    </div>
                    <div class="tr payment-hetpa">
                      <div class="td">
                        <div class="image" style="background: rgb(60, 43, 110);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/37b67741d6fd7b4f7acd475c77c117240a4284a3.svg?1637572890" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> PEP HIZLI </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 20 TRY </div>
                      <div class="td"> 100000 TRY </div>
                    </div>
                    <div class="tr payment-ecopayz">
                      <div class="td">
                        <div class="image" style="background: rgb(35, 68, 123);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/0288931a779ff0070cc9c247dfa392cbc9c764b6.svg?1525868789" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> ECOPAYZ </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 10 TRY </div>
                      <div class="td"> 1000000 TRY </div>
                    </div>
                    <div class="tr payment-monetix">
                      <div class="td">
                        <div class="image" style="background: rgb(184, 172, 172);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/f72683dcf1f5c79c9d27baf07a4394451f2e5eed.png?1617718524" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> UNION PAY </div>
                      <div class="td"> Anında </div>
                      <div class="td"> 20 EUR </div>
                      <div class="td"> 20000 EUR </div>
                    </div>
                    <div class="tr payment-perfectmoney">
                      <div class="td">
                        <div class="image" style="background: rgb(187, 9, 9);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/311ef7061dc0696fc4ce0677bb77750925bc6f62.svg?1587655634" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> PERFECT MONEY </div>
                      <div class="td"> Anında </div>
                      <div class="td"> Sınırsız </div>
                      <div class="td"> Sınırsız </div>
                    </div>
                    <div class="tr payment-promocodebonus">
                      <div class="td">
                        <div class="image" style="background: rgb(83, 54, 148);">
                          <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/9010681ce92d7c3abc82bcd90cdef26de046b0dd.svg?1565979194" alt="img" class="middle">
                        </div>
                      </div>
                      <div class="td"> PROMOSYON KODU </div>
                      <div class="td"> Anında </div>
                      <div class="td"> Sınırsız </div>
                      <div class="td"> Sınırsız </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="bonus-content "  id="degerDegisenDiv">
                  <div>
                    <p>
                      <img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/8eaacbcc954511066964a56cfc7423f08ecd5452_original.jpg?1667608711" style="width: 300px;" class="fr-fic fr-dib">
                      <br>Tether USDT (TRC20) ile Marsbahis hesabınıza yatırım yapabilirsiniz. İşleminizi TRON ağı üzerinden yaptığınızdan emin olunuz.
                    </p>
                    <p>Lütfen her yatırımınızda sayfanın yönlendirdiği yeni cüzdana gönderim yapınız. Daha önce yatırım yaptığınız eski bir cüzdana gönderim yapmanız durumunda miktar hesabınıza <br>
                      <br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function changeContent(divNum) {
  var degerDegisenDiv = document.getElementById("degerDegisenDiv");
  
  if (divNum === 1) {
    degerDegisenDiv.innerHTML = '<div><p><img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/8eaacbcc954511066964a56cfc7423f08ecd5452_original.jpg?1667608711" style="width: 300px;" class="fr-fic fr-dib"><br>Tether USDT (TRC20) ile Marsbahis hesabınıza yatırım yapabilirsiniz. İşleminizi TRON ağı üzerinden yaptığınızdan emin olunuz.</p><p>Lütfen her yatırımınızda sayfanın yönlendirdiği yeni cüzdana gönderim yapınız. Daha önce yatırım yaptığınız eski bir cüzdana gönderim yapmanız durumunda miktar hesabınıza<br><br></p></div>';
  } else if (divNum === 2) {
    degerDegisenDiv.innerHTML = '<div><p><img src="https://d2ps39elv3ruqi.cloudfront.net/images/attachments/files/000/000/436/original/bitcoin.jpg?1536567550" style="width: 300px;" class="fr-fic fr-dib"><br>Lütfen her yatırımınızda sayfanın yönlendirdiği yeni cüzdana gönderim yapınız. Daha önce yatırım yaptığınız eski bir cüzdana gönderim yapmanız durumunda miktar hesabınıza yansımayacaktır. İşleminizi Bitcoin Network ağı üzerinden yaptığınızdan emin olunuz.</p><p><br></p><p><span class="fr-video fr-fvc fr-dvb fr-draggable" contenteditable="false" draggable="true"><iframe src="https://www.youtube.com/embed/9ki6OhqA108?&amp;ab_channel=Marsbahis&amp;wmode=opaque" frameborder="0" allowfullscreen="" class="fr-draggable" style="width: 100%; height: auto;"></iframe></span><br></p></div>';
  } else if (divNum === 3) {
    degerDegisenDiv.innerHTML = '<div><p><img src="https://d2ps39elv3ruqi.cloudfront.net/images/attachments/files/000/000/437/original/ethereum.jpg?1536567578" style="width: 300px;" class="fr-fic fr-dib"><br>Lütfen her yatırımınızda sayfanın yönlendirdiği yeni cüzdana gönderim yapınız. Daha önce yatırım yaptığınız eski bir cüzdana gönderim yapmanız durumunda miktar hesabınıza yansımayacaktır. İşleminizi Ethereum (ERC20) ağı üzerinden yaptığınızdan emin olunuz.</p><p><br></p><p><span class="fr-video fr-fvc fr-dvb fr-draggable" contenteditable="false" draggable="true"><iframe src="https://www.youtube.com/embed/9ki6OhqA108?&amp;ab_channel=Marsbahis&amp;wmode=opaque" frameborder="0" allowfullscreen="" class="fr-draggable" style="width: 100%; height: auto;"></iframe></span><br></p></div>';
  }
}
</script>
<?php } ?>