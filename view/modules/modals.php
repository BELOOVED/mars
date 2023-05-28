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

  <div class="modal ReactModalPortal" id="deposit-modal">
    <div class="ReactModal__Overlay ReactModal__Overlay--after-open" aria-modal="true" style="position: fixed; top: 0px; left: 0px; right: 0px; bottom: 0px; background-color: rgba(255, 255, 255, 0.75);">
      <div class="ReactModal__Content ReactModal__Content--after-open payment-modal " tabindex="-1">
        <div class="modal-header" style="display: flex;align-items: center;justify-content: center;">
          <div class="modal-header-content">
            <h2>PARA YATIR</h2>
            <div class="right-group">
              <div class="live-help" onclick="openzopim()">
                <i class="support icon-help-rounded">
                </i>
                <p>Canlı Destek</p>
              </div>
              <i class="icon-close" onclick="closemodal()">
              </i>
            </div>
          </div>
        </div>
        <div class="modal-content" style="max-height:450px">
          <div>
            <? $limits = [];
            foreach ($db->query("select * from limits") as $limit) {
              $limits[$limit['name']] = $limit;
            }
            ?>
            <script>
              function setLimits(frame) {
                setTimeout(() => {
                  frame.contentWindow.postMessage({
                    cmd: 'limits',
                    limits: <?= json_encode($limits) ?>
                  }, '*');
                }, 1500);
              }
            </script>
            <style media="screen">
              #payment_frame {
                width: 100%;
                height: 540px;
              }
            </style>
            <?
            $payments = $db->query("select * from payment_methods where status ='0'")->fetch_all(MYSQLI_ASSOC);
            $limitList = $db->query("select * from limits")->fetch_all(MYSQLI_ASSOC);
            $limits = [];
            foreach ($limitList as $i => $limit) {
              $limits[$limit['name']] = $limit;
            }
            foreach ($payments as $i => $pay) {
              $payments[$i]['limit'] = $limits[$pay['slug']];
            }
            ?>
            <iframe id="payment_frame" onload="this.style.opacity=null" src="/payment" style="min-height:950px" allow="clipboard-read; clipboard-write">
            </iframe>
            <script>
              const iframe = document.getElementById('payment_frame');
              const user = <?= json_encode($us) ?>;
              const payments = <?= json_encode($payments) ?>;
              window.addEventListener('message', ({
                data
              }) => {
                if (data.action == "IFRAMELOADED") {
                  iframe.contentWindow.postMessage({
                    action: "USER",
                    payload: user
                  }, "*")
                  iframe.contentWindow.postMessage({
                    action: "PAYMENTS",
                    payload: payments
                  }, "*")
                }
              });
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>