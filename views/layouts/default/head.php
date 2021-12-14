<?php
$page            = isset($data['page']) ? $data['page'] : '';
$pageId          = $page !== '' ? $data['page'] . '_page_body' : '';
$pageTitle       = (isset($data['title']) && $data['title'] !== '') ? $data['title'] : ucfirst($page);
$pageDescription = isset($data['description']) ? $data['description'] : '';
$canonicalUrl    = isset($data['canonical']) ? $data['canonical'] : '';
$language        = isset($data['language']) ? $data['language'] . '/' : '';
$head_scripts    = isset($data['head_script']) ? $data['head_script'] : '';

function getAddress() {
  $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
  return $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MDLD6GK');</script>
<!-- End Google Tag Manager -->
  <meta charset="<?= Yii::$app->charset; ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= $pageDescription ?>">
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
  <meta name="robots" content="noimageindex, nofollow, nosnippet">

  <?php /*
  <link rel="canonical" href="<?php //echo getAddress();  ?>">
  <link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME'] ?><?= $canonicalUrl ?>">
  */?>
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
  
  <!-- <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
  <!-- <link rel="stylesheet" href="/css/style-old.css"> -->
  <?= $head_scripts ?>
  <?php $this->registerCsrfMetaTags() ?>

  <title><?= $pageTitle.' | Superior Male' ?></title>
</head>
<body class="<?= $page; ?>" id="<?= $pageId; ?>">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MDLD6GK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->