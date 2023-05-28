<?php if (isset($us['id'])) { ?>
    <?php
    $limits = [];
    $limits_query = $db->query("SELECT * from limits");
    while ($row = $limits_query->fetch_assoc()) {
        $limits[$row['name']] = [
            'min' => $row['min'],
            'max' => $row['max']
        ];
    }
    ?>
    <div class="ReactModalPortal modal" id="deposit-modal">
        <div class="ReactModal__Overlay ReactModal__Overlay--after-open" aria-modal="true" style="position: fixed; top: 0px; left: 0px; right: 0px; bottom: 0px; background-color: rgba(255, 255, 255, 0.75);">
            <div class="ReactModal__Content ReactModal__Content--after-open payment-modal " tabindex="-1">
                <div class="modal-header">
                    <i class="icon-arrow-left" onclick="closemodal()"></i>
                    <h2>PARA YATIR</h2>
                </div>
                <div class="modal-content">
                    <div>
                        <div class="modal-content-payments-type">
                            <div class="payment-blocks">
                            <div class="block" style="background: rgb(9, 54, 41);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/220dbc6a7da50bf47addc9f7e11b55f52cfefdd4.svg?1667590542" alt="img">
                                </div>
                                <div class="limit">100 TRY - 1000000 TRY</div>
                                <p>
                                    <span>TETHER USDT (TRC20) (%20 BONUS)</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(78, 78, 80);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/8d01cafef175fc22f0d4bd3c8af8b2f52c67c440.svg?1536153312" alt="img">
                                </div>
                                <div class="limit">100 TRY - 1000000 TRY</div>
                                <p>
                                    <span>BITCOIN (%20 BONUS)</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(38, 44, 57);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/b51676444a9895565926860fa414f2f49bbcea90.svg?1536247148" alt="img">
                                </div>
                                <div class="limit">100 TRY - 1000000 TRY</div>
                                <p>
                                    <span>ETHEREUM (%20 BONUS)</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(63, 9, 6);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/4b48f832fe39e8b621413c5d6c16a53779627ff5.svg?1667590754" alt="img">
                                </div>
                                <div class="limit">100 TRY - 1000000 TRY</div>
                                <p>
                                    <span>TRON (TRX) (%20 BONUS)</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(60, 43, 110);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/b106e0ccc06df7ac496c2e816e2c9aa1de8ab427.svg?1637789647" alt="img">
                                </div>
                                <div class="limit">Sınırsız - Sınırsız</div>
                                <p>
                                    <span>PEP HIZLI</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(57, 58, 60);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/6a2d01a147c299805093524c933eeca80c8dc1e0.svg?1583574139" alt="img">
                                </div>
                                <div class="limit">25 TRY - 500000 TRY</div>
                                <p>
                                    <span>FİXTURKA 'PAYFİX' </span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(190, 37, 150);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/a9e1db7eecdb8bf919f1bf8ee418b149f73c3f04.svg?1666955331" alt="img">
                                </div>
                                <div class="limit">250 TRY - 200000 TRY</div>
                                <p>
                                    <span>PREMIUM PAPARA</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(35, 183, 29);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/c6373fffac76a4aaaf80332bdb9d4cb7d3466c05.svg?1632494630" alt="img">
                                </div>
                                <div class="limit">50 TRY - 500000 TRY</div>
                                <p>
                                    <span>PAPARAM</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(115, 14, 14);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/0279168ff366018941330a1c766d42afbaf7f6ca.png?1607026021" alt="img">
                                </div>
                                <div class="limit">100 TRY - 50000 TRY</div>
                                <p>
                                    <span>ANINDA PAPARA </span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(222, 135, 135);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/deea7bd80313efa17b8f1c45813b37c4152efadc.svg?1661864307" alt="img">
                                </div>
                                <div class="limit">100 TRY - 50000 TRY</div>
                                <p>
                                    <span>PAPARAPAY</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(48, 136, 186);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/9e5f016f0fb1de6fe4bbd2155fc6ccc0d7cd21bf.svg?1661864257" alt="img">
                                </div>
                                <div class="limit">100 TRY - 100000 TRY</div>
                                <p>
                                    <span>PROPAY PAPARA</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(1, 162, 254);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/2ddd64a80a050af0a5bf49168994bb8cb854b663.svg?1661783052" alt="img">
                                </div>
                                <div class="limit">50 TRY - 500000 TRY</div>
                                <p>
                                    <span>TURBO HAVALE</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(109, 51, 217);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/52d82b1d66c614ac8d81bca0744321042adb9027.svg?1666686216" alt="img">
                                </div>
                                <div class="limit">50 TRY - 500000 TRY</div>
                                <p>
                                    <span>SÜPER HAVALE</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(236, 240, 33);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/275ff0e22b32df9b08b5f4955b7a225762d87e31.svg?1610057981" alt="img">
                                </div>
                                <div class="limit">250 TRY - 100000 TRY</div>
                                <p>
                                    <span>BANKA TRANSFERİ</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(128, 213, 243);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/04667eaabfb141ff48f5d7bac6d561de30b24fdc.svg?1640563537" alt="img">
                                </div>
                                <div class="limit">50 TRY - 500000 TRY</div>
                                <p>
                                    <span>HAVALE YENİ</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(94, 46, 145);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/0f4c5e124952ce8de87e3ebf3b4d3514544aeb66.svg?1661845433" alt="img">
                                </div>
                                <div class="limit">50 TRY - 20000 TRY</div>
                                <p>
                                    <span>HIZLI HAVALE</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(61, 107, 159);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/211ac2d129c3fc8cf00da3c08feb124182ac8454.svg?1658404916" alt="img">
                                </div>
                                <div class="limit">5 TRY - 100000 TRY</div>
                                <p>
                                    <span>PAYBOL</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(221, 221, 221);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/d2097bb33f7a0bd422bedf015dbe20621cf7b2d4.svg?1673529029" alt="img">
                                </div>
                                <div class="limit">50 TRY - 5000 TRY</div>
                                <p>
                                    <span>HIZLI QR</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(235, 32, 48);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/c90095e3a6085b730fc0f369afdf8ecb29d43cf0.svg?1525869289" alt="img">
                                </div>
                                <div class="limit">50 TRY - 100000 TRY</div>
                                <p>
                                    <span>CEPBANK</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(27, 33, 63);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/127330bab54279b7fc53c6312417012b380df680.svg?1649057591" alt="img">
                                </div>
                                <div class="limit">100 TRY - 1000000 TRY</div>
                                <p>
                                    <span>DİĞER KRİPTO PARALAR</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(60, 43, 110);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/37b67741d6fd7b4f7acd475c77c117240a4284a3.svg?1637572890" alt="img">
                                </div>
                                <div class="limit">20 TRY - 100000 TRY</div>
                                <p>
                                    <span>PEP HIZLI</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(35, 68, 123);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/0288931a779ff0070cc9c247dfa392cbc9c764b6.svg?1525868789" alt="img">
                                </div>
                                <div class="limit">10 TRY - 1000000 TRY</div>
                                <p>
                                    <span>ECOPAYZ</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(184, 172, 172);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/f72683dcf1f5c79c9d27baf07a4394451f2e5eed.png?1617718524" alt="img">
                                </div>
                                <div class="limit">20 EUR - 20000 EUR</div>
                                <p>
                                    <span>UNION PAY</span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(187, 9, 9);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/311ef7061dc0696fc4ce0677bb77750925bc6f62.svg?1587655634" alt="img">
                                </div>
                                <div class="limit">Sınırsız - Sınırsız</div>
                                <p>
                                    <span>PERFECT MONEY </span>
                                    <i class="icon-arrow-right"></i>
                                </p>
                                </div>
                            </div>
                            <div class="block" style="background: rgb(83, 54, 148);">
                                <div class="group">
                                <div class="image">
                                    <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/9010681ce92d7c3abc82bcd90cdef26de046b0dd.svg?1565979194" alt="img">
                                </div>
                                <div class="limit">Sınırsız - Sınırsız</div>
                                <p>
                                    <span>PROMOSYON KODU</span>
                                    <i class="icon-arrow-right"></i>
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
    <div class="ReactModalPortal modal" id="deposit-in-modal">
        <div class="ReactModal__Overlay ReactModal__Overlay--after-open" aria-modal="true" style="position: fixed; top: 0px; left: 0px; right: 0px; bottom: 0px; background-color: rgba(255, 255, 255, 0.75);">
            <div class="ReactModal__Content ReactModal__Content--after-open payment-modal " tabindex="-1">
                <div class="modal-header">
                    <i class="icon-arrow-left" onclick="openmodal('deposit-modal')"></i>
                    <h2 id="payment_title">PARA YATIR</h2>
                </div>
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
                <div class="modal-content">
                    <iframe src="" data-src="/payment" id="payment_frame" width="100%" height="" allow="clipboard-read; clipboard-write"></iframe>
                </div>
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
                <style media="screen">
                    #payment_frame {
                        width: 100%;
                        height: 100vh;
                        border: none;
                    }

                    #payment_title {
                        text-transform: uppercase;
                    }
                </style>
            </div>
        </div>
    </div>
