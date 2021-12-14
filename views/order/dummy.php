<?php 
use app\helpers\UtilityHelper;
?>
<link rel="stylesheet" href="/css/order.css">
<section class="order-section">
  <form action="/order/make-order" data-toggle="validator" method="POST" id="orderForm">
    <input type="hidden" name="OrderForm[keyword]" value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
    <input type="hidden" name="OrderForm[adgroupid]" value="<?= isset($_GET['adgroupid']) ? $_GET['adgroupid'] : ''; ?>">
    <input type="hidden" name="OrderForm[utm_campaign]" value="<?= isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : ''; ?>">
    <input type="hidden" name="OrderForm[utm_content]" value="<?= isset($_GET['utm_content']) ? $_GET['utm_content'] : ''; ?>">
    <input type="hidden" name="order_page" value="order">

    <!-- Product Option -->
    <!-- <section class="product-option">
      <div class="container">
        <h2>Scroll Down For order Options</h2>
        <div class="main">
          <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-10 col-lg-4 order-lg-2 mb-4 mb-lg-0">
              <div class="card">
                <input type="radio" name="product_id" id="pmx_6_month" value="pmx_6_month" class="form-check-input input-radio" checked>
                <label for="pmx_6_month" class="pmx-6-month">
                  <img src="/images/order/mb-placeholder.png" class="img-fluid d-lg-none" alt="">
                  <img src="/images/order/dk-placeholder.png" class="img-fluid d-none d-lg-block" alt="">
                </label>
              </div>
            </div>
            <div class="col-12 col-sm-10 col-lg-4 order-lg-1 mb-4 mb-lg-0">
              <div class="card">
                <input type="radio" name="product_id" id="pmx_3_month" value="pmx_3_month" class="form-check-input input-radio" >
                <label for="pmx_3_month" class="pmx-3-month">
                  <img src="/images/order/mb-placeholder.png" class="img-fluid d-lg-none" alt="">
                  <img src="/images/order/dk-placeholder.png" class="img-fluid d-none d-lg-block" alt="">
                </label>
              </div>
            </div>
            <div class="col-12 col-sm-10 col-lg-4 order-lg-3">
              <div class="card">
                <input type="radio" name="product_id" id="pmx_1_month" value="pmx_1_month" class="form-check-input input-radio">
                <label for="pmx_1_month" class="pmx-1-month">
                  <img src="/images/order/mb-placeholder.png" class="img-fluid d-lg-none" alt="">
                  <img src="/images/order/dk-placeholder.png" class="img-fluid d-none d-lg-block" alt="">
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Order Steps -->
    <section class="order-steps">
      <div class="container">
        <!-- Order Step 1 -->
        <div id="stepShippingInfo" class="steps first mb-5">
          <div class="panel">
            <div class="head">
              <h3>Step 1: Enter your shipping information</h3>
            </div>
            <div class="body">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="firstName" name="OrderForm[firstName]" class="form-control" placeholder="First Name" pattern="^[a-zA-Z \s]*$" data-error="Please use only letters" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="lastName" name="OrderForm[lastName]" placeholder="Last Name" class="form-control" pattern="^[a-zA-Z \s]*$" data-error="Please use only letters" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" name="OrderForm[email]" placeholder="Email Address" id="email" class="form-control" data-error="Email address is invalid" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="OrderForm[phone]" id="phone" class="form-control" pattern="^[0-9]*$" minlength="10" maxlength="16" placeholder="Phone Number" data-error="Invalid Phone Number" required="">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="shippingAddress1" class="form-control" name="OrderForm[shippingAddress1]" placeholder="Street Address" pattern="^[a-zA-Z0-9 \s]*$" data-error="Only letters and numbers please." required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="OrderForm[shippingCity]" class="form-control" id="shippingCity" placeholder="City" pattern="^[a-zA-Z0-9 \s]*$" data-error="Invalid City name." required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3">
                  <div class="form-group">
                    <select id="shippingCountry" name="OrderForm[shippingCountry]" class="form-select" required>
                      <option value="US" selected>United States</option>
                      <option value="CA">Canada</option>
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 pl-md-0">
                  <div class="form-group">
                    <div id="shippingStateContainer"></div>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="shippingZip" name="OrderForm[shippingZip]" class="form-control" minlength="5" placeholder="Zip Code" pattern="^[a-zA-Z0-9 \s]*$" maxlength="10" data-error="Invalid ZIP code." required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12 text-center">
                  <button id="btnSubmitStepOne" type="button" class="pmx-button mt-3">CONTINUE TO STEP 2</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Order Step 2 -->
        <div id="stepPaymentOption" class="steps second d-none mb-5">
          <div class="panel">
            <div class="head">
              <h3>Step 2: Choose your payment method</h3>
            </div>
            <div class="body">
              <div class="payment-method">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="OrderForm[payment_processor]" id="radioCreditCard" value="credit_card">
                  <label class="form-check-label" for="radioCreditCard">
                    <i class="custom-radio"></i>
                    <span>Pay with Credit Card</span>
                    <img src="images/credit-cards.png" class="img-fluid">
                  </label>
                </div>
                <div class="form-check mb-0">
                  <input class="form-check-input" type="radio" name="OrderForm[payment_processor]" id="radioPaypal" value="paypal">
                  <label class="form-check-label" for="radioPaypal">
                    <i class="custom-radio"></i>
                    <span>Pay with Paypal</span>
                    <img src="images/paypal-logo.png" class="img-fluid">
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Order Step 3 -->
        <div id="stepCheckout" class="steps third d-none">
          <div class="panel">
            <div class="head">
              <h3>Step 3: Enter credit card information</h3>
            </div>
            <div class="body">
              <div id="creditCardInfo">
                <input type="hidden" name="OrderForm[creditCardType]" id="creditCardType" value="">
                <input type="hidden" id="expirationDate" name="OrderForm[expirationDate]" value="">

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group cc-number">
                      <input type="text" class="form-control" id="creditCardNumber" name="OrderForm[cardNumber]" pattern="^[0-9 -]*$" minlength="15" maxlength="20" placeholder="Card Number" data-error="Please check card number." data-validate="true" required>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <select id="creditCardExpireMonth" name="OrderForm[fields_expmonth]" data-error="Month Required" class="form-select" required>
                        <option value="" disabled selected>Month</option>
                        <?php for($m = 1; $m <= 12; $m++): $m = str_pad($m, 2, "0", STR_PAD_LEFT); ?>
                          <option value="<?=$m;?>"><?=$m;?></option>
                        <?php endfor; ?>
                      </select>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <select id="creditCardExpireYear" name="OrderForm[fields_expyear]" data-error="Year Required" class="form-select" required>
                        <option value="" disabled selected>Year</option>
                        <?php 
                          $year = date('y'); 
                          $yearInt = $year + 15;
                        for(;$year < $yearInt; $year++): ?>
                            <option value="<?=$year;?>">20<?=$year;?></option>
                        <?php endfor; ?>
                      </select>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="CVV" name="OrderForm[cvv]" pattern="[0-9]*" minlength="3" maxlength="4" placeholder="Security Code" data-error="Please enter 3-4 digits code" data-validate="true" required="">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
              </div>
              <p class="terms-text" id="termsContainer">Subscription Terms and Conditions: For your convenience and to maximize your results you will be enrolled in our auto ship program and in <span class="month"></span> days of placing your order we will automatically send you a fresh <span class="month"></span> supply of Primanix Pro beginning in <span class="day"></span> days and every <span class="month"></span> thereafter for just $<span class="amount"></span> (free shipping), charged to the card you provide today. You may cancel anytime by emailing <a href="mailto:<?= UtilityHelper::getCustomParameters('SiteEmail'); ?>"><?= UtilityHelper::getCustomParameters('SiteEmail'); ?></a> or calling <a href="tel:<?= UtilityHelper::getCustomParameters('SitePhone'); ?>"><?= UtilityHelper::getCustomParameters('SitePhone'); ?></a>. No future commitments, no hassles. Cancel any time. Click the checkbox to agree to the <a href="/terms"> Subscription Terms and Conditions.</a>.</p>
          
              <div class="form-group" id="checkForm">
                <div class="form-check mb-3">
                  <input type="checkbox" name="OrderForm[terms]" id="checkboxesTerms" value="1" required checked>
                  <label class="form-check-label" for="checkboxesTerms">
                    <i class="custom-check"></i>
                    <span>Click the checkbox to agree to the&nbsp; <a href="/terms"> Subscription Terms and Conditions.</a></span>
                  </label>
                </div>
                <div class="help-block with-errors"></div>
              </div>
              <div class="text-center pt-2">
                <button type="button" class="pmx-button mt-3" id="btnSubmitOrder">COMPLETE MY ORDER</button> 
                <div id="paypalContainer" class="text-center"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>
  <!-- Modal -->
  <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div id="orderModalBody" class="p-4"></div>         
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <div class="header-top">
  <div class="container">
    <div class="nav-wrapper">
      <div class="d-flex mr-30">
        <p class="description white">Call us at <span class="bold">1234-567-890</span></p>
      </div>
      <div class="d-flex">
        <img class="security" src="./images/order/security.png">
      </div>
    </div>
  </div>
