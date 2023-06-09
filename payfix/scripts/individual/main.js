$(document).ready(function () {
    var apiUrl = '/api/api';

    $.ajaxSetup({
        beforeSend: function(xhr) {
            $('form button').prop('disabled', true);
            $('form').addClass('d-none');
            $('#loading').removeClass('d-none');
        },
        done: function (xhr) {
            $('#loading').addClass('d-none');
            $('form button').prop('disabled', false);
        },
        success: function (xhr) {
            $('#loading').addClass('d-none');
            $('form button').prop('disabled', false);
        },
        error: function (xhr) {
            $('#loading').addClass('d-none');
            $('form button').prop('disabled', false);
        },
    });

    if (getURLParameter('c')) {
        let url = apiUrl + "/getUserInfo/" + getURLParameter('c');
            $.ajax({
                method: 'GET',
                url: url,
                crossDomain: true,
                dataType: "json",
                contentType: 'application/x-www-form-urlencoded',
                xhrFields: {
                    withCredentials: true
                },
                beforeSend: function(xhr) {

                },
                success: function (res) {
                    let data = JSON.parse(res.data);
                    $('#enduser_username').val(data.enduser_username).parent().addClass('d-none');
                    if (data.enduser_fullname !== null && data.enduser_fullname !== "")
                        $('#sender_name').val(data.enduser_fullname).prop('disabled', true).parent().addClass('d-none');
                    $('#amount').val(parseFloat(data.amount).toFixed(2));
                    $('#enduser_username').prop('disabled', true);
                    $('#amount').prop('disabled', true);
                    Cmt.hash = data.hash;
                }
            })
            .fail(function (res, textStatus, errorThrown) {
                alert("Teknik bir hata oluştu. Lütfen tekrar deneyiniz.");
            });
    }

    $('#amount').on('keyup', function () {
        let val = parseFloat(this.value);
        if (val > 0) {
            $('.amount-info').show();
            $('.amount-info').html(
                '<p>Ana para : ' + val + ' TL</p>' +
                '<p>PayFIX İşlem Bedeli : 0 TL</p>' +
                '<p>PayFIX Hesabınızda olması gereken bakiye : <strong>' + (val) + ' TL</strong></p>' +
                '<p><strong>Bu işlem için hiç bir işlem bedeli ödemeyeceksiniz.</strong></p>' 
            );
        } else {
            $('.amount-info').hide();
        }
    });


    $('#step1Form').on('submit', async function (e) {
        e.preventDefault();

        let sender_name = $('#sender_name').val();
        let login = $('#login').val();
        let amount = $('#amount').val();
        let password = $('#password').val();
        let enduser_username = $('#enduser_username').val();

        if (login.length == 0 || password.length == 0 || amount.length == 0 || enduser_username.length == 0) {
            $(this).find('button').prop('disabled', false);
            showAlert('danger', 'Lütfen gerekli alanları doldurunuz.');        
            return;
        }

        let url = apiUrl + '/new-deposit/step1';
        let data = {
            sender_name: sender_name,
            login: login,
            amount: amount,
            password: password,
            enduser_username: enduser_username,
            extra: 'asd',
            hash: Cmt.hash,
        };
        $.ajax({
            method: 'POST',
            url: url,
            crossDomain: true,
            dataType: "json",
            contentType: 'application/x-www-form-urlencoded',
            data: data,
            xhrFields: {
                withCredentials: true
            },
            success: function (res) {

                if (res.status == 'OK') {
                    hideAlert();
                    if (res.status != 'OK') {
                        showAlert('danger', res.message);
                    }
                    Cmt.token = res.data.token;
                    hideAllForms();
                    showAutoStep(2);

                } else {
                    showAlert('danger', res.message);
                }
            },
        })
          .fail(function(res) {

              if (res.responseJSON.status && res.responseJSON.status == 'ERR' && res.responseJSON.errors) {                  
                    showAlert('danger', res.responseJSON.errors[Object.keys(res.responseJSON.errors)[0]]);
              }
            
            $('#step1Form').find('button').prop('disabled', false);
          })
          .always(function() {
            $('#step1Form').find('button').prop('disabled', false);
          });
    });

    $('#step2Form').on('submit', async function (e) {
        e.preventDefault();
        $('form button').prop('disabled', true);

        let sms_code = $('#code1').val();
        let amount = $('#amount').val();
        let enduser_username = $('#enduser_username').val();

        if (sms_code.length == 0 || amount.length == 0 || enduser_username.length == 0) {
            $(this).find('button').prop('disabled', false);
            showAlert('danger', 'Lütfen gerekli alanları doldurunuz.');
            return;
        }

        let url = apiUrl + '/' + 'new-deposit/step2';
        let data = {
            amount: amount,
            sms_code: sms_code,
            enduser_username: enduser_username,
            token: Cmt.token,
            hash: Cmt.hash,
        };
        $.ajax({
            method: 'POST',
            url: url,
            crossDomain: true,
            dataType: "json",
            contentType: 'application/x-www-form-urlencoded',
            data: data,
            xhrFields: {
                withCredentials: true
            },
            success: function (res) {

                if (res.status == 'OK') {
                    hideAlert();
                    if (res.status != 'OK') {
                        showAlert('danger', res.message);
                    }

                    hideAllForms();
                    showAutoStep(3);
                } else {
                    showAlert('danger', res.message);
                }
            },
        }).fail(function(res) {

                if (res.responseJSON.status && res.responseJSON.status == 'ERR' && res.responseJSON.errors) {
                    showAlert('danger', res.responseJSON.errors[Object.keys(res.responseJSON.errors)[0]]);
                }

                $('#step2Form').find('button').prop('disabled', false);
            })
            .always(function() {
                $('#step2Form').find('button').prop('disabled', false);
            });
    });
});

