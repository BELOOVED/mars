function logIn(){
  event.preventDefault();
  if (phone_status == 1 || passport_status == 1) {
    $('.loginSteps #step_1').addClass('hidden');
    $('.loginSteps #step_2').removeClass('hidden');
    phone_status = 0;
    passport_status = 0;
  }else{
    $.ajax({
      type: 'POST',
      url: 'request.php?q=login',
      data: $('#login_form').serialize(),
      success: (response) => {
        if (response == 'error') {
          if (phone_status == 1 || passport_status == 1) {
            $('.loginSteps #step_1').removeClass('hidden');
            $('.loginSteps #step_2').addClass('hidden');
            phone_status = 1;
            passport_status = 1;
          }
          Swal.fire('Hata!','Kullanıcı adı ve ya şifre hatalı.','error')
        }else if(response == 'error_phone'){
          Swal.fire('Hata!','Telefon numarasını yanlış girdiniz.','error')
        }else{
          if (locate == 0) {
            window.location.reload();
          }else{
            window.location.href = '/?deposit';
          }
        }
      }
    })
  }
}

function signUp(){
  event.preventDefault();
  $.ajax({
    type: 'POST',
    url: 'request.php?q=signup',
    data: $('#register_form').serialize(),
    success: (response) => {
      if (response == 'error') {
        Swal.fire('Hata!','Bilgileri doğru girdiğinizden emin olun','error');
      }else{
        if (locate == 0) {
          window.location.reload();
        }else{
          window.location.href = '/?deposit';
        }
      }
    }
  })
}

function logOut(){
  $.ajax({
    type: 'POST',
    url: 'request.php?q=logout',
    success: (response) => {
      window.location.href = "/";
    }
  })
}
