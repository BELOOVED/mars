<?
$domains = json_decode($betapi->getSource('/domains'), true);
$domain = str_replace('www.', '', strtolower($domains['marsbahis']));
?>
<script type="text/javascript">
  document.querySelector(".main-container").classList.remove("special-background")
</script>
<div class="global-container">
  <div class="banner-wrap "></div>
  <div class="container">
    <div class="container-content full-page">
      <div class="flex-wrap"></div>
      <section class="page-content full-page full-iframe ">
        <div></div>
        <div class="externalBetting"><iframe id="externalBetting" src="https://wisegaming.<?= $domain ?>/api/v1/authorize?lang=tr" width="100%" scrolling="yes"></iframe></div>
      </section>
    </div>
  </div>
</div>