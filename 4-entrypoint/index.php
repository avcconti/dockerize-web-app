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
        <style>
body {
    background: #3498db;
    font-family: sans-serif;
}
h1 {
    position: relative;
    color: rgba(0, 0, 0, .3);
    font-size: 5em
}
h1:before {
    content: attr(data-text);
    position: absolute;
    overflow: hidden;
    max-width: 7em;
    white-space: nowrap;
    color: #fff;
    animation: loading 8s linear;
}
@keyframes loading {
    0% {
        max-width: 0;
    }
}
</style>

    </head>
    <body>
        <h1 style="width:400px; margin:auto auto;" data-text="NGINX...">NGINX...</h1>
        <h1 style="width:400px; margin:auto auto;" data-text="PHP <?php echo $redis->incr("counter")." with MY_ENV_VAR =>".getenv("MY_ENV_VAR");?>">PHP <?php echo $redis->incr("counter")." with MY_ENV_VAR =>".getenv("MY_ENV_VAR");?></h1>

    </body>
</html>