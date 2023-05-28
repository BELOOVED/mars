<?
$domains = json_decode($betapi->getSource('/domains'), true);
$domain = str_replace('www.', '', strtolower($domains['marsbahis']));
?>
<div class="global-container ">
  <div class="container">
    <div class="container-content">
      <div class="flex-wrap"></div>
      <section class="page-content full-page full-iframe ">
        <div></div>
        <div class="wisegaming">
          <div id="wisegaming_iframe">
            <div class="wiseGaming"><iframe src="https://wisegaming.<?=$main['sitelink'] ?>/api/v1/authorize?lang=tr" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe></div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>