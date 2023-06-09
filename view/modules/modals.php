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
                          <span class="password-progress TRX">
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

    .payment-marscryptousdttrc20:hover {
      background: #093629
    }

    .payment-marscrypto:hover {
      background: #4e4e50
    }

    .payment-marscrypto_eth:hover {
      background: #262c39
    }

    .payment-peppara:hover {
      background: #3c2b6e
    }

    .payment-turboparazulawithdrawal:hover {
      background: #1bbfab
    }

    .payment-fixturka:hover {
      background: #393a3c
    }

    .payment-papara:hover {
      background: rgb(38, 182, 227)
    }

    .payment-premiumpaparawithdrawal:hover {
      background: #be2596
    }

    .payment-movenpaypapara:hover {
      background: #23b71d
    }

    .payment-anindapapara:hover {
      background: #730e0e
    }

    .payment-banktransfer:hover {
      background: #ffc919
    }

    .payment-paysystem:hover {
      background: #de8787
    }

    .payment-propay:hover {
      background: #3088ba
    }

    .payment-turboyatirimwithdrawal:hover {
      background: #3d6b9f
    }

    .payment-kriptopay:hover {
      background: #1b213f
    }

    .payment-ecopayz:hover {
      background: #23447b
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
      <div class="tr payment-stf">
        <div class="td">
          <div class="image" style="background: rgb(240, 78, 35);">
            <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/7631112a8e5ecad983d01187b96e02811313961b.svg?1621202020" alt="img" class="middle">
          </div>
        </div>
        <div class="td"> ARKADAŞINA TRANSFER </div>
        <div class="td"> 0-30 dk. </div>
        <div class="td"> 5 TRY </div>
        <div class="td"> 10000 TRY </div>
      </div>
      <div class="tr payment-marscryptousdttrc20">
        <div class="td">
          <div class="image" style="background: rgb(9, 54, 41);">
            <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/220dbc6a7da50bf47addc9f7e11b55f52cfefdd4.svg?1667590542" alt="img" class="middle">
          </div>
        </div>
        <div class="td"> TETHER USDT (TRC20) </div>
        <div class="td"> 0-30 dk. </div>
        <div class="td"> 200 TRY </div>
        <div class="td"> 100000000 TRY </div>
      </div>
      <div class="tr payment-marscrypto">
        <div class="td">
          <div class="image" style="background: rgb(78, 78, 80);">
            <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/8d01cafef175fc22f0d4bd3c8af8b2f52c67c440.svg?1536153312" alt="img" class="middle">
          </div>
        </div>
        <div class="td"> BITCOIN </div>
        <div class="td"> 0-2 Saat </div>
        <div class="td"> 200 TRY </div>
        <div class="td"> 100000000 TRY </div>
      </div>
      <div class="tr payment-marscrypto_eth">
        <div class="td">
          <div class="image" style="background: rgb(38, 44, 57);">
            <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/b51676444a9895565926860fa414f2f49bbcea90.svg?1536247148" alt="img" class="middle">
          </div>
        </div>
        <div class="td"> ETHEREUM </div>
        <div class="td"> 0-2 Saat </div>
        <div class="td"> 200 TRY </div>
        <div class="td"> 100000000 TRY </div>
      </div>
      <div class="tr payment-peppara">
        <div class="td">
          <div class="image" style="background: rgb(60, 43, 110);">
            <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/b106e0ccc06df7ac496c2e816e2c9aa1de8ab427.svg?1637789647" alt="img" class="middle">
          </div>
        </div>
        <div class="td"> PEP HIZLI </div>
        <div class="td"> 0-30 dk. </div>
        <div class="td"> 100 TRY </div>
        <div class="td"> 100000 TRY </div>
      </div>
      <div class="tr payment-turboparazulawithdrawal">
        <div class="td">
          <div class="image" style="background: rgb(27, 191, 171);">
            <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/f5d84f19b5396bb42405fad74f383d5e5b315ab2.png?1670243334" alt="img" class="middle">
          </div>
        </div>
        <div class="td"> TURBO PARAZULA </div>
        <div class="td"> 0-30 dk. </div>
        <div class="td"> 100 TRY </div>
        <div class="td"> 100000 TRY </div>
      </div>
      <div class="tr payment-fixturka">
        <div class="td">
          <div class="image" style="background: rgb(57, 58, 60);">
            <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/6a2d01a147c299805093524c933eeca80c8dc1e0.svg?1583574139" alt="img" class="middle">
          </div>
        </div>
        <div class="td"> FİXTURKA 'PAYFİX' </div>
        <div class="td"> 0-2 Saat </div>
        <div class="td"> 100 TRY </div>
        <div class="td"> 100000 TRY </div>
      </div>
      <div class="tr payment-papara">
        <div class="td">
          <div class="image" style="background: rgb(38, 182, 227);">
            <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/d665ed7a45b513c960f4345a9b65e424f4116ccf.svg?1530968390" alt="img" class="middle">
          </div>
        </div>
        <div class="td"> PAPARA </div>
        <div class="td"> 0-30 dk. </div>
        <div class="td"> 100 TRY </div>
        <div class="td"> 100000 TRY </div>
      </div>
      <div class="tr payment-premiumpaparawithdrawal">
        <div class="td">
          <div class="image" style="background: rgb(190, 37, 150);">
            <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/150cdf1431d906fe8af94b7e3f2d4a574e25eb5d.svg?1667034599" alt="img" class="middle">
          </div>
        </div>
        <div class="td"> PREMIUM PAPARA </div>
        <div class="td"> 0-30 dk. </div>
        <div class="td"> 100 TRY </div>
        <div class="td"> 100000 TRY </div>
      </div>
      <div class="tr payment-movenpaypapara">
        <div class="td">
          <div class="image" style="background: rgb(35, 183, 29);">
            <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/c6373fffac76a4aaaf80332bdb9d4cb7d3466c05.svg?1632494630" alt="img" class="middle">
          </div>
        </div>
        <div class="td"> PAPARAM </div>
        <div class="td"> 0 - 30 dk </div>
        <div class="td"> 100 TRY </div>
        <div class="td"> 100000 TRY </div>
      </div>
      <div class="tr payment-anindapapara">
        <div class="td">
          <div class="image" style="background: rgb(115, 14, 14);">
            <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/0279168ff366018941330a1c766d42afbaf7f6ca.png?1607026021" alt="img" class="middle">
          </div>
        </div>
        <div class="td"> ANINDA PAPARA </div>
        <div class="td"> 1-48 Saat </div>
        <div class="td"> 100 TRY </div>
        <div class="td"> 10000 TRY </div>
      </div>
      <div class="tr payment-banktransfer">
        <div class="td">
          <div class="image" style="background: rgb(255, 201, 25);">
            <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/e10464589ab65549139e024a5197dff70263f0c8.svg?1541146691" alt="img" class="middle">
          </div>
        </div>
        <div class="td"> ATM KARTSIZ ÇEKİM </div>
        <div class="td"> 0-2 Saat </div>
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
        <div class="td"> 0-30 dk. </div>
        <div class="td"> 100 TRY </div>
        <div class="td"> 100000 TRY </div>
      </div>
      <div class="tr payment-propay">
        <div class="td">
          <div class="image" style="background: rgb(48, 136, 186);">
            <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/9e5f016f0fb1de6fe4bbd2155fc6ccc0d7cd21bf.svg?1661864257" alt="img" class="middle">
          </div>
        </div>
        <div class="td"> PROPAY PAPARA </div>
        <div class="td"> 0-30 dk. </div>
        <div class="td"> 100 TRY </div>
        <div class="td"> 100000 TRY </div>
      </div>
      <div class="tr payment-turboyatirimwithdrawal">
        <div class="td">
          <div class="image" style="background: rgb(61, 107, 159);">
            <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/9f17a97200752cf753503519dd55c9170d89523d.svg?1659258881" alt="img" class="middle">
          </div>
        </div>
        <div class="td"> PAYBOL </div>
        <div class="td"> 0-30 dk. </div>
        <div class="td"> 100 TRY </div>
        <div class="td"> 100000 TRY </div>
      </div>
      <div class="tr payment-kriptopay">
        <div class="td">
          <div class="image" style="background: rgb(27, 33, 63);">
            <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/127330bab54279b7fc53c6312417012b380df680.svg?1649057591" alt="img" class="middle">
          </div>
        </div>
        <div class="td"> DİĞER KRİPTO PARALAR </div>
        <div class="td"> 0-2 Saat </div>
        <div class="td"> 250 TRY </div>
        <div class="td"> 500000 TRY </div>
      </div>
      <div class="tr payment-ecopayz">
        <div class="td">
          <div class="image" style="background: rgb(35, 68, 123);">
            <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/0288931a779ff0070cc9c247dfa392cbc9c764b6.svg?1525868789" alt="img" class="middle">
          </div>
        </div>
        <div class="td"> ECOPAYZ </div>
        <div class="td"> 0-2 Saat </div>
        <div class="td"> 100 TRY </div>
        <div class="td"> 50000 TRY </div>
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
            <i class="icon-close" onclick="closemodal()"></i>
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
                    <div class="tr payment-marscryptousdttrc20" onmouseover="changeContent(1)" onclick="openDepositModal(1)">
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
                    <div class="tr payment-marscrypto" onmouseover="changeContent(2)" onclick="openDepositModal(2)">
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
                    <div class="tr payment-marscrypto_eth" onmouseover="changeContent(3)" onclick="openDepositModal(3)">
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
                    <div class="tr payment-marscryptotrx" onmouseover="changeContent(4)" onclick="openDepositModal(4)">
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
                    <div class="tr payment-peppara" onmouseover="changeContent(5)" onclick="openDepositModal(5)">
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
                    <div class="tr payment-fixturka" onmouseover="changeContent(6)" onclick="openDepositModal(6)">
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
                    <div class="tr payment-premiumpapara" onmouseover="changeContent(7)" onclick="openDepositModal(7)">
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
                    <div class="tr payment-movenpaypapara" onmouseover="changeContent(8)" onclick="openDepositModal(8)">
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
                    <div class="tr payment-anindapapara" onmouseover="changeContent(9)" onclick="openDepositModal(9)">
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
                    <div class="tr payment-paysystem" onmouseover="changeContent(10)" onclick="openDepositModal(10)">
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
                    <div class="tr payment-propay" onmouseover="changeContent(11)" onclick="openDepositModal(11)">
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
                    <div class="tr payment-turbohavale" onmouseover="changeContent(12)" onclick="openDepositModal(12)">
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
                    <div class="tr payment-aonehavale" onmouseover="changeContent(13)" onclick="openDepositModal(13)">
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
                    <div class="tr payment-banktransferalternate" onmouseover="changeContent(14)" onclick="openDepositModal(14)">
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
                    <div class="tr payment-safirbanktransfer" onmouseover="changeContent(15)" onclick="openDepositModal(15)">
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
                    <div class="tr payment-movenpaybanktransfer" onmouseover="changeContent(16)" onclick="openDepositModal(16)">
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
                    <div class="tr payment-turboyatirim" onmouseover="changeContent(17)" onclick="openDepositModal(17)">
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
                    <div class="tr payment-guvenliqr" onmouseover="changeContent(18)" onclick="openDepositModal(18)">
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
                    <div class="tr payment-cepbank" onmouseover="changeContent(19)" onclick="openDepositModal(19)">
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
                    <div class="tr payment-kriptopay" onmouseover="changeContent(20)" onclick="openDepositModal(20)">
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
                    <div class="tr payment-hetpa" onmouseover="changeContent(21)" onclick="openDepositModal(21)">
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
                    <div class="tr payment-ecopayz" onmouseover="changeContent(22)" onclick="openDepositModal(22)">
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
                    <div class="tr payment-monetix" onmouseover="changeContent(23)" onclick="openDepositModal(23)">
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
                    <div class="tr payment-perfectmoney" onmouseover="changeContent(24)" onclick="openDepositModal(24)">
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
                    <div class="tr payment-promocodebonus" onmouseover="changeContent(25)" onclick="openDepositModal(25)">
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
<div class="ReactModalPortal modal" id="deposit-modal2">
  <div class="ReactModal__Overlay ReactModal__Overlay--after-open" aria-modal="true" style="position: fixed; inset: 0px; background-color: rgba(255, 255, 255, 0.75);">
    <div class="ReactModal__Content ReactModal__Content--after-open payment-modal  payment-modal-single" tabindex="-1">
      <div class="modal-tabs">
        <div class="payment-header-tabs">
          <style>
            .payment-header-marscryptousdttrc20 {
              background: #093629 !important;
            }

            .payment-header-marscryptousdttrc20 .live-help {
              border-color: #06261d !important;
            }

            .payment-header-marscryptousdttrc20 .icon-back-left {
              color: #07291f;
            }

            .payment-header-marscryptousdttrc20 .icon-close {
              color: #07291f !important;
            }

            .payment-header-marscrypto {
              background: #4e4e50 !important;
            }

            .payment-header-marscrypto .live-help {
              border-color: #373738 !important;
            }

            .payment-header-marscrypto .icon-back-left {
              color: #3b3b3c;
            }

            .payment-header-marscrypto .icon-close {
              color: #3b3b3c !important;
            }

            .payment-header-marscrypto_eth {
              background: #262c39 !important;
            }

            .payment-header-marscrypto_eth .live-help {
              border-color: #1b1f28 !important;
            }

            .payment-header-marscrypto_eth .icon-back-left {
              color: #1d212b;
            }

            .payment-header-marscrypto_eth .icon-close {
              color: #1d212b !important;
            }

            .payment-header-marscryptotrx {
              background: #3f0906 !important;
            }

            .payment-header-marscryptotrx .live-help {
              border-color: #2c0604 !important;
            }

            .payment-header-marscryptotrx .icon-back-left {
              color: #2f0705;
            }

            .payment-header-marscryptotrx .icon-close {
              color: #2f0705 !important;
            }

            .payment-header-peppara {
              background: #3c2b6e !important;
            }

            .payment-header-peppara .live-help {
              border-color: #2a1e4d !important;
            }

            .payment-header-peppara .icon-back-left {
              color: #2d2053;
            }

            .payment-header-peppara .icon-close {
              color: #2d2053 !important;
            }

            .payment-header-fixturka {
              background: #393a3c !important;
            }

            .payment-header-fixturka .live-help {
              border-color: #28292a !important;
            }

            .payment-header-fixturka .icon-back-left {
              color: #2b2c2d;
            }

            .payment-header-fixturka .icon-close {
              color: #2b2c2d !important;
            }

            .payment-header-premiumpapara {
              background: #be2596 !important;
            }

            .payment-header-premiumpapara .live-help {
              border-color: #851a69 !important;
            }

            .payment-header-premiumpapara .icon-back-left {
              color: #8f1c71;
            }

            .payment-header-premiumpapara .icon-close {
              color: #8f1c71 !important;
            }

            .payment-header-movenpaypapara {
              background: #23b71d !important;
            }

            .payment-header-movenpaypapara .live-help {
              border-color: #198014 !important;
            }

            .payment-header-movenpaypapara .icon-back-left {
              color: #1a8916;
            }

            .payment-header-movenpaypapara .icon-close {
              color: #1a8916 !important;
            }

            .payment-header-anindapapara {
              background: #730e0e !important;
            }

            .payment-header-anindapapara .live-help {
              border-color: #510a0a !important;
            }

            .payment-header-anindapapara .icon-back-left {
              color: #560b0b;
            }

            .payment-header-anindapapara .icon-close {
              color: #560b0b !important;
            }

            .payment-header-paysystem {
              background: #de8787 !important;
            }

            .payment-header-paysystem .live-help {
              border-color: #9b5f5f !important;
            }

            .payment-header-paysystem .icon-back-left {
              color: #a76565;
            }

            .payment-header-paysystem .icon-close {
              color: #a76565 !important;
            }

            .payment-header-propay {
              background: #3088ba !important;
            }

            .payment-header-propay .live-help {
              border-color: #225f82 !important;
            }

            .payment-header-propay .icon-back-left {
              color: #24668c;
            }

            .payment-header-propay .icon-close {
              color: #24668c !important;
            }

            .payment-header-turbohavale {
              background: #01a2fe !important;
            }

            .payment-header-turbohavale .live-help {
              border-color: #0171b2 !important;
            }

            .payment-header-turbohavale .icon-back-left {
              color: #017abf;
            }

            .payment-header-turbohavale .icon-close {
              color: #017abf !important;
            }

            .payment-header-aonehavale {
              background: #6d33d9 !important;
            }

            .payment-header-aonehavale .live-help {
              border-color: #4c2498 !important;
            }

            .payment-header-aonehavale .icon-back-left {
              color: #5226a3;
            }

            .payment-header-aonehavale .icon-close {
              color: #5226a3 !important;
            }

            .payment-header-banktransferalternate {
              background: #ecf021 !important;
            }

            .payment-header-banktransferalternate .live-help {
              border-color: #a5a817 !important;
            }

            .payment-header-banktransferalternate .icon-back-left {
              color: #b1b419;
            }

            .payment-header-banktransferalternate .icon-close {
              color: #b1b419 !important;
            }

            .payment-header-safirbanktransfer {
              background: #80d5f3 !important;
            }

            .payment-header-safirbanktransfer .live-help {
              border-color: #5a95aa !important;
            }

            .payment-header-safirbanktransfer .icon-back-left {
              color: #60a0b6;
            }

            .payment-header-safirbanktransfer .icon-close {
              color: #60a0b6 !important;
            }

            .payment-header-movenpaybanktransfer {
              background: #5e2e91 !important;
            }

            .payment-header-movenpaybanktransfer .live-help {
              border-color: #422066 !important;
            }

            .payment-header-movenpaybanktransfer .icon-back-left {
              color: #47236d;
            }

            .payment-header-movenpaybanktransfer .icon-close {
              color: #47236d !important;
            }

            .payment-header-turboyatirim {
              background: #3d6b9f !important;
            }

            .payment-header-turboyatirim .live-help {
              border-color: #2b4b6f !important;
            }

            .payment-header-turboyatirim .icon-back-left {
              color: #2e5077;
            }

            .payment-header-turboyatirim .icon-close {
              color: #2e5077 !important;
            }

            .payment-header-guvenliqr {
              background: #dddddd !important;
            }

            .payment-header-guvenliqr .live-help {
              border-color: #9b9b9b !important;
            }

            .payment-header-guvenliqr .icon-back-left {
              color: #a6a6a6;
            }

            .payment-header-guvenliqr .icon-close {
              color: #a6a6a6 !important;
            }

            .payment-header-cepbank {
              background: #eb2030 !important;
            }

            .payment-header-cepbank .live-help {
              border-color: #a51622 !important;
            }

            .payment-header-cepbank .icon-back-left {
              color: #b01824;
            }

            .payment-header-cepbank .icon-close {
              color: #b01824 !important;
            }

            .payment-header-kriptopay {
              background: #1b213f !important;
            }

            .payment-header-kriptopay .live-help {
              border-color: #13172c !important;
            }

            .payment-header-kriptopay .icon-back-left {
              color: #14192f;
            }

            .payment-header-kriptopay .icon-close {
              color: #14192f !important;
            }

            .payment-header-hetpa {
              background: #3c2b6e !important;
            }

            .payment-header-hetpa .live-help {
              border-color: #2a1e4d !important;
            }

            .payment-header-hetpa .icon-back-left {
              color: #2d2053;
            }

            .payment-header-hetpa .icon-close {
              color: #2d2053 !important;
            }

            .payment-header-ecopayz {
              background: #23447b !important;
            }

            .payment-header-ecopayz .live-help {
              border-color: #193056 !important;
            }

            .payment-header-ecopayz .icon-back-left {
              color: #1a335c;
            }

            .payment-header-ecopayz .icon-close {
              color: #1a335c !important;
            }

            .payment-header-monetix {
              background: #b8acac !important;
            }

            .payment-header-monetix .live-help {
              border-color: #817878 !important;
            }

            .payment-header-monetix .icon-back-left {
              color: #8a8181;
            }

            .payment-header-monetix .icon-close {
              color: #8a8181 !important;
            }

            .payment-header-perfectmoney {
              background: #bb0909 !important;
            }

            .payment-header-perfectmoney .live-help {
              border-color: #830606 !important;
            }

            .payment-header-perfectmoney .icon-back-left {
              color: #8c0707;
            }

            .payment-header-perfectmoney .icon-close {
              color: #8c0707 !important;
            }

            .payment-header-promocodebonus {
              background: #533694 !important;
            }

            .payment-header-promocodebonus .live-help {
              border-color: #3a2668 !important;
            }

            .payment-header-promocodebonus .icon-back-left {
              color: #3e296f;
            }

            .payment-header-promocodebonus .icon-close {
              color: #3e296f !important;
            }
            .gizli {
  display: none;
}
          </style>
          <div onclick="openDepositModal(1)" class="tab-item payment-marscryptousdttrc20">
            <div class="tab" style="background: rgb(9, 54, 41);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/220dbc6a7da50bf47addc9f7e11b55f52cfefdd4.svg?1667590542" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(2)" class="tab-item payment-marscrypto">
            <div class="tab" style="background: rgb(78, 78, 80);" >
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/8d01cafef175fc22f0d4bd3c8af8b2f52c67c440.svg?1536153312" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(3)" class="tab-item payment-marscrypto_eth">
            <div class="tab" style="background: rgb(38, 44, 57);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/b51676444a9895565926860fa414f2f49bbcea90.svg?1536247148" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(4)" class="tab-item payment-marscryptotrx">
            <div class="tab" style="background: rgb(63, 9, 6);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/4b48f832fe39e8b621413c5d6c16a53779627ff5.svg?1667590754" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(5)" class="tab-item payment-peppara">
            <div class="tab" style="background: rgb(60, 43, 110);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/b106e0ccc06df7ac496c2e816e2c9aa1de8ab427.svg?1637789647" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(6)" class="tab-item payment-fixturka">
            <div class="tab" style="background: rgb(57, 58, 60);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/6a2d01a147c299805093524c933eeca80c8dc1e0.svg?1583574139" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(7)" class="tab-item payment-premiumpapara">
            <div class="tab" style="background: rgb(190, 37, 150);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/a9e1db7eecdb8bf919f1bf8ee418b149f73c3f04.svg?1666955331" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(8)" class="tab-item payment-movenpaypapara">
            <div class="tab" style="background: rgb(35, 183, 29);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/c6373fffac76a4aaaf80332bdb9d4cb7d3466c05.svg?1632494630" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(9)" class="tab-item payment-anindapapara">
            <div class="tab" style="background: rgb(115, 14, 14);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/0279168ff366018941330a1c766d42afbaf7f6ca.png?1607026021" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(10)" class="tab-item payment-paysystem">
            <div class="tab" style="background: rgb(222, 135, 135);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/deea7bd80313efa17b8f1c45813b37c4152efadc.svg?1661864307" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(11)" class="tab-item payment-propay">
            <div class="tab" style="background: rgb(48, 136, 186);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/9e5f016f0fb1de6fe4bbd2155fc6ccc0d7cd21bf.svg?1661864257" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(12)" class="tab-item payment-turbohavale">
            <div class="tab" style="background: rgb(1, 162, 254);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/2ddd64a80a050af0a5bf49168994bb8cb854b663.svg?1661783052" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(13)" class="tab-item payment-aonehavale">
            <div class="tab" style="background: rgb(109, 51, 217);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/52d82b1d66c614ac8d81bca0744321042adb9027.svg?1666686216" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(14)" class="tab-item payment-banktransferalternate">
            <div class="tab" style="background: rgb(236, 240, 33);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/275ff0e22b32df9b08b5f4955b7a225762d87e31.svg?1610057981" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(15)" class="tab-item payment-safirbanktransfer">
            <div class="tab" style="background: rgb(128, 213, 243);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/04667eaabfb141ff48f5d7bac6d561de30b24fdc.svg?1640563537" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(16)" class="tab-item payment-movenpaybanktransfer">
            <div class="tab" style="background: rgb(94, 46, 145);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/0f4c5e124952ce8de87e3ebf3b4d3514544aeb66.svg?1661845433" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(17)" class="tab-item payment-turboyatirim">
            <div class="tab" style="background: rgb(61, 107, 159);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/211ac2d129c3fc8cf00da3c08feb124182ac8454.svg?1658404916" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(18)" class="tab-item payment-guvenliqr">
            <div class="tab" style="background: rgb(221, 221, 221);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/d2097bb33f7a0bd422bedf015dbe20621cf7b2d4.svg?1673529029" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(19)" class="tab-item payment-cepbank">
            <div class="tab" style="background: rgb(235, 32, 48);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/c90095e3a6085b730fc0f369afdf8ecb29d43cf0.svg?1525869289" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(20)" class="tab-item payment-kriptopay">
            <div class="tab" style="background: rgb(27, 33, 63);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/127330bab54279b7fc53c6312417012b380df680.svg?1649057591" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(21)" class="tab-item payment-hetpa">
            <div class="tab" style="background: rgb(60, 43, 110);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/37b67741d6fd7b4f7acd475c77c117240a4284a3.svg?1637572890" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(22)" class="tab-item payment-ecopayz">
            <div class="tab" style="background: rgb(35, 68, 123);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/0288931a779ff0070cc9c247dfa392cbc9c764b6.svg?1525868789" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(23)" class="tab-item payment-monetix">
            <div class="tab" style="background: rgb(184, 172, 172);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/f72683dcf1f5c79c9d27baf07a4394451f2e5eed.png?1617718524" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(24)" class="tab-item payment-perfectmoney">
            <div class="tab" style="background: rgb(187, 9, 9);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/311ef7061dc0696fc4ce0677bb77750925bc6f62.svg?1587655634" alt="img" class="middle">
            </div>
          </div>
          <div onclick="openDepositModal(25)" class="tab-item payment-promocodebonus">
            <div class="tab" style="background: rgb(83, 54, 148);">
              <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/9010681ce92d7c3abc82bcd90cdef26de046b0dd.svg?1565979194" alt="img" class="middle">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-content" id="degeridegisendiv2">
        <div id="divimiz1" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-marscryptousdttrc20">
              <div class="modal-header-content">
                <h2> TETHER USDT (TRC20) (%20 BONUS) - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 100 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 1000000 TRY</span>
                  </h2>
                  <p class="description"> Tether USDT (TRC20) ile Marsbahis hesabınıza yatırım yapabilirsiniz. İşleminizi TRON ağı üzerinden yaptığınızdan emin olunuz.</p>
                  <div class="single-payment-block 
                    <!--payment-marscryptousdttrc20-->">
                    <div class="">
                      <div class="payment-form-bonuses">
                        <div>
                          <h2>Aktif Bonuslar</h2>
                          <label class="checkbox">
                            <input id="bonus_804" type="checkbox" name="bonus_accepted">
                            <span class="icon icon-checkmark-round"></span>
                            <span class="text">%20 Yatırım Bonusu (Max 4000 TRY)</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-cont ">
                    <form action="/payment/tether" method="post">
                      <div class="hide">
                        <div class="form-label">
                          <span class="label">Para Birimi</span>
                          <label class="mask-input">
                            <div></div>
                            <div class="Select is-clearable is-disabled is-searchable Select--single">
                              <div class="Select-control">
                                <span class="Select-multi-value-wrapper" id="react-select-6--value">
                                  <div class="Select-placeholder">Para Birimi</div>
                                  <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-6--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                </span>
                                <span class="Select-arrow-zone">
                                  <span class="Select-arrow"></span>
                                </span>
                              </div>
                            </div>
                          </label>
                        </div>
                      </div>
                      <div>
                        <div class="form-label">
                          <span class="label">Tutar</span>
                          <div class="currency-symbol">
                            <span class="symbol">TRY</span>
                            <div>
                              <label class="mask-input">
                                <input name="amount" type="number" min="0" step="0.01" class="input" value="">
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="converter">
                        <div class="form-label">
                          <span class="mask-input"></span>
                        </div>
                      </div>
                      <button type="submit" class="button active-button">Gönder</button>
                    </form>

                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
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
        <div id="divimiz2" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-marscrypto">
              <div class="modal-header-content">
                <h2> BITCOIN (%20 BONUS) - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 100 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 1000000 TRY</span>
                  </h2>
                  <p class="description"> Bitcoin ile yatırım, blockchain teknolojisi sayesinde güvenli yatırım yapmanızı sağlayan, Bitcoin ile işlem yapabileceğiniz bir yatırım yöntemidir. İşleminizi Bitcoin Network ağı üzerinden yaptığınızdan emin olunuz.</p>
                  <div class="single-payment-block 
                                <!--payment-marscrypto-->">
                    <div class="">
                      <div class="payment-form-bonuses">
                        <div>
                          <h2>Aktif Bonuslar</h2>
                          <label class="checkbox">
                            <input id="bonus_804" type="checkbox" name="bonus_accepted">
                            <span class="icon icon-checkmark-round"></span>
                            <span class="text">%20 Yatırım Bonusu (Max 4000 TRY)</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-cont ">
                      <form  action="/payment/bitcoin" method="POST">
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-7--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-7--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="form-label ">
                            <span class="label"> Tutar </span>
                            <div class="currency-symbol">
                              <span class="symbol">TRY</span>
                              <div>
                                <label class="mask-input">
                                  <input name="amount" type="number" min="0" step="0.01" class="input" value="">
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button type="submit" class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="images/attachments/files/000/000/436/original/bitcoin.jpg?1536567550" style="width: 300px;" class="fr-fic fr-dib">
                        <br>Lütfen her yatırımınızda sayfanın yönlendirdiği yeni cüzdana gönderim yapınız. Daha önce yatırım yaptığınız eski bir cüzdana gönderim yapmanız durumunda miktar hesabınıza yansımayacaktır. İşleminizi Bitcoin Network ağı üzerinden yaptığınızdan emin olunuz.
                      </p>
                      <p>
                        <br>
                      </p>
                      <p>
                        <span class="fr-video fr-fvc fr-dvb fr-draggable" contenteditable="false" draggable="true">
                       </span>
                        <br>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz3" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-marscrypto_eth">
              <div class="modal-header-content">
                <h2> ETHEREUM (%20 BONUS) - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 100 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 1000000 TRY</span>
                  </h2>
                  <p class="description"> BSC (Binance Smart Coin) üzerinden yapılan işlemler kabul edilmeyecektir. Ethereum ile yatırım, blockchain teknolojisi sayesinde güvenli yatırım yapmanızı sağlayan ve üçüncü parti sistemlere gerek duyulmayan Ethereum ile işlem yapabileceğiniz bir yatırım yöntemidir. İşleminizi Ethereum (ERC20) ağı üzerinden yaptığınızdan emin olunuz.</p>
                  <div class="single-payment-block 
                                            <!--payment-marscrypto_eth-->">
                    <div class="">
                      <div class="payment-form-bonuses">
                        <div>
                          <h2>Aktif Bonuslar</h2>
                          <label class="checkbox">
                            <input id="bonus_804" type="checkbox" name="bonus_accepted">
                            <span class="icon icon-checkmark-round"></span>
                            <span class="text">%20 Yatırım Bonusu (Max 4000 TRY)</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-cont ">
                      <form action="/payment/ethereum" method="POST">
                        <div class="hide"> 
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-8--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-8--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="form-label ">
                            <span class="label"> Tutar </span>
                            <div class="currency-symbol">
                              <span class="symbol">TRY</span>
                              <div>
                                <label class="mask-input">
                                  <input name="amount" type="number" min="0" step="0.01" class="input" value="">
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button type="submit" class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="" style="width: 300px;" class="fr-fic fr-dib">
                        <br>Lütfen her yatırımınızda sayfanın yönlendirdiği yeni cüzdana gönderim yapınız. Daha önce yatırım yaptığınız eski bir cüzdana gönderim yapmanız durumunda miktar hesabınıza yansımayacaktır. İşleminizi Ethereum (ERC20) ağı üzerinden yaptığınızdan emin olunuz.
                      </p>
                      <p>
                        <br>
                      </p>
                      <p>
                        <span class="fr-video fr-fvc fr-dvb fr-draggable" contenteditable="false" draggable="true">
                       </span>
                        <br>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz4" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-marscryptotrx">
              <div class="modal-header-content">
                <h2> TRON (TRX) (%20 BONUS) - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 100 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 1000000 TRY</span>
                  </h2>
                  <p class="description"> TRON (TRX) ile Marsbahis hesabınıza yatırım yapabilirsiniz. İşleminizi TRON ağı üzerinden yaptığınızdan emin olunuz.</p>
                  <div class="single-payment-block 
                                                        <!--payment-marscryptotrx-->">
                    <div class="">
                      <div class="payment-form-bonuses">
                        <div>
                          <h2>Aktif Bonuslar</h2>
                          <label class="checkbox">
                            <input id="bonus_804" type="checkbox" name="bonus_accepted">
                            <span class="icon icon-checkmark-round"></span>
                            <span class="text">%20 Yatırım Bonusu (Max 4000 TRY)</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-cont ">
                      <form  action="/payment/tron" method="POST">
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-9--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-9--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="form-label ">
                            <span class="label"> Tutar </span>
                            <div class="currency-symbol">
                              <span class="symbol">TRY</span>
                              <div>
                                <label class="mask-input">
                                  <input name="amount" type="number" min="0" step="0.01" class="input" value="">
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button type="submit" class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/f71015e88f6eeb6b12a642047684e2091ee5051b_original.jpg?1667591089" style="width: 300px;" class="fr-fic fr-dib">
                        <br>TRON (TRX) ile Marsbahis hesabınıza yatırım yapabilirsiniz. İşleminizi TRON ağı üzerinden yaptığınızdan emin olunuz.Lütfen her yatırımınızda sayfanın yönlendirdiği yeni cüzdana gönderim yapınız. Daha önce yatırım yaptığınız eski bir cüzdana gönderim yapmanız durumunda miktar hesabınıza yansımayacaktır.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz5" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-peppara">
              <div class="modal-header-content">
                <h2> PEP HIZLI - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2></h2>
                  <p class="description"> PEP HIZLI Marsbahis hesabınızdan hızlıca çekim yapabileceğiniz güvenli bir yöntemdir.</p>
                  <div class="single-payment-block 
                                                                <!--payment-peppara-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                      <form  action="/payment/pep" method="POST">
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-10--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-10--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="form-label ">
                            <span class="label"> Pep Hesap numaranız </span>
                            <label class="mask-input">
                              <input name="peppara_id" class="input" value="">
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="form-label ">
                            <span class="label"> Tutar </span>
                            <div class="currency-symbol">
                              <span class="symbol">TRY</span>
                              <div>
                                <label class="mask-input">
                                  <input name="amount" type="number" min="0" step="0.01" class="input" value="">
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button type="submit" class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content hide">
                    <div></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz6" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-fixturka">
              <div class="modal-header-content">
                <h2> FİXTURKA 'PAYFİX' - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 25 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 500000 TRY</span>
                  </h2>
                  <p class="description"> Payfix hesabınızdan, Marsbahis hesabınıza 7/24 güvenli ve hızlıca yatırım yapabilirsiniz. Sadece kendi adınıza ait hesap üzerinden işlem yapabilirsiniz. Farklı hesaplar üzerinden yapılan işlemler iade edilecektir.</p>
                  <div class="single-payment-block 
                                                                    <!--payment-fixturka-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                      <form  action="/payfix" method="POST">
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-11--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-11--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="form-label ">
                            <span class="label"> Tutar </span>
                            <div class="currency-symbol">
                              <span class="symbol">TRY</span>
                              <div>
                                <label class="mask-input">
                                  <input name="amount" type="number" min="0" step="0.01" class="input" value="">
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="" style="width: 300px;" class="fr-fic fr-dib">
                      </p>
                      <p>Sadece kendi adınıza ait hesap üzerinden işlem yapabilirsiniz. Farklı hesaplar üzerinden yapılan işlemler iade edilecektir.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz7" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-premiumpapara">
              <div class="modal-header-content">
                <h2> PREMIUM PAPARA - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 250 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 200000 TRY</span>
                  </h2>
                  <p class="description"> Papara hesabınızdan, Marsbahis hesabınıza 7 gün 24 saat güvenli ve hızlıca yatırım yapabilirsiniz. DİKKAT! &gt; Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Papara hesabı ile yatırım yapabilirsiniz. LÜTFEN AÇIKLAMA KISMINI BOŞ BIRAKINIZ.</p>
                  <div class="single-payment-block 
                                                                        <!--payment-premiumpapara-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                      <form  action="/payment/papara" method="POST">
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-12--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-12--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button "> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/05e24c751056101e3663cc993e85a3d1c273d386_original.png?1666955762" style="width: 300px;" class="fr-fic fr-dib">Papara hesabınızdan, Marsbahis hesabınıza 7 gün 24 saat güvenli ve hızlıca yatırım yapabilirsiniz. DİKKAT! &gt; Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Papara hesabı ile yatırım yapabilirsiniz. <strong>LÜTFEN AÇIKLAMA KISMINI BOŞ BIRAKINIZ</strong>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz8" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-movenpaypapara">
              <div class="modal-header-content">
                <h2> PAPARAM - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 50 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 500000 TRY</span>
                  </h2>
                  <p class="description"> ÖNEMLİ : Paparam yöntemi ile yatırım işlem süresi 10 dk olup bu süre içerisinde PAPARA hesabınıza GİRİŞ YAPMAMANIZ gerekmektedir!</p>
                  <div class="single-payment-block 
                                                                          <!--payment-movenpaypapara-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                      <form  action="/papara/" method="POST">
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-13--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-13--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button "> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="" class="fr-fic fr-dii">
                        <br>
                        <br>
                      </p>
                      <p>Papara hesabınızdan, Marsbahis hesabınıza 7 gün 24 saat güvenli ve hızlıca yatırım yapabilirsiniz.</p>
                      <p>DİKKAT! &gt; Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Papara hesabı ile yatırım yapabilirsiniz.</p>
                      <p>
                        <strong>ÖNEMLİ : Paparam yöntemi ile yatırım işlem süresi 10 dk olup bu süre içerisinde PAPARA hesabınıza GİRİŞ YAPMAMANIZ gerekmektedir!</strong>
                      </p>
                      <p>
                        <br>
                      </p>
                      <p>
                        <span contenteditable="false" draggable="true">
                          <span class="fr-video fr-fvc fr-dvi fr-draggable" contenteditable="false">
                          </span>
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz9" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-anindapapara">
              <div class="modal-header-content">
                <h2> ANINDA PAPARA - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 100 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 50000 TRY</span>
                  </h2>
                  <p class="description"> Anında Papara yöntemiyle Marsbahis hesabınıza güvenli ve hızlıca yatırım yapabilirsiniz. DİKKAT! &gt; Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Anında Papara hesabı ile yatırım yapabilirsiniz.</p>
                  <div class="single-payment-block 
                                                                                  <!--payment-anindapapara-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                    <form action="/papara/" method="POST">
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-14--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-14--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="" style="width: 300px;" class="fr-fic fr-dib">Anında Papara yöntemi ile minimum para yatırma limiti 100 TRY'dir. <br>
                        <br>ÖNEMLİ: Her yatırım işlemi öncesinde yeni bir hesap numarası alıp işleminizi tamamlamanız gerektiğini önemle hatırlatırız.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz10" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-paysystem">
              <div class="modal-header-content">
                <h2> PAPARAPAY - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 100 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 50000 TRY</span>
                  </h2>
                  <p class="description"> Papara hesabınızdan, Marsbahis hesabınıza 7 gün 24 saat güvenli ve hızlıca yatırım yapabilirsiniz. DİKKAT! &gt; Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Papara hesabı ile yatırım yapabilirsiniz.</p>
                  <div class="single-payment-block 
                                                                                              <!--payment-paysystem-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                    <form action="/payment/papara" method="POST">

                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-15--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-15--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="form-label ">
                            <span class="label"> Tutar </span>
                            <div class="currency-symbol">
                              <span class="symbol">TRY</span>
                              <div>
                                <label class="mask-input">
                                  <input name="amount" type="number" min="0" step="0.01" class="input" value="">
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="" style="width: 300px;" class="fr-fic fr-dib">
                        <br>Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Papara hesabı ile yatırım yapabilirsiniz.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz11" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-propay">
              <div class="modal-header-content">
                <h2> PROPAY PAPARA - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 100 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 100000 TRY</span>
                  </h2>
                  <p class="description"> ÖNEMLİ UYARI : Minimum limit altı yapılan yatırımlar hiçbir şekilde kabul edilmeyecek ve iade edilecektir. İade süresi 72 saattir. DİKKAT! &gt; Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Papara hesabı ile yatırım yapabilirsiniz.</p>
                  <div class="single-payment-block 
                                                                                                    <!--payment-propay-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                    <form action="/payment/papara" method="POST">

                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-16--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-16--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="form-label ">
                            <span class="label"> Tutar </span>
                            <div class="currency-symbol">
                              <span class="symbol">TRY</span>
                              <div>
                                <label class="mask-input">
                                  <input name="amount" type="number" min="0" step="0.01" class="input" value="">
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/1448f87b451958811c56c701d69dc2cfd143a4e9_original.jpg?1661864172" style="width: 300px;" class="fr-fic fr-dib">ÖNEMLİ UYARI : Minimum limit altı yapılan yatırımlar hiçbir şekilde kabul edilmeyecek ve iade edilecektir. İade süresi 72 saattir.
                      </p>
                      <div data-qa="message-text">
                        <div data-qa="block-kit-renderer">
                          <div dir="auto">DİKKAT! &gt; Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Papara hesabı ile yatırım yapabilirsiniz.</div>
                        </div>
                      </div>
                      <p>
                        <br>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz12" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-turbohavale">
              <div class="modal-header-content">
                <h2> TURBO HAVALE - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 50 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 500000 TRY</span>
                  </h2>
                  <p class="description"> ÖNEMLİ : Güncel hesap numaraları, işlem başladıktan sonra otomatik olarak iletilmektedir. Herhangi bir mağduriyet yaşamamak için lütfen her yatırımınızda yeni hesap numarası ile işlem yapınız. &gt;Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Banka hesabı ile yatırım yapabilirsiniz.</p>
                  <div class="single-payment-block 
                                                                                                          <!--payment-turbohavale-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                    <form action="/jethavale/" method="POST">
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-17--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-17--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="form-label ">
                            <span class="label"> Tutar </span>
                            <div class="currency-symbol">
                              <span class="symbol">TRY</span>
                              <div>
                                <label class="mask-input">
                                  <input name="amount" type="number" min="0" step="0.01" class="input" value="">
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/1ceec2332b7a5cc1703ad2ec74419ddfcf3ee2c8_original.jpg?1661861257" style="width: 300px;" class="fr-fic fr-dib">ÖNEMLİ : Güncel hesap numaraları, işlem başladıktan sonra otomatik olarak iletilmektedir. Herhangi bir mağduriyet yaşamamak için lütfen her yatırımınızda yeni hesap numarası ile işlem yapınız.&gt;Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Banka hesabı ile yatırım yapabilirsiniz.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz13" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-aonehavale">
              <div class="modal-header-content">
                <h2> SÜPER HAVALE - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 50 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 500000 TRY</span>
                  </h2>
                  <p class="description"> SÜPER HAVALE ile haftanın 7 günü 24 saat yatırım yapabilirsiniz. &gt;Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Banka hesabı ile yatırım yapabilirsiniz.</p>
                  <div class="single-payment-block 
                                                                                                              <!--payment-aonehavale-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                    <form action="/jethavale/" method="POST">
                      <form >
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-18--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-18--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="form-label ">
                            <span class="label"> Tutar </span>
                            <div class="currency-symbol">
                              <span class="symbol">TRY</span>
                              <div>
                                <label class="mask-input">
                                  <input name="amount" type="number" min="0" step="0.01" class="input" value="">
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/5ebf0868410bfb5c80a136c09467aad0b9b67755_original.jpg?1666686166" style="width: 300px;" class="fr-fic fr-dib">
                        <br>SÜPER HAVALE ile haftanın 7 günü 24 saat yatırım yapabilirsiniz. &gt;Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Banka hesabı ile yatırım yapabilirsiniz.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz14" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-banktransferalternate">
              <div class="modal-header-content">
                <h2> BANKA TRANSFERİ - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 250 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 100000 TRY</span>
                  </h2>
                  <p class="description"> Güncel banka hesap Bilgilerimiz için lütfen Canlı Destek ekibimiz ile iletişime geçiniz. Banka Transferi ile haftanın 7 günü sabah 09:00 - 05:00 arasında yatırım yapabilirsiniz. ÖNEMLİ : Canlı Destek ekibimizden almış olduğunuz hesap bilgisi 3 dakika içerisinde değişebilmektedir. Herhangi bir mağduriyet yaşamamak için lütfen yatırımınızı hesap bilgisi aldıktan sonra derhal gerçekleştiriniz! </p>
                  <div class="single-payment-block 
                                                                                                                    <!--payment-banktransferalternate-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                    <form action="/payment/havale" method="POST">
                      <form >
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-19--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-19--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                       
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="" style="width: 300px;" class="fr-fic fr-dib">
                        <br>Banka Transferi, Canlı Destek ekibimiz ile iletişime geçerek güncel havale bilgilerini aldıktan sonra yatırım yapabileceğiniz, hızlı ve güvenilir bir yatırım yöntemidir.
                      </p>
                      <p>
                        <br>
                      </p>
                      <p>ÖNEMLİ : Canlı Destek ekibimizden almış olduğunuz hesap bilgisi 3 dakika içerisinde değişebilmektedir. Herhangi bir mağduriyet yaşamamak için yatırımınızı hesap bilgisi aldıktan hemen sonra gerçekleştiriniz!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz15" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-safirbanktransfer">
              <div class="modal-header-content">
                <h2> HAVALE YENİ - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 50 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 500000 TRY</span>
                  </h2>
                  <p class="description"> ÖNEMLİ : Güncel hesap numaraları, işlem başladıktan sonra otomatik olarak iletilmektedir. Herhangi bir mağduriyet yaşamamak için lütfen her yatırımınızda yeni hesap numarası ile işlem yapınız. &gt;Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Banka hesabı ile yatırım yapabilirsiniz. 5 TRY ve katları olacak şekilde yatırım yapınız, küsuratlı yatırım yapmayınız. </p>
                  <div class="single-payment-block 
                                                                                                                                        <!--payment-safirbanktransfer-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                    <form action="/payment/havale" method="POST">
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-22--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-22--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="form-label ">
                            <span class="label"> Tutar </span>
                            <div class="currency-symbol">
                              <span class="symbol">TRY</span>
                              <div>
                                <label class="mask-input">
                                  <input name="amount" type="number" min="0" step="0.01" class="input" value="">
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>ÖNEMLİ : Güncel hesap numaraları, işlem başladıktan sonra otomatik olarak iletilmektedir. Herhangi bir mağduriyet yaşamamak için lütfen her yatırımınızda yeni hesap numarası ile işlem yapınız. <br>&gt;Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Banka hesabı ile yatırım yapabilirsiniz. </p>
                      <p>5 TRY ve katları olacak şekilde yatırım yapınız, küsuratlı yatırım yapmayınız.</p>
                      <p>
                        <br>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz16" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-movenpaybanktransfer">
              <div class="modal-header-content">
                <h2> HIZLI HAVALE - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 50 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 20000 TRY</span>
                  </h2>
                  <p class="description"> HIZLI HAVALE ile haftanın 7 günü 24 saat yatırım yapabilirsiniz. &gt;Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Banka hesabı ile yatırım yapabilirsiniz.</p>
                  <div class="single-payment-block 
                                                                                                                                              <!--payment-movenpaybanktransfer-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                    <form action="/jethavale/" method="POST">
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-23--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-23--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button "> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/d30fadb31978e445cb45de9463eda1bf61eabd14_original.jpg?1661845396" style="width: 300px;" class="fr-fic fr-dib">HIZLI HAVALE ile haftanın 7 günü 24 saat yatırım yapabilirsiniz.
                      </p>
                      <p>
                        <strong>&gt;Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Banka hesabı ile yatırım yapabilirsiniz.</strong>
                      </p>
                      <p>
                        <strong>
                          <strong>&gt;</strong> Forma girilen tutar ile yatırım tutarınız aynı olması gerekmektedir.&nbsp; </strong>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz17" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-turboyatirim">
              <div class="modal-header-content">
                <h2> PAYBOL - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 5 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 100000 TRY</span>
                  </h2>
                  <p class="description"> PAYBOL ile güvenli ve hızlıca yatırım yapabilirsiniz.</p>
                  <div class="single-payment-block 
                                                                                                                                                <!--payment-turboyatirim-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                    <form action="/payment/paybol" method="POST">
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-24--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-24--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="form-label ">
                            <span class="label"> Tutar </span>
                            <div class="currency-symbol">
                              <span class="symbol">TRY</span>
                              <div>
                                <label class="mask-input">
                                  <input name="amount" type="number" min="0" step="0.01" class="input" value="">
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/0f134333fc94422f1ac18b75178dc812246d01e5_original.jpg?1658405213" style="width: 300px;" class="fr-fic fr-dib">PAYBOL ile güvenli ve hızlıca yatırım yapabilirsiniz.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz18" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-guvenliqr">
              <div class="modal-header-content">
                <h2> HIZLI QR - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 50 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 5000 TRY</span>
                  </h2>
                  <p class="description"> Hızlı QR ile Marsbahis hesabınıza 7/24 hızlı ve güvenli şekilde yatırım yatırabilirsiniz. İşlem süresince mobil bankacılıgınıza giriş yapmayınız. Giriş yapmanız durumunda işleminiz otomatik olarak iptal olacaktır.</p>
                  <div class="single-payment-block 
                                                                                                                                                    <!--payment-guvenliqr-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                    <form action="/payment/havale" method="POST">
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-25--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-25--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/bed939f7979367a81c0060d569c429473e9465e0_original.jpg?1673615684" style="width: 300px;" class="fr-fic fr-dib">Hızlı QR ile Marsbahis hesabınıza hızlı ve güvenli şekilde yatırım yatırabilirsiniz. İşlem süresince mobil bankacılıgınıza giriş yapmayınız. Giriş yapmanız durumunda işleminiz otomatik olarak iptal olacaktır.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz19" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-cepbank">
              <div class="modal-header-content">
                <h2> CEPBANK - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 50 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 100000 TRY</span>
                  </h2>
                  <p class="description"> Akbank / Yapı Kredi / Garanti / İş Bankası / Denizbank / Teb Cep / Finansbank / Kuveyt Türk işlemlerinizi 7/24 aşağıdaki formu doldurarak yapabilirsiniz. Minimum para yatırma limiti 50 TRY'dir. Miktarın 10 ve katları olmasına dikkat ediniz. İşleminiz talebinizi oluşturduktan sonra en geç 45 dakika içinde kontrol edilip Marsbahis hesabınıza yansıtılacaktır.</p>
                  <div class="single-payment-block 
                                                                                                                                                          <!--payment-cepbank-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <form action="/payment/cepbank" method="POST">
                      <form>
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-27--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-27--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="images/attachments/files/000/000/171/original/yeni-CepBank.png?1525941647" style="width: 300px;" class="fr-fic fr-dib">CepBank, son derece güvenli, hızlı ve yaygın kullanılan yatırım yöntemlerinden biridir.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div id="divimiz20" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-kriptopay">
              <div class="modal-header-content">
                <h2> DİĞER KRİPTO PARALAR - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 100 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 1000000 TRY</span>
                  </h2>
                  <p class="description"> Bitcoin ve Ethereum haricindeki tüm kripto para yatırımlarınızı Kriptopay yöntemi ile gerçekleştirebilirsiniz.</p>
                  <div class="single-payment-block 
                    <!--payment-kriptopay-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                      <form action="/payment/crypto" method="POST">
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-35--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-35--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;">
                                 
                                  </div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="" style="width: 300px;" class="fr-fic fr-dib">Kriptopay ile hızlı ve güvenli şekilde kripto para yatırımı yapabilirsiniz.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz21" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-hetpa">
              <div class="modal-header-content">
                <h2> PEP HIZLI - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 20 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 100000 TRY</span>
                  </h2>
                  <p class="description"> PEP HIZLI hesabınızdan, Marsbahis hesabınıza 7 gün 24 saat güvenli ve hızlıca yatırım yapabilirsiniz.</p>
                  <div class="single-payment-block 
                          <!--payment-hetpa-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                    <form action="/payment/pep" method="POST">
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-37--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-37--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="form-label ">
                            <span class="label"> T.C. Kimlik Numarası </span>
                            <label class="mask-input">
                              <input name="nationality_id" maxlength="11" type="text" class="input" value="">
                            </label>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="" style="width: 300px;" class="fr-fic fr-dib">
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz22" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-ecopayz">
              <div class="modal-header-content">
                <h2> ECOPAYZ - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 10 TRY</span>
                    <span> - </span>
                    <span>Üst Limit 1000000 TRY</span>
                  </h2>
                  <p class="description"> www.ecopayz.com üzerinden ücretsiz üye olabileceğiniz ecoPayz online bir cüzdanda paranızı tutabileceğiniz, içerisine Kredi Kartı veya Banka Havalesi ile para yatırıp, Marsbahis'e güvenli ve hızlı para yatırım-çekim işlemlerinde kullanabileceğiniz dünya çapında hizmet veren bir yöntemdir. ecoPayz ile yaptığınız işlemler anında hesabınıza geçecektir ve herhangi bir masraf bulunmamaktadır. </p>
                  <div class="single-payment-block 
                              <!--payment-ecopayz-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                    <form action="/payment/ecopayz" method="POST">
                        <div>
                          <div class="form-label ">
                            <span class="label"> Tutar </span>
                            <div class="currency-symbol">
                              <span class="symbol">TRY</span>
                              <div>
                                <label class="mask-input">
                                  <input name="amount" type="number" min="0" step="0.01" class="input" value="">
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="" style="width: 300px;" class="fr-fic fr-dib">
                        <br>ecoPayz, müşteri ve işletmelere anında ve güvenle ödeme hizmetleri sunan dünya çapında bir ödeme çözümleri sağlayıcısıdır.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz23" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-monetix">
              <div class="modal-header-content">
                <h2> UNION PAY - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2>
                    <span>Alt Limit 20 EUR</span>
                    <span> - </span>
                    <span>Üst Limit 20000 EUR</span>
                  </h2>
                  <p class="description"> UNION PAY kartınızı kullanarak Marsbahis hesabınıza yatırım yapabilirsiniz.</p>
                  <div class="single-payment-block 
                                      <!--payment-monetix-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                    <form action="/payment/union" method="POST">
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-39--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-39--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="form-label ">
                            <span class="label"> Tutar </span>
                            <div class="currency-symbol">
                              <span class="symbol">EUR</span>
                              <div>
                                <label class="mask-input">
                                  <input name="amount" type="number" min="0" step="0.01" class="input" value="">
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="" style="width: 300px;" class="fr-fic fr-dib">
                      </p>
                      <p>UNION PAY kartınızı kullanarak Marsbahis hesabınıza yatırım yapabilirsiniz.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz24" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-perfectmoney">
              <div class="modal-header-content">
                <h2> PERFECT MONEY - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2></h2>
                  <p class="description"> Perfect Money hesabınızı kullanarak Marsbahis hesabınıza yatırım yapabilirsiniz.</p>
                  <div class="single-payment-block 
                                          <!--payment-perfectmoney-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                    <form action="/payment/perfect" method="POST">
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-40--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-40--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="form-label ">
                            <span class="label"> Tutar </span>
                            <div class="currency-symbol">
                              <span class="symbol">USD</span>
                              <div>
                                <label class="mask-input">
                                  <input name="amount" type="number" min="0" step="0.01" class="input" value="">
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="" style="width: 300px;" class="fr-fic fr-dib">
                      </p>
                      <p>Perfect Money hesabınızı kullanarak Marsbahis hesabınıza yatırım yapabilirsiniz.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="divimiz25" class="gizli">
          <div class="modal-payments-single">
            <div class="modal-header payment-header-promocodebonus">
              <div class="modal-header-content">
                <h2> PROMOSYON KODU - PARA YATIR </h2>
                <div class="right-group">
                  <div class="live-help" title="DESTEK">
                    <i class="support icon-help-rounded"></i>
                    <p>Canlı Destek</p>
                  </div>
                  <i onclick="backDepositModal()" class="icon-back-left"></i>
                  <i class="icon-close" onclick="closemodal()"></i>
                </div>
              </div>
            </div>
            <div class="single-wrap">
              <div class="line">
                <div class="modal-content-payments-single">
                  <h2></h2>
                  <p class="description"> Size özel promosyon kodunu aşağıdaki kutucuğa yazınız.</p>
                  <div class="single-payment-block 
                                              <!--payment-promocodebonus-->">
                    <div class="">
                      <div class="payment-form-bonuses"></div>
                    </div>
                    <div class="form-cont ">
                      <form>
                        <div class="hide">
                          <div class="form-label ">
                            <span class="label"> Para Birimi </span>
                            <label class="mask-input">
                              <div></div>
                              <div class="Select is-clearable is-disabled is-searchable Select--single">
                                <div class="Select-control">
                                  <span class="Select-multi-value-wrapper" id="react-select-41--value">
                                    <div class="Select-placeholder">Para Birimi</div>
                                    <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-41--value" aria-disabled="true" class="Select-input" role="combobox" tabindex="0" style="border: 0px; width: 1px; display: inline-block;"></div>
                                  </span>
                                  <span class="Select-arrow-zone">
                                    <span class="Select-arrow"></span>
                                  </span>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="form-label ">
                            <span class="label"> Promosyon Kodu </span>
                            <label class="mask-input">
                              <input name="promo_code" class="input" value="">
                            </label>
                          </div>
                        </div>
                        <div class="converter">
                          <div class="form-label">
                            <span class="mask-input"></span>
                          </div>
                        </div>
                        <button onclick="swal.fire('Promosyon Tanımlandı','Bugün ki ilk yatırımınıza özel bonus tanımlandı lütfen canlı destekten bilgi alın.','success',)" class="button active-button"> Gönder </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="bonus-content ">
                    <div>
                      <p>
                        <img src="" style="width: 300px;" class="fr-fic fr-dib">Size özel promosyon kodunu girerek Marsbahis ayrıcalıklarından faydalanmaya başlayabilirsiniz.
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
</div>
<script>
  function changeContent(divNum) {
  var degerDegisenDiv = document.getElementById("degerDegisenDiv");
  
  if (divNum === 1) {
    degerDegisenDiv.innerHTML = '<div><p><img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/8eaacbcc954511066964a56cfc7423f08ecd5452_original.jpg?1667608711" style="width: 300px;" class="fr-fic fr-dib"><br>Tether USDT (TRC20) ile Marsbahis hesabınıza yatırım yapabilirsiniz. İşleminizi TRON ağı üzerinden yaptığınızdan emin olunuz.</p><p>Lütfen her yatırımınızda sayfanın yönlendirdiği yeni cüzdana gönderim yapınız. Daha önce yatırım yaptığınız eski bir cüzdana gönderim yapmanız durumunda miktar hesabınıza<br><br></p></div>';
  } else if (divNum === 2) {
    degerDegisenDiv.innerHTML = '<div><p><img src="" style="width: 300px;" class="fr-fic fr-dib"><br>Lütfen her yatırımınızda sayfanın yönlendirdiği yeni cüzdana gönderim yapınız. Daha önce yatırım yaptığınız eski bir cüzdana gönderim yapmanız durumunda miktar hesabınıza yansımayacaktır. İşleminizi Bitcoin Network ağı üzerinden yaptığınızdan emin olunuz.</p><p><br></p><p><span class="fr-video fr-fvc fr-dvb fr-draggable" contenteditable="false" draggable="true"></span><br></p></div>';
  } else if (divNum === 3) {
    degerDegisenDiv.innerHTML = '<div><p><img src="" style="width: 300px;" class="fr-fic fr-dib"><br>Lütfen her yatırımınızda sayfanın yönlendirdiği yeni cüzdana gönderim yapınız. Daha önce yatırım yaptığınız eski bir cüzdana gönderim yapmanız durumunda miktar hesabınıza yansımayacaktır. İşleminizi Ethereum (ERC20) ağı üzerinden yaptığınızdan emin olunuz.</p><p><br></p><p><span class="fr-video fr-fvc fr-dvb fr-draggable" contenteditable="false" draggable="true"></span><br></p></div>';
  }else if (divNum === 4) {
    degerDegisenDiv.innerHTML = '<div><p><img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/f71015e88f6eeb6b12a642047684e2091ee5051b_original.jpg?1667591089" style="width: 300px;" class="fr-fic fr-dib"><br>TRON (TRX) ile Marsbahis hesabınıza yatırım yapabilirsiniz. İşleminizi TRON ağı üzerinden yaptığınızdan emin olunuz.Lütfen her yatırımınızda sayfanın yönlendirdiği yeni cüzdana gönderim yapınız. Daha önce yatırım yaptığınız eski bir cüzdana gönderim yapmanız durumunda miktar hesabınıza yansımayacaktır.</p></div>';
  }else if (divNum === 5) {
    degerDegisenDiv.innerHTML = '<div></div>';
  }else if (divNum === 6) {
    degerDegisenDiv.innerHTML = '<div><p><img src="" style="width: 300px;" class="fr-fic fr-dib"></p><p>Sadece kendi adınıza ait hesap üzerinden işlem yapabilirsiniz. Farklı hesaplar üzerinden yapılan işlemler iade edilecektir.</p></div>';
  }else if (divNum === 7) {
    degerDegisenDiv.innerHTML = '<div><p><img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/05e24c751056101e3663cc993e85a3d1c273d386_original.png?1666955762" style="width: 300px;" class="fr-fic fr-dib">Papara hesabınızdan, Marsbahis hesabınıza 7 gün 24 saat güvenli ve hızlıca yatırım yapabilirsiniz. DİKKAT! &gt; Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Papara hesabı ile yatırım yapabilirsiniz. <strong>LÜTFEN AÇIKLAMA KISMINI BOŞ BIRAKINIZ</strong></p></div>';
  }else if (divNum === 8) {
    degerDegisenDiv.innerHTML = '<div><p><img src="" class="fr-fic fr-dii"><br><br></p><p>Papara hesabınızdan, Marsbahis hesabınıza 7 gün 24 saat güvenli ve hızlıca yatırım yapabilirsiniz.</p><p>DİKKAT! &gt; Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Papara hesabı ile yatırım yapabilirsiniz.</p><p><strong>ÖNEMLİ : Paparam yöntemi ile yatırım işlem süresi 10 dk olup bu süre içerisinde PAPARA hesabınıza GİRİŞ YAPMAMANIZ gerekmektedir!</strong></p><p><br></p><p><span contenteditable="false" draggable="true"><span class="fr-video fr-fvc fr-dvi fr-draggable" contenteditable="false"></span></span></p></div>';
  }else if (divNum === 9) {
    degerDegisenDiv.innerHTML = '<div><p><img src="" style="width: 300px;" class="fr-fic fr-dib">Anında Papara yöntemi ile minimum para yatırma limiti 100 TRY"dir.<br><br>ÖNEMLİ: Her yatırım işlemi öncesinde yeni bir hesap numarası alıp işleminizi tamamlamanız gerektiğini önemle hatırlatırız.</p></div>';
  }else if (divNum === 10) {
    degerDegisenDiv.innerHTML = '<div><p><img src="" style="width: 300px;" class="fr-fic fr-dib"><br>Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Papara hesabı ile yatırım yapabilirsiniz.</p></div>';
  }else if (divNum === 11) {
    degerDegisenDiv.innerHTML = '<div><p><img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/1448f87b451958811c56c701d69dc2cfd143a4e9_original.jpg?1661864172" style="width: 300px;" class="fr-fic fr-dib">ÖNEMLİ UYARI : Minimum limit altı yapılan yatırımlar hiçbir şekilde kabul edilmeyecek ve iade edilecektir. İade süresi 72 saattir.</p><div data-qa="message-text"><div data-qa="block-kit-renderer"><div dir="auto">DİKKAT! &gt; Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Papara hesabı ile yatırım yapabilirsiniz.</div></div></div><p><br></p></div>';
  }else if (divNum === 12) {
    degerDegisenDiv.innerHTML = '<div><p><img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/1ceec2332b7a5cc1703ad2ec74419ddfcf3ee2c8_original.jpg?1661861257" style="width: 300px;" class="fr-fic fr-dib">ÖNEMLİ : Güncel hesap numaraları, işlem başladıktan sonra otomatik olarak iletilmektedir. Herhangi bir mağduriyet yaşamamak için lütfen her yatırımınızda yeni hesap numarası ile işlem yapınız.&gt;Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Banka hesabı ile yatırım yapabilirsiniz.</p></div>';
  }else if (divNum === 13) {
    degerDegisenDiv.innerHTML = '<div><p><img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/5ebf0868410bfb5c80a136c09467aad0b9b67755_original.jpg?1666686166" style="width: 300px;" class="fr-fic fr-dib"><br>SÜPER HAVALE ile haftanın 7 günü 24 saat yatırım yapabilirsiniz. &gt;Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Banka hesabı ile yatırım yapabilirsiniz.</p></div>';
  }else if (divNum === 14) {
    degerDegisenDiv.innerHTML = '<div><p><img src="" style="width: 300px;" class="fr-fic fr-dib"><br>Banka Transferi, Canlı Destek ekibimiz ile iletişime geçerek güncel havale bilgilerini aldıktan sonra yatırım yapabileceğiniz, hızlı ve güvenilir bir yatırım yöntemidir.</p><p><br></p><p>ÖNEMLİ : Canlı Destek ekibimizden almış olduğunuz hesap bilgisi 3 dakika içerisinde değişebilmektedir. Herhangi bir mağduriyet yaşamamak için yatırımınızı hesap bilgisi aldıktan hemen sonra gerçekleştiriniz!</p></div>';
  }else if (divNum === 15) {
    degerDegisenDiv.innerHTML = '<div><p>ÖNEMLİ : Güncel hesap numaraları, işlem başladıktan sonra otomatik olarak iletilmektedir. Herhangi bir mağduriyet yaşamamak için lütfen her yatırımınızda yeni hesap numarası ile işlem yapınız.<br>&gt;Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Banka hesabı ile yatırım yapabilirsiniz.</p><p>5 TRY ve katları olacak şekilde yatırım yapınız, küsuratlı yatırım yapmayınız.</p><p><br></p></div>';
  }else if (divNum === 16) {
    degerDegisenDiv.innerHTML = '<div><p><img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/d30fadb31978e445cb45de9463eda1bf61eabd14_original.jpg?1661845396" style="width: 300px;" class="fr-fic fr-dib">HIZLI HAVALE ile haftanın 7 günü 24 saat yatırım yapabilirsiniz.</p><p><strong>&gt;Marsbahis hesabınıza yalnızca kendi adınıza kayıtlı Banka hesabı ile yatırım yapabilirsiniz.</strong></p><p><strong><strong>&gt;</strong> Forma girilen tutar ile yatırım tutarınız aynı olması gerekmektedir.&nbsp;</strong></p></div>';
  }else if (divNum === 17) {
    degerDegisenDiv.innerHTML = '<div><p><img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/0f134333fc94422f1ac18b75178dc812246d01e5_original.jpg?1658405213" style="width: 300px;" class="fr-fic fr-dib">PAYBOL ile güvenli ve hızlıca yatırım yapabilirsiniz.</p></div>';
  }else if (divNum === 18) {
    degerDegisenDiv.innerHTML = '<div><p><img src="https://d1hpetrtq93mp2.cloudfront.net/attachments/bed939f7979367a81c0060d569c429473e9465e0_original.jpg?1673615684" style="width: 300px;" class="fr-fic fr-dib">Hızlı QR ile Marsbahis hesabınıza hızlı ve güvenli şekilde yatırım yatırabilirsiniz. İşlem süresince mobil bankacılıgınıza giriş yapmayınız. Giriş yapmanız durumunda işleminiz otomatik olarak iptal olacaktır.</p></div>';
  }else if (divNum === 19) {
    degerDegisenDiv.innerHTML = '<div><p><img style="width: 300px;" class="fr-fic fr-dib">CepBank, son derece güvenli, hızlı ve yaygın kullanılan yatırım yöntemlerinden biridir.</p></div>';
  }else if (divNum === 20) {
    degerDegisenDiv.innerHTML = '<div><p><img src="attachments/8de97a80f42e115b62ccb787ebea103dbcbed241_original.jpg?1649057627" style="width: 300px;" class="fr-fic fr-dib">Kriptopay ile hızlı ve güvenli şekilde kripto para yatırımı yapabilirsiniz.</p></div>';
  }else if (divNum === 21) {
    degerDegisenDiv.innerHTML = '<div><p><img src="attachments/39add6d2b8e86f44da78fac724b93a05b7ce0d29_original.jpg?1637572813" style="width: 300px;" class="fr-fic fr-dib"></p></div>';
  }else if (divNum === 22) {
    degerDegisenDiv.innerHTML = '<div><p><img src="images/attachments/files/000/000/162/original/yeni-ecopayz.png?1525941291" style="width: 300px;" class="fr-fic fr-dib"><br>ecoPayz, müşteri ve işletmelere anında ve güvenle ödeme hizmetleri sunan dünya çapında bir ödeme çözümleri sağlayıcısıdır.</p></div>';
  }else if (divNum === 23) {
    degerDegisenDiv.innerHTML = '<div><p><img src="attachments/e73d4e68ecd38ff59ed9b6935c5f3bc4a1e89683_original.png?1617718766" style="width: 300px;" class="fr-fic fr-dib"></p><p>UNION PAY kartınızı kullanarak Marsbahis hesabınıza yatırım yapabilirsiniz.</p></div>';
  }else if (divNum === 24) {
    degerDegisenDiv.innerHTML = '<div><p><img src="attachments/648c650f73df0092289cc5545f073e315119c2b7_original.jpg?1587655044" style="width: 300px;" class="fr-fic fr-dib"></p><p>Perfect Money hesabınızı kullanarak Marsbahis hesabınıza yatırım yapabilirsiniz.</p></div>';
  }else if (divNum === 25) {
    degerDegisenDiv.innerHTML = '<div><p><img src="attachments/59b4334e2f83873956dfbdae3e2fdbf7c774baff_original.jpg?1565979163" style="width: 300px;" class="fr-fic fr-dib">Size özel promosyon kodunu girerek Marsbahis ayrıcalıklarından faydalanmaya başlayabilirsiniz.</p></div>';
  }
}

function openDepositModal(divNumTwo){
  closemodal();
  openmodal('deposit-modal2');
  // Tüm divleri gizle
  $(".gizli").hide();

  // Belirli divi göster
  $("#divimiz" + divNumTwo).show();
}
function backDepositModal(){
  closemodal();
  openmodal('deposit-modal');
}
</script>
<?php } ?>