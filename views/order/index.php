<?php
use app\helpers\UtilityHelper;
$this->params['data'] = ['page' => 'order', 'title' => 'Order'];
?>
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/order.css">
<?php
// Render Order Form Template
echo $this->render('/order/order', []);
?>
<?php
$this->params['data']['script'] = <<<EOT
<script src="/js/order.js"></script>
EOT;
?>
