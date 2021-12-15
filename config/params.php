<?php
return [
  'url'      => 'http://' . $_SERVER["SERVER_NAME"] . '/',
  'adminEmail' => 'admin@example.com',
  'senderEmail' => 'noreply@example.com',
  'senderName' => 'Example.com mailer',
  'salt' => '$2a$10$Q7qlnTFPwKq4D6csshB3n5',

  'SiteName' => 'SUPERIOR MALE',
  'SiteUrl' => 'best-american-supplements.com',
  'SiteEmail' => 'contact@best-american-supplements.com',
  'SitePhone' => '1-855-775-1456',

  // Order Products
  // Order Products
  'pmx_1_month' => [
    'name' => 'SUPERIOR MALE 1 Month',
    'amount' => 69.95,
    'cc' => 4903,
    'pp' => 4909, 
    'pp_code' => 'P-47Y57844Y54181255MGXDWBI', // Live
    //'pp_code' => 'P-8N8509919A500544LMGIPYGY', // Test
  ],
  'pmx_3_month' => [
    'name' => 'SUPERIOR MALE 3 Month',
    'amount' => 129.95,
    'cc' => 4904,
    'pp' => 4910, 
    'pp_code' => 'P-8U056245DL4186130MGXDWQQ', // Live
    //'pp_code' => 'P-4DU9608778864723TMGIPYTA', // Test
  ],
  'pmx_6_month' => [
    'name' => 'SUPERIOR MALE 6 Month',
    'amount' => 189.95,
    'cc' => 4905,
    'pp' => 4911, 
    'pp_code' => 'P-8CH784060P250841CMGXDXCA', // Live
    //'pp_code' => 'P-33K657256M1462107MGIPY5Q', // Test
  ],
  // End 
  
  // Upsell Products
  'ueb_1_month' => [
    'name' => 'SUPERIOR MALE 1 Month',
    'amount' => 59.95,
    'cc' => 4983,
    'pp' => 4985, 
    'pp_code' => 'P-27044541P0531321YMGXD5KQ', // Live
    //'pp_code' => 'P-24D74545606207931MGONKPQ', // Test
  ],
  'ueb_3_month' => [
    'name' => 'SUPERIOR MALE 3 Month',
    'amount' => 119.95,
    'cc' => 4983,
    'pp' => 4985, 
    'pp_code' => 'P-55E65472F2940413DMGXD5ZY', // Live
    //'pp_code' => 'P-5F10969608609930UMGONK6Q', // Test
  ],
  'ueb_6_month' => [
    'name' => 'SUPERIOR MALE 6 Month',
    'amount' => 179.95,
    'cc' => 4983,
    'pp' => 4985, 
    'pp_code' => 'P-9PY59871HD499903RMGXEC6A', // Live
    //'pp_code' => 'P-2AL503182M464902TMGONLRI', // Test
  ],
  // End
  
  // TEST ACC
  //'paypal_test_client_id' => 'AZlc6nGGWaOMtCROHaLKxmw0X4g02y7KkgZYCwGNFNzMIPWAiRhbhyg2xkj0nOk9xQ0Ao9nDFPcw1oRw',
  //'paypal_client_id' => 'AZlc6nGGWaOMtCROHaLKxmw0X4g02y7KkgZYCwGNFNzMIPWAiRhbhyg2xkj0nOk9xQ0Ao9nDFPcw1oRw',

  // Live ACC
  'paypal_client_id' => 'AUF995EoykyyJBH-uMcU9gUBKhf7e-odp7LPnTh_cfg5Dk7HjwIpKWp5-Pl-cutWH9GnlmvchilCOtrt',
  
  'shipping_info' =>[
    'US' => [
      'free' => ['id' => 5, 'amount' => 0],
      'expedite' => ['id' => 36, 'amount' => 7.95],
    ],
    'CA' => [
      'standard' => ['id' => 33, 'amount' => 9.95],
    ],
  ],

  'authorize.mode' => 'sandbox', //sandbox or live

  'ip_white_list'  => [
    '::1',
    '127.0.0.1',
    '108.41.203.139',   # NY Office NEW
    '108.46.164.152',   # NY Office
    '173.63.72.225',    # NJ Office
    '206.201.0.83',     # PH Office - Converge
    '38.107.174.197',   # PH Office - APN
    '38.107.176.178',   # PH Office - 2
    '108.5.150.195',    # MG Home
    '96.242.19.128',    # MG Home
    '108.41.203.181',   # MB Home
    '24.185.140.132',   # JG Home
    '108.53.129.232',   # Mike MID's PC
    '216.107.140.19',   # Main
    '45.59.16.146',     # Backup
    '109.93.86.2',      # Luka Dynamic
    '96.242.19.128',    # Mike S' home IP     
    '182.77.8.119',
    '180.190.166.17',   # Kenn Dev
  ],
];
