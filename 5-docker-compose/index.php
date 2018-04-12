<?php 
/*
Default config
 */
error_reporting(E_ALL);
ini_set('display_errors', 'On');
date_default_timezone_set('UTC');
/*redis*/
$redis = new Redis();
$connect=$redis->connect("redis", 6379,3);
if(!$connect){
    error_log("Could not locate redis server");
}

?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <p>Html:1</p>
        <p>PHP:<?php echo $redis->incr("counter")." with MY_ENV_VAR =>".getenv("MY_ENV_VAR");?></p>
        <p>PHP:<?php echo $redis->incr("counter")." with MY_ENV_VAR2 =>".getenv("MY_ENV_VAR2");?></p>
    </body>
    </html>