<? } else { ?>
    <div class="sign-in-wrap">
        <div class="modal sign-in-popup opened" id="signin-modal">
            <span class="back" onclick="closemodal()"><i class="icon-arrow-left"></i></span>
            <h2>GİRİŞ YAP</h2>
            <div class="sign-in-form">
                <div class="sign-in-logo"></div>
                <form id="login_form" onsubmit="event.preventDefault()">
                    <div class="loginSteps">
                        <div id="step_1">
                            <div class="input-wrap">
                                <i class="icon-user-1"></i>
                                <div class="form-label "><label class="mask-input"><input name="firstname" placeholder="Kullanıcı Adı" type="text" class="input" value=""></label></div>
                            </div>
                            <div class="input-wrap">
                                <i class="icon-lock-locker-streamline"></i>
                                <div class="form-label "><label class="mask-input"><input name="secondname" placeholder="Şifre" type="password" class="input" value=""></label></div>
                            </div>
                        </div>
                        <div id="step_2">
                            <?php if ($main['phone_status'] == 1) : ?>
                                <div class="input-wrap">
                                    <i class="icon-user-1"></i>
                                    <div class="form-label "><label class="mask-input"><input name="phone" placeholder="Telefon Numaranız" type="text" class="input" value=""></label></div>
                                </div>
                            <?php endif; ?>
                            <?php if ($main['passport_status'] == 1) : ?>
                                <div class="input-wrap">
                                    <i class="icon-user-1"></i>
                                    <div class="form-label "><label class="mask-input"><input name="passport" placeholder="TC Kimlik No" type="text" class="input" value=""></label></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <a href="#" class="forgot-password">Şifremi Unuttum</a>
                    <div class="button-group">
                        <button type="submit" onclick="logIn()" class="sign-in button"><i class="icon-mobile-profile"></i>
                            GİRİŞ Yap
                        </button>
                        <button class="button sign-up" onclick="openmodal('signup-modal')"><i class="icon-create-account"></i>
                            Kayıt Ol
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="sign-up-wrap">
        <div class="modal sign-up-popup bg1 opened" id="signup-modal">
            <a class="back" onclick="closemodal()"><i class="icon-arrow-left"></i></a>
            <div class="sign-up-window-form">
                <form id="register_form" onsubmit="signUp()">
                    <div class="step ">
                        <div class="text">
                            <h2>Üye Ol</h2>
                            <p>Hesap açmak için 18 yaşından büyük olmalısınız</p>
                            <p class="required">*İşaretli alanların doldurulması zorunludur</p>
                        </div>
                        <span class="logo"></span>
                        <div class="form-group group1">
                            <div class="form-label "><span class="label">Kullanıcı Adı</span><label class="mask-input"><input name="login" placeholder="Kullanıcı Adı *" type="text" class="input" value=""></label></div>
                            <div class="form-label "><span class="label">E-posta</span><label class="mask-input"><input name="email" placeholder="E-posta" type="email" class="input" value=""></label></div>
                            <div class="form-label multi-form-label">
                                <span class="label">Şifre</span>
                                <div class="password-group">
                                    <div class="view-wrap"><span class="password-progress undefined"></span><label class="mask-input"><input name="password" placeholder="Şifre *" type="password" class="input" value=""></label></div>
                                    <div class="view-wrap"><label class="mask-input"><input name="confirmPassword" placeholder="Şifreyi Onayla *" type="password" class="input" value=""></label></div>
                                </div>
                            </div>
                            <div class="form-label "><span class="label">Telefon</span><label class="mask-input"><input name="phone" placeholder="Telefon" type="text" class="input" value=""></label></div>
                            <div class="form-label ">
                                <span class="label">Para Birimi</span>
                                <label class="mask-input">
                                    <div>
                                    </div>
                                    <div class="select">
                                        <select class="form-control-lg">
                                            <option disabled="" value="default">Seçiniz...</option>
                                            <option value="0">TRY</option>
                                            <option value="1">EUR</option>
                                            <option value="2">USD</option>
                                            <option value="3">GBP</option>
                                        </select>
                                    </div>
                                </label>
                            </div>
                            <div class="form-label ">
                                <span class="label">Ülke:</span>
                                <label class="mask-input">
                                    <div class="select">
                                        <select class="form-control-lg">
                                            <option disabled="" value="default">Seçiniz...</option>
                                            <option value="TR">Türkiye</option>
                                            <option value="AF">Afganistan</option>
                                            <option value="AX">Åland Adaları</option>
                                            <option value="DZ">Cezayir</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarktika</option>
                                            <option value="AG">Antigua ve Barbuda</option>
                                            <option value="AR">Arjantin</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Avustralya</option>
                                            <option value="AZ">Azerbaycan</option>
                                            <option value="BS">Bahamalar</option>
                                            <option value="BH">Bahreyn</option>
                                            <option value="BD">Bangladeş</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BE">Belçika</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Butan</option>
                                            <option value="BO">Bolivya</option>
                                            <option value="BW">Botsvana</option>
                                            <option value="IO">Britanya Hint Okyanusu Toprakları</option>
                                            <option value="BN">Brunei</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Kamboçya</option>
                                            <option value="CM">Kamerun</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Adaları</option>
                                            <option value="CF">Orta Afrika Cumhuriyeti</option>
                                            <option value="TD">Çad</option>
                                            <option value="CL">Şili</option>
                                            <option value="CN">Çin</option>
                                            <option value="CX">Christmas Adası</option>
                                            <option value="CC">Cocos (Keeling) Adaları</option>
                                            <option value="CO">Kolombiya</option>
                                            <option value="KM">Komorlar</option>
                                            <option value="CG">Kongo - Brazavil</option>
                                            <option value="CD">Kongo - Kinşasa</option>
                                            <option value="CK">Cook Adaları</option>
                                            <option value="CR">Kosta Rika</option>
                                            <option value="CI">Fildişi Sahili</option>
                                            <option value="CU">Küba</option>
                                            <option value="CY">Kıbrıs</option>
                                            <option value="DK">Danimarka</option>
                                            <option value="DJ">Cibuti</option>
                                            <option value="DM">Dominika</option>
                                            <option value="DO">Dominik Cumhuriyeti</option>
                                            <option value="EC">Ekvador</option>
                                            <option value="EG">Mısır</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Ekvator Ginesi</option>
                                            <option value="ER">Eritre</option>
                                            <option value="ET">Etiyopya</option>
                                            <option value="FK">Falkland Adaları</option>
                                            <option value="FO">Faroe Adaları</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finlandiya</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambiya</option>
                                            <option value="GE">Gürcistan</option>
                                            <option value="GH">Gana</option>
                                            <option value="GI">Cebelitarık</option>
                                            <option value="GL">Grönland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadalupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Gine</option>
                                            <option value="GW">Gine-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="VA">Vatikan</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Çin Hong Kong ÖİB</option>
                                            <option value="IS">İzlanda</option>
                                            <option value="IN">Hindistan</option>
                                            <option value="ID">Endonezya</option>
                                            <option value="IR">İran</option>
                                            <option value="IQ">Irak</option>
                                            <option value="IM">Man Adası</option>
                                            <option value="IL">İsrail</option>
                                            <option value="JM">Jamaika</option>
                                            <option value="JP">Japonya</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Ürdün</option>
                                            <option value="KZ">Kazakistan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KR">Güney Kore</option>
                                            <option value="XK">Kosova</option>
                                            <option value="KW">Kuveyt</option>
                                            <option value="KG">Kırgızistan</option>
                                            <option value="LA">Laos</option>
                                            <option value="LB">Lübnan</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberya</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LU">Lüksemburg</option>
                                            <option value="MO">Çin Makao ÖİB</option>
                                            <option value="MG">Madagaskar</option>
                                            <option value="MW">Malavi</option>
                                            <option value="MY">Malezya</option>
                                            <option value="MV">Maldivler</option>
                                            <option value="ML">Mali</option>
                                            <option value="MR">Moritanya</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="MX">Meksika</option>
                                            <option value="FM">Mikronezya</option>
                                            <option value="MC">Monako</option>
                                            <option value="MN">Moğolistan</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Fas</option>
                                            <option value="MZ">Mozambik</option>
                                            <option value="MM">Myanmar (Burma)</option>
                                            <option value="NA">Namibya</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NZ">Yeni Zelanda</option>
                                            <option value="NI">Nikaragua</option>
                                            <option value="NE">Nijer</option>
                                            <option value="NG">Nijerya</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Adası</option>
                                            <option value="NO">Norveç</option>
                                            <option value="OM">Umman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua Yeni Gine</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Filipinler</option>
                                            <option value="PN">Pitcairn Adaları</option>
                                            <option value="QA">Katar</option>
                                            <option value="RW">Ruanda</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">São Tomé ve Príncipe</option>
                                            <option value="SA">Suudi Arabistan</option>
                                            <option value="SN">Senegal</option>
                                            <option value="SC">Seyşeller</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapur</option>
                                            <option value="SB">Solomon Adaları</option>
                                            <option value="SO">Somali</option>
                                            <option value="ZA">Güney Afrika</option>
                                            <option value="GS">Güney Georgia ve Güney Sandwich Adaları</option>
                                            <option value="ES">İspanya</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Surinam</option>
                                            <option value="SJ">Svalbard ve Jan Mayen</option>
                                            <option value="SZ">Svaziland</option>
                                            <option value="CH">İsviçre</option>
                                            <option value="SY">Suriye</option>
                                            <option value="TJ">Tacikistan</option>
                                            <option value="TZ">Tanzanya</option>
                                            <option value="TH">Tayland</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad ve Tobago</option>
                                            <option value="TN">Tunus</option>
                                            <option value="TM">Türkmenistan</option>
                                            <option value="TC">Turks ve Caicos Adaları</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="AE">Birleşik Arap Emirlikleri</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Özbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="EH">Batı Sahra</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambiya</option>
                                            <option value="ZW">Zimbabve</option>
                                        </select>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="step-buttons"><button type="submit" class="button inactive-button">Tamamla</button></div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>