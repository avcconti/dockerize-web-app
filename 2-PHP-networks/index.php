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
                <h1>2-PHP-networks</h1>
                <p>Objective: build image and run container based on nginx with content mapped from host hard drive</p>
                <pre>
                0. Build images:
                docker image build -t test-nginx -f Dockerfile .
                docker image build -t test-php-fpm -f DockerfilePHP .

                1. Run containers:
                docker container run --rm -it -v $PWD:/www/myapp --name test-nginx -p 8081:80 test-nginx
                docker container run --rm -it -v $PWD:/www/myapp --name test-php-fpm -p 9000:9000 test-php-fpm

                2. Network help:
                docker network --help 
                
                3. Run container with network
                docker container run --rm -it -v $PWD:/www/myapp --name test-php-fpm -p 9000:9000 --net mynet test-php-fpm
                docker container run --rm -it -v $PWD:/www/myapp --name test-nginx -p 8081:80 --net mynet test-nginx
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