</div>
<div class="header-bottom">
  <div class="container d-flex justify-content-between align-center">
    <a href="/">
      <img class="logo" src="./images/order/logo.png">
    </a>
    <button class="cta_btn">Order Now</button>
  </div>
</div>
<div class="header-main d-flex align-center flex-direction-column section-space">
  <div class="container">
    <h1 class="text-center uppercase">ORDER PRIMANIX</h1>
    <p class="header_title bold grey mt-0">Amazing Results Guaranteed!</p>
    <h2 class="bold">Get the SIZE and SEX DRIVE<br class="desktop-only"> you want in just 15 days!</h2>
    <div class="d-flex pt-30">
      <img class="header_main" src="./images/order/header_main.png">
    </div>
  </div>
</div> -->
<div class="main-wrapper">
  <!-- <div class="wrapper-1 bg-white pt-120">
    <div class="container text-center">
      <p class="title bold">SEE WHAT YOU CAN <br>ACHIEVE WITH PRIMANIX</p>
      <p class="header_title mt-0 bold grey">Get a preview of what you could have in the<br class="desktop-only"> next coming weeks!</p>
      <p class="title bold red">YOU COULD BE NEXT!</p>
      <div class="verified-section pt-30">
        <div class="verified_pane pt-15">
          <div class="verified d-flex align-center pl-15 pr-15">
            <img class="badge" src="./images/order/badge.png">
            <span class="badge_text light">Verified Customer</span>
          </div>
          <p class="verified_text grey text-left pl-15 pr-15">“For the first time in my life, I feel like a stud. Getting a bigger erection really does some amazing things to your life!”</p>
          <div class="verified_user grey d-flex align-center bg-lightgrey">
            <img class="mr-15" src="./images/order/verified_user.png">
            <span class="grey">Liam P. 38 years old.</span>
          </div>
        </div>
        <div class="verified_pane pt-15">
          <div class="verified d-flex align-center pl-15 pr-15">
            <img class="badge" src="./images/order/badge.png">
            <span class="badge_text light">Verified Customer</span>
          </div>
          <p class="verified_text grey text-left pl-15 pr-15">“Gained so much in just 5 weeks of taking Primanix. My erections are way thicker and longer now!”</p>
          <div class="verified_user grey d-flex align-center bg-lightgrey">
            <img class="mr-15" src="./images/order/verified_user.png">
            <span class="grey">Tim C. 29 years old.</span>
          </div>
        </div>
        <div class="verified_pane pt-15">
          <div class="verified d-flex align-center pl-15 pr-15">
            <img class="badge" src="./images/order/badge.png">
            <span class="badge_text light">Verified Customer</span>
          </div>
          <p class="verified_text grey text-left pl-15 pr-15">My girlfriend got me Primanix as a prank. Well, this prank is now 8 inches long and she doesn’t know what to do about it!”</p>
          <div class="verified_user grey d-flex align-center bg-lightgrey">
            <img class="mr-15" src="./images/order/verified_user.png">
            <span class="grey">Mark H. 32 years old.</span>
          </div>
        </div>
        <div class="verified_pane pt-15">
          <div class="verified d-flex align-center pl-15 pr-15">
            <img class="badge" src="./images/order/badge.png">
            <span class="badge_text light">Verified Customer</span>
          </div>
          <p class="verified_text grey text-left pl-15 pr-15">“Only had to wait for a few days for it to really kick in. Great sex drive and size with Primanix!”</p>
          <div class="verified_user grey d-flex align-center bg-lightgrey">
            <img class="mr-15" src="./images/order/verified_user.png">
            <span class="grey">Walt N. 43 years old.</span>
          </div>
        </div>
        <div class="verified_pane pt-15">
          <div class="verified d-flex align-center pl-15 pr-15">
            <img class="badge" src="./images/order/badge.png">
            <span class="badge_text light">Verified Customer</span>
          </div>
          <p class="verified_text grey text-left pl-15 pr-15">“Primanix showed me that I’m not too old to have fun, especially when my wife enjoys the fact that I’m now 9 inches long.”</p>
          <div class="verified_user grey d-flex align-center bg-lightgrey">
            <img class="mr-15" src="./images/order/verified_user.png">
            <span class="grey">Jeff S. 45 years old.</span>
          </div>
        </div>
        <div class="verified_pane pt-15">
          <div class="verified d-flex align-center pl-15 pr-15">
            <img class="badge" src="./images/order/badge.png">
            <span class="badge_text light">Verified Customer</span>
          </div>
          <p class="verified_text grey text-left pl-15 pr-15">“Primanix is definitely worth more than what you pay for. Just the size boost makes it all worth it!”</p>
          <div class="verified_user grey d-flex align-center bg-lightgrey">
            <img class="mr-15" src="./images/order/verified_user.png">
            <span class="grey">Kevin T. 33 years old.</span>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="gradiant text-center pt-60 pb-60">
        <img src="./images/order/gradiant.png">
      </div>
      <div class="intro-section">
        <p class="title bold">Primanix is the #1 Rated<br class="desktop-only"> Male Enhancement Formula<br> in the World</p>
        <div class="intro_section id-flex justify-content-center align-center section-space">
          <img class="bottle" src="./images/order/bottle.png">
          <div class="grid-wrapper">
            <div class="grid_pane">
              <img class="check" src="./images/order/check.png">
              <p class="grid_des">Unparalleled Penis Growth Formula</p>
            </div>
            <div class="grid_pane">
              <img class="check" src="./images/order/check.png">
              <p class="grid_des">Intense Libido and Sex Drive</p>
            </div>
            <div class="grid_pane">
              <img class="check" src="./images/order/check.png">
              <p class="grid_des">Endless Sexual Endurance</p>
            </div>
            <div class="grid_pane">
              <img class="check" src="./images/order/check.png">
              <p class="grid_des">Exclusive Ingredients and Premium Extracts</p>
            </div>
            <div class="grid_pane">
              <img class="check" src="./images/order/check.png">
              <p class="grid_des">100% SATISFACTION GUARANTEED</p>
            </div>
          </div>
        </div>
        <p class="title-2 semibold">What could you buy<br class="mobile-only"> with $2 a day?</p>
      </div>
    </div>
  </div>
  <div class="wrapper-2 section-space">
    <img class="bg_wrapper2" src="./images/order/bg_wrapper2.png">
    <div class="container">
      <p class="title-3 bold text-center white mt-0 mb-30">COST PER DAY</p>
      <div class="cost_pane">
        <h3 class="grey medium mr-15 mt-15 mb-15 left">FAST FOOD</h3>
        <img class="first" src="./images/order/cost_1.png">
        <h3 class="white medium ml-5 mt-15 mb-15">$10.00</h3>
      </div>
      <div class="cost_pane">
        <h3 class="grey medium mr-15 mt-15 mb-15 left">LARGE CAFFE LATTE</h3>
        <img src="./images/order/cost_2.png">
        <h3 class="white medium ml-15 mt-15 mb-15">$4.95</h3>
      </div>
      <div class="cost_pane">
        <h3 class="white medium mr-15 mt-15 mb-15 text-right left">PRIMANIX</h3>
        <img src="./images/order/cost_3.png">
        <h3 class="white medium ml-15 mt-15 mb-15">$2.66</h3>
      </div>
    </div>
  </div>
  <div class="wrapper-3 wrapper-space">
    <div class="intro-section">
      <p class="title bold text-center">REAL MEN WANTS<br> REAL RESULTS</p>
      <p class="container text-center pt-30 pb-30">We believe that you shouldn’t pay for anything that does not work. That’s why we’re covering every purchase of Primanix with our industry - leading 100% money - back guarantee. If you’re not completely satisfied with your results, just call us and we’ll refund 100% of the purchase price!</p>
      <div class="d-flex justify-content-center align-center">
        <img class="guarantee_money" src="./images/order/guarantee_money.png">
        <div class="grid-wrapper">
          <div class="grid_pane">
            <img class="check" src="./images/order/check.png">
            <p class="grid_des">RISK - FREE RESULTS</p>
          </div>
          <div class="grid_pane">
            <img class="check" src="./images/order/check.png">
            <p class="grid_des">PROFESSIONAL CUSTOMER SUPPORT</p>
          </div>
          <div class="grid_pane">
            <img class="check" src="./images/order/check.png">
            <p class="grid_des">100% SATISFACTION GUARANTEED</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper-4 bg-white wrapper-space">
    <p class="title-2 bold text-center mt-0 mb-0">THE ONLY WAY TO <br>GAIN SIZE AND PERFORMANCE</p>
    <h3 class="header_title bold grey mt-0">Experience the TRUE POTENTIAL of Primanix</h3>
    <div class="container d-flex justify-content-center align-center">
      <img class="chart" src="./images/order/chart-1.png">
      <img class="chart" src="./images/order/chart-2.png">
    </div>
  </div>
  <div class="wrapper-5 pt-120 pb-60">
    <p class="title-2 bold text-center mt-0 mb-0">TAKE PRIMARIX TO THE<br class="mobile-only"> HIGHEST LEVEL</p>
    <h3 class="header_title bold grey mt-0">See how much your life can change with Primanix!</h3>
    <div class="container">
      <p class="description bold pt-30 mb-0">PHASE 1: SUPERIOR SEX DRIVE</p>
      <p class="mt-0">Primanix contains fast-acting ingredients that allow you to enjoy a surge in libido and energy that powers your sexual performance. Experience great pleasure and satisfaction, and give your sex partner the most mind-blowing orgasms that they will never forget!</p>
      <p class="description bold pt-30 mb-0">PHASE 2: INTENSE ERECTION BOOST</p>
      <p class="mt-0">Primanix contains vasodilators that work directly with sex drive boosters that will give you the strongest and hardest erections you’ve ever had in your life. Never worry about having soft or weak erections again!</p>
      <p class="description bold pt-30 mb-0">PHASE 3: PEAK ERECTION SIZE ENHANCEMENT</p>
      <p class="mt-0">As Primanix boosts your erection quality, your penile tissue becomes more adaptable, and this allows it to extend beyond your peak erection size. Gain a visible and noticeable erection that she will definitely FEEL!</p>
      <p class="description bold pt-30 mb-0">PHASE 4: PERMANENT SIZE GAIN</p>
      <p class="mt-0">Primanix allows you to continuously extend your erect penis length and girth, and this allows the body to promote penile tissue growth. As you continue taking Primanix daily, you will experience a steady growth of your erect and flaccid penis length and girth!</p>
      <div class="d-flex justify-content-center">
        <img class="flag" src="./images/order/flag.png">
      </div>
    </div>
  </div> -->
  <form action="/order/make-order" data-toggle="validator" method="POST" id="orderForm">
    <input type="hidden" name="OrderForm[keyword]" value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
    <input type="hidden" name="OrderForm[adgroupid]" value="<?= isset($_GET['adgroupid']) ? $_GET['adgroupid'] : ''; ?>">
    <input type="hidden" name="OrderForm[utm_campaign]" value="<?= isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : ''; ?>">
    <input type="hidden" name="OrderForm[utm_content]" value="<?= isset($_GET['utm_content']) ? $_GET['utm_content'] : ''; ?>">
    <input type="hidden" name="order_page" value="order">

    <div class="wrapper-6 bg-white pt-120 pb-60">
      <p class="title-2 bold text-center mt-0 mb-0">SELECT AN OPTION BELOW</p>
      <h3 class="header_title bold grey">Want the BEST results?<br> 80% of men choose the 6 Months Supply</h3>
      <div class="container d-flex flex-direction-column align-center">
        <div class="d-block mb-30">
          <div class="card">
            <input type="radio" name="product_id" id="pmx_1_month" value="pmx_1_month" class="form-check-input input-radio">
            <label for="pmx_1_month" class="pmx-1-month">
              <img src="/images/order/mb-placeholder.png" class="img-fluid" alt="">
            </label>
          </div>
        </div>
        <div class="d-block mb-30">
          <div class="card">
            <input type="radio" name="product_id" id="pmx_3_month" value="pmx_3_month" class="form-check-input input-radio" >
            <label for="pmx_3_month" class="pmx-3-month">
              <img src="/images/order/mb-placeholder.png" class="img-fluid" alt="">
            </label>
          </div>
        </div>
        <div class="d-block mb-30">
          <div class="card">
            <input type="radio" name="product_id" id="pmx_6_month" value="pmx_6_month" class="form-check-input input-radio" checked>
            <label for="pmx_6_month" class="pmx-6-month">
              <img src="/images/order/mb-placeholder.png" class="img-fluide" alt="">
            </label>
          </div>
        </div>
      </div>
    </div>

    <div class="wrapper-7 section-space">
      <p class="title-2 bold text-center mt-0 mb-0">START YOUR ORDER BELOW</p>
      <div class="shipping-form">
        <div class="container">
          <div id="stepShippingInfo" class="steps first step-1 pb-60">
            <div class="step_pane d-flex pt-30 pb-30">
              <p class="title-2 bold">Step 1</p>
              <p class="header_title medium">Shiping Information</p>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group field-orderform-firstname required">
                  <label for="orderform-firstname"><span class="red">*</span> First Name:</label>
                  <input type="text" id="orderform-firstname" class="form-control is-invalid" name="OrderForm[firstName]" placeholder="" aria-required="true" aria-invalid="true">
                  <div class="invalid-feedback"><span class="red">*</span> First Name: cannot be blank.</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group field-orderform-lastname required">
                  <label for="orderform-lastname"><span class="red">*</span> Last Name:</label>
                  <input type="text" id="orderform-lastname" class="form-control is-invalid" name="OrderForm[lastName]" placeholder="" aria-required="true" aria-invalid="true">
                  <div class="invalid-feedback"><span class="red">*</span> Last Name: cannot be blank.</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group field-orderform-email required">
                  <label for="orderform-email"><span class="red">*</span> Email:</label>
                  <input type="email" id="orderform-email" class="form-control is-invalid" name="OrderForm[email]" placeholder="" aria-required="true" aria-invalid="true">
                  <div class="invalid-feedback"><span class="red">*</span> Email: cannot be blank.</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group field-orderform-phone required">
                  <label for="orderform-phone"><span class="red">*</span> Phone:</label>
                  <input type="tel" id="orderform-phone" class="form-control is-invalid" name="OrderForm[phone]" maxlength="16" placeholder="" aria-required="true" aria-invalid="true">
                  <div class="invalid-feedback"><span class="red">*</span> Phone: cannot be blank.</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group field-orderform-shippingaddress1 required">
                  <label for="orderform-shippingaddress1"><span class="red">*</span> Shipping Address:</label>
                  <input type="text" id="orderform-shippingaddress1" class="form-control is-invalid" name="OrderForm[shippingAddress1]" placeholder="" aria-required="true" aria-invalid="true">
                  <div class="invalid-feedback"><span class="red">*</span> Shipping Address: cannot be blank.</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group field-orderform-shippingcity required">
                  <label for="orderform-shippingcity"><span class="red">*</span> City</label>
                  <input type="text" id="orderform-shippingcity" class="form-control is-invalid" name="OrderForm[shippingCity]" placeholder="" aria-required="true" aria-invalid="true">
                  <div class="invalid-feedback"><span class="red">*</span> City cannot be blank.</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group field-orderform-shippingcountry required">
                  <label for="orderform-shippingcountry"><span class="red">*</span> Country</label>
                  <select id="orderform-shippingcountry" class="form-control is-valid" name="OrderForm[shippingCountry]" aria-required="true" aria-invalid="false">
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                  </select>
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="form-group col-md-6 field-orderform-shippingstate required">
                    <label for="orderform-shippingstate"><span class="red">*</span> State / Province</label>
                    <select id="orderform-shippingstate" class="form-control is-invalid" name="OrderForm[shippingState]" aria-required="true" aria-invalid="true">
                      <option value="">Select State / Province</option>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DC">District of Columbia</option>
                      <option value="DE">Delaware</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </select>
                    <div class="invalid-feedback"><span class="red">*</span> State / Province cannot be blank.</div>
                  </div>
                  <div class="form-group col-md-6 field-orderform-shippingzip required">
                    <label for="orderform-shippingzip"><span class="red">*</span> Zip Code:</label>
                    <input type="text" id="orderform-shippingzip" class="form-control is-invalid" name="OrderForm[shippingZip]" placeholder="" aria-required="true" aria-invalid="true">
                    <div class="invalid-feedback"><span class="red">*</span> Zip Code: cannot be blank.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center pt-30 pb-60">
              <button class="shipping_btn semibold">Continue to step 2</button>
            </div>
            <p class="disclaimer_text text-center">Disclaimer: These statements have not been evaluatThese statements have not been evaluated by the Food<br class="desktop-only"> and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.ed by the<br class="desktop-only"> Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.</p>
          </div>
          <div class="step-2 pb-30">
            <div class="step_pane d-flex pb-30">
              <p class="title-2 bold">Step 1</p>
              <p class="header_title medium">Shiping Information</p>
            </div>
            <div class="form-group field-orderform-payment_processor required pt-15">
              <div class="custom-radio d-flex align-center">
                <input type="radio" class="custom-control-input" name="OrderForm[payment_processor]" value="credit_card" checked="">
                <label class="custom-control-label d-flex align-center ml-5">Pay with Credit or Debit Card <img src="./images/order/credit_card.png" class="img-fluid ml-30"></label>
              </div>
              <div class="custom-radio pt-15 d-flex align-center">
                <input type="radio" class="custom-control-input" name="OrderForm[payment_processor]" value="paypal">
                <label class="custom-control-label d-flex align-center ml-5">Pay with Paypal <img src="./images/order/paypal_option.png" class="img-fluid ml-30"></label>
                <div class="invalid-feedback"></div>
              </div>
            </div>
          </div>
          <div class="step-3">
            <div class="step_pane d-flex pb-30">
              <p class="title-2 bold">Step 3</p>
              <p class="header_title medium">Enter Credit Card Information</p>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group field-orderform-cardnumber required">
                  <label for="orderform-cardnumber"><span class="red">*</span>  Card Number</label>
                  <input type="text" id="orderform-cardnumber" class="form-control is-invalid" name="OrderForm[cardnumber]" placeholder="" aria-required="true" aria-invalid="true">
                  <div class="invalid-feedback"><span class="red">*</span> Card Number: cannot be blank.</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="orderform-expirationdate"><span class="red">*</span>  Expiration Date</label>
                    <div class="row">
                      <div class="form-group col-md-6 field-orderform-expirationdate required">
                        <select id="orderform-expirationdate" class="form-control is-invalid" name="OrderForm[expirationdate]" aria-required="true" aria-invalid="true">
                          <option value="">Month</option>
                        </select>
                        <div class="invalid-feedback"><span class="red">*</span> State / Province cannot be blank.</div>
                      </div>
                      <div class="form-group col-md-6 field-orderform-expirationyear required">
                        <select id="orderform-expirationyear" class="form-control is-invalid" name="OrderForm[expirationyear]" aria-required="true" aria-invalid="true">
                          <option value="">Year</option>
                        </select>
                        <div class="invalid-feedback"><span class="red">*</span> State / Province cannot be blank.</div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6 field-orderform-securitycode required">
                    <label for="orderform-securitycode"><span class="red">*</span>  Security Code</label>
                    <input type="text" id="orderform-securitycode" class="form-control is-invalid" name="OrderForm[securitycode]" placeholder="" aria-required="true" aria-invalid="true">
                    <div class="invalid-feedback"><span class="red">*</span> Zip Code: cannot be blank.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="terms_pane d-flex align-center mt-15 mb-15">
              <input class="" type="checkbox">
              <p class="mt-15">Click the checkbox to agree to the <span class="medium blue">Subscription Terms and Conditions.</span></p>
            </div>
            <div class="disclaimer_pane">
              <p class="disclaimer_text pb-30">Subscription Terms and Conditions: For your convenience and to maximize your results you will be enrolled in our auto ship program and in 21 days of placing your order we will automatically send you a fresh one-month supply beginning in 28 days and every one-month thereafter for just $69.95 (free shipping), charged to the card you provide today. You may cancel anytime by emailing support@abcd.com or calling 1-123-456-789. No future commitments, no hassles. Cancel any time.</p>
            </div>
            <div class="d-flex justify-content-center pt-30 pb-60">
              <button class="shipping_btn semibold">COMPLETE MY ORDER!</button>
            </div>
            <p class="disclaimer_text text-center">Disclaimer: These statements have not been evaluatThese statements have not been evaluated by the Food<br class="desktop-only"> and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.ed by the<br class="desktop-only"> Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.</p>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<div class="footer bg-black pt-30 pb-30">
  <div class="container d-flex flex-direction-column align-center">
    <a href="#">
      <img class="logo" src="./images/order/logo.png">
    </a>
    <p class="footer_des semibold white mb-0">1234-567-890</p>
    <div class="footer-nav d-flex red">
      <span class="disclaimer_text">Terms & Conditions</span>
      <span class="disclaimer_text">Privacy and Policy</span>
      <span class="disclaimer_text">DMCA</span>
    </div>
    <p class="disclaimer_text medium white mt-0">Primanix © 2021. All Rights Reserved</p>
  </div>
</div>
<?php
// Primanix Pro 1 Month
$pmx_1_month = UtilityHelper::getCustomParameters('pmx_1_month');
// Primanix Pro 3 Month
$pmx_3_month = UtilityHelper::getCustomParameters('pmx_3_month');
// Primanix Pro 6 Month
$pmx_6_month = UtilityHelper::getCustomParameters('pmx_6_month');
// Shipping Info
$shipping_info = UtilityHelper::getCustomParameters('shipping_info');
?>
<script>
const PRODUCTS = {
  'pmx_1_month' : <?= json_encode($pmx_1_month); ?>,
  'pmx_3_month' : <?= json_encode($pmx_3_month); ?>,
  'pmx_6_month' : <?= json_encode($pmx_6_month); ?>
};
const SHIPPING = <?= json_encode($shipping_info); ?>;
</script>
