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
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Dockerize Web App</title>
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/hack-font@3/build/web/hack.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div class="body-wrap">
        <div class="banner-area relative container ">
            <div class="left-container">
                <h1>5-docker-compose <?php echo (strpos($_SERVER['REQUEST_URI'],'favicon.ico') === false) ? $redis->incr("counter") : $redis->get("counter"); ?></h1>
                <p>Objective: enjoy with the magic of docker-compose</p>
                <pre>
                AWS_ACCESS_KEY_ID=<?php echo getenv("AWS_ACCESS_KEY_ID");?>

                AWS_SECRET_ACCESS_KEY=<?php echo getenv("AWS_SECRET_ACCESS_KEY");?>                

                0. One command:
                docker-compose up --build

                1. Extra command:
                docker-compose down [-v]
                </pre>
            </div>
            <div class="right-container">
                <img src="assets/img/gdg-big.png" alt="" class="">
            </div>
        </div>
    </div>
    <div class="grid-wrapper">
    </div>
</body>

</html>
