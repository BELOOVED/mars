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
                            <div class="block" onclick="openDepositModal(1)" style="background: rgb(9, 54, 41);">
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
                            <div class="block" onclick="openPay('bitcoin')" style="background: rgb(78, 78, 80);">
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
                            <div class="block" onclick="openPay('ethereum')" style="background: rgb(38, 44, 57);">
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
                            <div class="block" onclick="openPay('tron')" style="background: rgb(63, 9, 6);">
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
                            <div class="block" onclick="openPay('pep')" style="background: rgb(60, 43, 110);">
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
                            <div class="block" onclick="openPay('payfix-3d')" style="background: rgb(57, 58, 60);">
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
                            <div class="block" onclick="openPay('papara')" style="background: rgb(190, 37, 150);">
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
                            <div class="block" onclick="window.location.href= '/papara/';" style="background: rgb(35, 183, 29);">
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
                            <div class="block" onclick="window.location.href= '/papara/';" style="background: rgb(115, 14, 14);">
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
                            <div class="block" onclick="openPay('papara')" style="background: rgb(222, 135, 135);">
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
                            <div class="block" onclick="openPay('papara')" style="background: rgb(48, 136, 186);">
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
                            <div class="block" onclick="openPay('havale')" style="background: rgb(1, 162, 254);">
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
                            <div class="block" onclick="window.location.href= '/jethavale/';" style="background: rgb(109, 51, 217);">
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
                            <div class="block" onclick="openPay('havale')" style="background: rgb(236, 240, 33);">
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
                            <div class="block" onclick="openPay('havale')"  style="background: rgb(128, 213, 243);">
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
                            <div class="block" onclick="openPay('havale')"  style="background: rgb(94, 46, 145);">
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
                            <div class="block" onclick="openPay('paybol')"  style="background: rgb(61, 107, 159);">
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
                            <div class="block" onclick="openPay('qr')"  style="background: rgb(221, 221, 221);">
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
                            <div class="block" onclick="openPay('cepbank')"  style="background: rgb(235, 32, 48);">
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
                            <div class="block" onclick="openPay('crypto')"  style="background: rgb(27, 33, 63);">
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
                            <div class="block" onclick="openPay('pep')"  style="background: rgb(60, 43, 110);">
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
                            <div class="block" onclick="openPay('ecopayz')"  style="background: rgb(35, 68, 123);">
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
                            <div class="block" onclick="openPay('union')"  style="background: rgb(184, 172, 172);">
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
                            <div class="block" onclick="openPay('perfect')"  style="background: rgb(187, 9, 9);">
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
                            <div class="block" onclick="swal.fire('Uyarı!','Şuan Promosyon Aktif Değil','warning',)"  style="background: rgb(83, 54, 148);">
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
    <div class="ReactModalPortal modal" id="withdraw-modal">
    <div class="ReactModal__Overlay ReactModal__Overlay--after-open" aria-modal="true" style="position: fixed; inset: 0px; background-color: rgba(255, 255, 255, 0.75);">
        <div class="ReactModal__Content ReactModal__Content--after-open payment-modal " tabindex="-1">
        <div class="modal-header">
            <i class="icon-arrow-left" onclick="closemodal()"></i>
            <h2>PARA ÇEKİM</h2>
        </div>
        <div class="modal-content">
            <div>
            <div class="modal-content-payments-type">
                <div class="payment-blocks">
                <div class="block" onclick="swal.fire('Bakiyeniz Yetersiz!','Lütfen Canlı Destek İle İletişime Geçiniz','warning');" style="background: rgb(240, 78, 35);">
                    <div class="group">
                    <div class="image">
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/7631112a8e5ecad983d01187b96e02811313961b.svg?1621202020" alt="img">
                    </div>
                    <div class="limit">5 TRY - 10000 TRY</div>
                    <p>
                        <span>ARKADAŞINA TRANSFER</span>
                        <i class="icon-arrow-right"></i>
                    </p>
                    </div>
                </div>
                <div class="block" onclick="swal.fire('Bakiyeniz Yetersiz!','Lütfen Canlı Destek İle İletişime Geçiniz','warning');" style="background: rgb(9, 54, 41);">
                    <div class="group">
                    <div class="image">
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/220dbc6a7da50bf47addc9f7e11b55f52cfefdd4.svg?1667590542" alt="img">
                    </div>
                    <div class="limit">200 TRY - 100000000 TRY</div>
                    <p>
                        <span>TETHER USDT (TRC20)</span>
                        <i class="icon-arrow-right"></i>
                    </p>
                    </div>
                </div>
                <div class="block" onclick="swal.fire('Bakiyeniz Yetersiz!','Lütfen Canlı Destek İle İletişime Geçiniz','warning');" style="background: rgb(78, 78, 80);">
                    <div class="group">
                    <div class="image">
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/8d01cafef175fc22f0d4bd3c8af8b2f52c67c440.svg?1536153312" alt="img">
                    </div>
                    <div class="limit">200 TRY - 100000000 TRY</div>
                    <p>
                        <span>BITCOIN</span>
                        <i class="icon-arrow-right"></i>
                    </p>
                    </div>
                </div>
                <div class="block" onclick="swal.fire('Bakiyeniz Yetersiz!','Lütfen Canlı Destek İle İletişime Geçiniz','warning');" style="background: rgb(38, 44, 57);">
                    <div class="group">
                    <div class="image">
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/b51676444a9895565926860fa414f2f49bbcea90.svg?1536247148" alt="img">
                    </div>
                    <div class="limit">200 TRY - 100000000 TRY</div>
                    <p>
                        <span>ETHEREUM</span>
                        <i class="icon-arrow-right"></i>
                    </p>
                    </div>
                </div>
                <div class="block" onclick="swal.fire('Bakiyeniz Yetersiz!','Lütfen Canlı Destek İle İletişime Geçiniz','warning');" style="background: rgb(60, 43, 110);">
                    <div class="group">
                    <div class="image">
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/b106e0ccc06df7ac496c2e816e2c9aa1de8ab427.svg?1637789647" alt="img">
                    </div>
                    <div class="limit">100 TRY - 100000 TRY</div>
                    <p>
                        <span>PEP HIZLI</span>
                        <i class="icon-arrow-right"></i>
                    </p>
                    </div>
                </div>
                <div class="block" onclick="swal.fire('Bakiyeniz Yetersiz!','Lütfen Canlı Destek İle İletişime Geçiniz','warning');" style="background: rgb(57, 58, 60);">
                    <div class="group">
                    <div class="image">
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/6a2d01a147c299805093524c933eeca80c8dc1e0.svg?1583574139" alt="img">
                    </div>
                    <div class="limit">100 TRY - 100000 TRY</div>
                    <p>
                        <span>FİXTURKA 'PAYFİX' </span>
                        <i class="icon-arrow-right"></i>
                    </p>
                    </div>
                </div>
                <div class="block" onclick="swal.fire('Bakiyeniz Yetersiz!','Lütfen Canlı Destek İle İletişime Geçiniz','warning');" style="background: rgb(190, 37, 150);">
                    <div class="group">
                    <div class="image">
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/150cdf1431d906fe8af94b7e3f2d4a574e25eb5d.svg?1667034599" alt="img">
                    </div>
                    <div class="limit">100 TRY - 100000 TRY</div>
                    <p>
                        <span>PREMIUM PAPARA</span>
                        <i class="icon-arrow-right"></i>
                    </p>
                    </div>
                </div>
                <div class="block" onclick="swal.fire('Bakiyeniz Yetersiz!','Lütfen Canlı Destek İle İletişime Geçiniz','warning');" style="background: rgb(38, 182, 227);">
                    <div class="group">
                    <div class="image">
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/d665ed7a45b513c960f4345a9b65e424f4116ccf.svg?1530968390" alt="img">
                    </div>
                    <div class="limit">100 TRY - 100000 TRY</div>
                    <p>
                        <span>PAPARA</span>
                        <i class="icon-arrow-right"></i>
                    </p>
                    </div>
                </div>
                <div class="block" onclick="swal.fire('Bakiyeniz Yetersiz!','Lütfen Canlı Destek İle İletişime Geçiniz','warning');" style="background: rgb(35, 183, 29);">
                    <div class="group">
                    <div class="image">
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/c6373fffac76a4aaaf80332bdb9d4cb7d3466c05.svg?1632494630" alt="img">
                    </div>
                    <div class="limit">100 TRY - 100000 TRY</div>
                    <p>
                        <span>PAPARAM</span>
                        <i class="icon-arrow-right"></i>
                    </p>
                    </div>
                </div>
                <div class="block" onclick="swal.fire('Bakiyeniz Yetersiz!','Lütfen Canlı Destek İle İletişime Geçiniz','warning');" style="background: rgb(115, 14, 14);">
                    <div class="group">
                    <div class="image">
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/0279168ff366018941330a1c766d42afbaf7f6ca.png?1607026021" alt="img">
                    </div>
                    <div class="limit">100 TRY - 10000 TRY</div>
                    <p>
                        <span>ANINDA PAPARA</span>
                        <i class="icon-arrow-right"></i>
                    </p>
                    </div>
                </div>
                <div class="block" onclick="swal.fire('Bakiyeniz Yetersiz!','Lütfen Canlı Destek İle İletişime Geçiniz','warning');" style="background: rgb(255, 201, 25);">
                    <div class="group">
                    <div class="image">
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/e10464589ab65549139e024a5197dff70263f0c8.svg?1541146691" alt="img">
                    </div>
                    <div class="limit">100 TRY - 50000 TRY</div>
                    <p>
                        <span>ATM KARTSIZ ÇEKİM</span>
                        <i class="icon-arrow-right"></i>
                    </p>
                    </div>
                </div>
                <div class="block" onclick="swal.fire('Bakiyeniz Yetersiz!','Lütfen Canlı Destek İle İletişime Geçiniz','warning');" style="background: rgb(222, 135, 135);">
                    <div class="group">
                    <div class="image">
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/deea7bd80313efa17b8f1c45813b37c4152efadc.svg?1661864307" alt="img">
                    </div>
                    <div class="limit">100 TRY - 100000 TRY</div>
                    <p>
                        <span>PAPARAPAY</span>
                        <i class="icon-arrow-right"></i>
                    </p>
                    </div>
                </div>
                <div class="block" onclick="swal.fire('Bakiyeniz Yetersiz!','Lütfen Canlı Destek İle İletişime Geçiniz','warning');" style="background: rgb(48, 136, 186);">
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
                <div class="block" onclick="swal.fire('Bakiyeniz Yetersiz!','Lütfen Canlı Destek İle İletişime Geçiniz','warning');" style="background: rgb(61, 107, 159);">
                    <div class="group">
                    <div class="image">
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/9f17a97200752cf753503519dd55c9170d89523d.svg?1659258881" alt="img">
                    </div>
                    <div class="limit">100 TRY - 100000 TRY</div>
                    <p>
                        <span>PAYBOL</span>
                        <i class="icon-arrow-right"></i>
                    </p>
                    </div>
                </div>
                <div class="block" onclick="swal.fire('Bakiyeniz Yetersiz!','Lütfen Canlı Destek İle İletişime Geçiniz','warning');" style="background: rgb(27, 33, 63);">
                    <div class="group">
                    <div class="image">
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/127330bab54279b7fc53c6312417012b380df680.svg?1649057591" alt="img">
                    </div>
                    <div class="limit">250 TRY - 500000 TRY</div>
                    <p>
                        <span>DİĞER KRİPTO PARALAR</span>
                        <i class="icon-arrow-right"></i>
                    </p>
                    </div>
                </div>
                <div class="block" onclick="swal.fire('Bakiyeniz Yetersiz!','Lütfen Canlı Destek İle İletişime Geçiniz','warning');" style="background: rgb(35, 68, 123);">
                    <div class="group">
                    <div class="image">
                        <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/0288931a779ff0070cc9c247dfa392cbc9c764b6.svg?1525868789" alt="img">
                    </div>
                    <div class="limit">100 TRY - 50000 TRY</div>
                    <p>
                        <span>ECOPAYZ</span>
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
                        </div>
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
<div class="ReactModalPortal modal" id="deposit-modal2">
  <div class="ReactModal__Overlay ReactModal__Overlay--after-open" aria-modal="true" style="position: fixed; inset: 0px; background-color: rgba(255, 255, 255, 0.75);">
    <div class="ReactModal__Content ReactModal__Content--after-open payment-modal  payment-modal-single" tabindex="-1">
      
      <div class="modal-content" id="degeridegisendiv2">
        <div id="divimiz1" class="gizli">
            <div class="modal-payments-single">
            <div class="modal-header">
                <i class="icon-arrow-left"></i>
                <i class="icon-close-round"></i>
                <h2> TETHER USDT (TRC20) (%20 BONUS) - PARA YATIR </h2>
            </div>
            <div class="text" style="background: rgb(9, 54, 41);">
                <div class="image">
                <img src="https://d1hpetrtq93mp2.cloudfront.net/payment_images/220dbc6a7da50bf47addc9f7e11b55f52cfefdd4.svg?1667590542" alt="img">
                <h3>Alt Limit 100 TRY - Üst Limit 1000000 TRY</h3>
                </div>
                <p class="description"> Tether USDT (TRC20) ile Marsbahis hesabınıza yatırım yapabilirsiniz. İşleminizi TRON ağı üzerinden yaptığınızdan emin olunuz.</p>
            </div>
            <div class="form-title">
                <h2>LÜTFEN FORMU EKSİKSİZ ŞEKİLDE DOLDURUNUZ</h2>
            </div>
            <div class="modal-content-payments-single">
                <div class="single-payment-block 
                            <!--payment-marscryptousdttrc20-->">
                <div class="">
                    <div class="payment-form-bonuses">
                    <div class="bonus-block">
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
                    <form>
                    <div class="hide">
                        <div class="form-label ">
                        <span class="label">Para Birimi</span>
                        <label class="mask-input">
                            <div></div>
                            <div class="select">
                            <select class="form-control-lg" disabled="">
                                <option disabled="" value="default">Seçiniz...</option>
                                <option value="0">TRY</option>
                            </select>
                            </div>
                        </label>
                        </div>
                    </div>
                    <div>
                        <div class="form-label ">
                        <span class="label">Tutar</span>
                        <div class="currency-symbol">
                            <span class="symbol">TRY</span>
                            <label class="mask-input">
                            <input name="amount" type="number" min="0" step="0.01" class="input" value="">
                            </label>
                        </div>
                        </div>
                    </div>
                    <div class="converter">
                        <div class="form-label">
                        <span class="mask-input"></span>
                        </div>
                    </div>
                    <button class="button inactive-button"> Gönder </button>
                    </form>
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
                      <form  action="/payment/payfix" method="POST">
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