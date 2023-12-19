<?php

$con = mysqli_connect("localhost","root","","project_tekweb") or die("Couldn't connect");

define('PAYPAL_SANDBOX', TRUE);
define('PAYPAL_SANDBOX_CLIENT_ID', 'AQqMCq5Hvr8tajmPvIjuHNBjYsh39VYTcE_cdbnTulBNGXmWA98zd5Cd4e0ouXIhMxCi75ppt-ZLx69N');
define('PAYPAL_SANDBOX_CLIENT_SECRET', 'ECj_KADn4-R03ZvIH6quFn3kwXevVlFQmo2EgsEwO4oHI8xh7H0pa7CkPpUib6TNi63c0MQyEHeT1HmR');
define('PAYPAL_PROD_CLIENT_ID', 'Insert_Live_PayPal_Client_ID_Here');
define('PAYPAL_PROD_CLIENT_SECRET', 'Insert_Live_PayPal_Secret_Key_Here');

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'project_tekweb');

?>