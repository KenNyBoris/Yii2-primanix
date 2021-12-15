<?php
use app\helpers\UtilityHelper;
$this->params['data'] = ['page' => 'thankyou', 'title' => 'Thank you!'];
?>
<div class="upsell-header">
  <img class="upsell_header" src="/products/images/upsell/upsell_header.png">
  <div class="container d-flex flex-direction-column">
    <p class="title white RiftDemiItalic">CALL TOLL FREE <a class="white" href="tel:<?= UtilityHelper::getCustomParameters('SitePhone'); ?>"><?= UtilityHelper::getCustomParameters('SitePhone'); ?></a></p>
  </div>
  <div class="upsell-main position-relative">
    <img class="upsell_main" src="/products/images/upsell/upsell_main.png">
    <div class="container d-flex justify-content-between align-center">
      <a href="/products/">
        <img class="logo" src="/products/images/logo_reverse.png">
      </a>
      <div class="d-flex">
        <span class="white"><a href="/products">HOME</a></span>
        <span class="white"><a href="/products/howitworks">HOW IT WORKS</a></span>
        <span class="white"><a href="/products/faq">FAQ</a></span>
        <span class="white"><a href="/products/guarantee">GUARANTEE</a></span>
        <span class="white last"><a class="last" href="/products/order">ORDER</a></span>
      </div>
    </div>
  </div>
</div>
<section class="main-section wrapper-space">
  <div class="container text-center">
    <h1 class="mb-15 red">Thank you</h1>
    <h2 class="RiftDemiItalic">For Your Order</h2>
  </div>
</section>
<section class="footer">
  <div class="bg-black section-space">
    <div class="container d-flex flex-direction-column">
      <div class="footer-top d-flex justify-content-between align-center">
        <div class="d-flex flex-direction-column">
          <a href="/products/superior/">
            <img class="logo pt-60" src="/products/images/logo_reverse.png">
          </a>
          <div class="footer-nav pb-30">
            <span class="white"><a href="/products/dmca">DMCA</a></span>
            <span class="white"><a href="/products/terms">Terms & Conditions</a></span>
            <span class="white"><a href="/products/privacy">Privacy Policy</a></span>
            <span class="white last"><a href="/products/sitemap">sitemap</a></span>
          </div>
        </div>
        <div class="footer-nav pt-60">
          <span class="white"><a href="/products">HOME</a></span>
          <span class="white"><a href="/products/howitworks">HOW IT WORKS</a></span>
          <span class="white"><a href="/products/faq">FAQ</a></span>
          <span class="white"><a href="/products/guarantee">GUARANTEE</a></span>
          <span class="white last"><a href="/products/order">ORDER</a></span>
        </div>
      </div>
      <div class="footer-bottom d-flex justify-content-between">
        <span>Superior Male © 2021. All Rights Reserved</span>
        <img src="/products/images/upsell/upsell-payment.png" class="img-fluid">
      </div>
  </div>
</section>