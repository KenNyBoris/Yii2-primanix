<?php
use app\helpers\UtilityHelper;
?>
<header>
  <img class="bg_header desktop-only" src="/products/images/bg_header.png">
  <img class="bg_header mobile-only" src="/products/images/bg_header_mobile.png">
  <div class="container">
    <div class="header-top pt-15">
      <a href="/products/">
        <img class="logo" src="/products/images/logo.png">
      </a>
      <div class="nav-wrapper">
        <div class="d-flex align-center mr-30">
          <img class="icon_phone" src="/products/images/icon_phone.png">
          <p class="title-5 bebas mt-0"><a href="tel: <?= UtilityHelper::getCustomParameters('SitePhone'); ?>"></a><?= UtilityHelper::getCustomParameters('SitePhone'); ?></p>
        </div>
        <div class="d-flex">
          <img class="security" src="/products/images/security.png">
        </div>
      </div>
    </div>
    <div class="header-main pt-30 pb-60">
      <div class="header-left">
        <img class="medal" src="/products/images/medal.png">
        <h1 class="text-center uppercase">WORLD RECORD NATURAL ENLARGEMENT RESULTS</h1>
        <img class="d-flex gradiant" src="/products/images/gradiant.png">
        <p class="header_title">See why 7 out of 10 adult porn stars take Superior Male and why medical professionals rate Superior Male with the highest grade among all the enlargement pills today</p>
      </div>
      <div class="header-right">
        <img class="header_main desktop-only" src="/products/images/header_main.png">
        <img class="header_main mobile-only" src="/products/images/header_main_mobile.png">
      </div>
    </div>
  </div>
</header>