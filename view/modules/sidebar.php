<?php if (!isset($us['id'])) {
  header("location: /");
} ?>
<script type="text/javascript">
  document.querySelector(".main-container").classList.remove("special-background")
</script>
<aside class="sidebar">
  <div class="main-sidebar">
    <nav class="sidebar-menu">
      <ul>
        <li class="no-icon"><a href="/profile"><span>HESAP BİLGİLERİ</span></a></li>
        <li class="no-icon"><a href="/change-password"><span>ŞİFREMİ DEĞİŞTİR</span></a></li>
        <li class="no-icon"><a href="/change-mail"><span>E-POSTA ADRESİ DEĞİŞTİR</span></a></li>
        <li class="no-icon"><a href="javascript:;" onclick="openmodal('deposit-modal')"><span>PARA YATIR</span></a></li>
        <li class="no-icon"><a href="javascript:;" onclick="openmodal('withdraw-modal')"><span>PARA ÇEKİM</span></a></li>
        <li class="no-icon"><a href="/transaction"><span>GEÇMİŞ</span></a></li>
        <li class="no-icon"><a href="/bonus-settings"><span>BONUSLARIM</span></a></li>
        <li class="no-icon"><a href="/attachments"><span>BELGE ONAYI</span></a></li>
      </ul>
    </nav>
  </div>
</aside>