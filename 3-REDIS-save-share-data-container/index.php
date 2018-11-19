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
                <h1>3-REDIS-share-data <?php echo $redis->incr("counter");?></h1>
                <p>Objective: build image and run container based on nginx with content mapped from host hard drive</p>
                <pre>
                0. Build images:
                docker image build -t test-nginx -f Dockerfile .
                docker image build -t test-php-fpm -f DockerfilePHP .

                1. Run containers:
                docker container run --rm -it -v $PWD:/www/myapp --name test-php-fpm -p 9000:9000 --net mynet test-php-fpm
                docker container run --rm -it --name test-nginx -p 8081:80 --net mynet test-nginx
                
                2. Run redis container
                docker container run -it --rm -p 6379:6379 --name redis --net mynet redis

                3. Save and map data
                docker container run -it --rm -p 6379:6379 --name redis --net mynet -v redis_data:/data redis

                4. Share volumes
                docker container run -it --rm -p 6379:6379 --name redis --net mynet -v redis_data:/data --volumes-from test-nginx redis
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
