$(document).ready(function () {
  $(".header-content > .menu-icon").on("click", function () {
    $(".burger-menu, .burger-menu-overlay").addClass("opened");
  });
  $(".burger-menu-overlay").on("click", function () {
    $(".burger-menu, .burger-menu-overlay").removeClass("opened");
  });
});

function openmodal(val) {
  closemodal();
  $(".modal#" + val).addClass("active");
}

function closemodal() {
  $(".modal").removeClass("active");
}

function loginorpay() {
  if (logged) {
    openmodal("deposit-modal");
  } else {
    openmodal("signin-modal");
  }
}

function loginoralert() {
  if (logged) {
    Swal.fire(
      "Yetersiz Bakiye",
      "Lüften bakiyenizi yükselttikten sonra tekrar deneyin",
      "warning"
    );
  } else {
    Swal.fire("", "Lüften hesabınıza giriş yapınız", "warning");
  }
}

function openPay(val) {
  openmodal("deposit-in-modal");
  $("#payment_frame").attr("src", `${$("#payment_frame").data("src")}/${val}`);
  $("#payment_title").html(val);
}

function openzopim() {
  $zopim.livechat.window.show();
}
