#!/bin/sh
set -e

cat  << EOM
💻 💻 💻 💻 💻 💻 💻
💻 Our entrypoint 💻
💻 💻 💻 💻 💻 💻 💻                                      
EOM

sed -e 's/127.0.0.1:9000/9000/' \
        -e '/allowed_clients/d' \
        -e '/catch_workers_output/s/^;//' \
        -e 's/;clear_env/clear_env/' \
        -e '/error_log/d' \
        -i /etc/php-fpm.d/www.conf 

export AWS_ACCESS_KEY_ID="${AWS_ACCESS_KEY_ID:-1}"

exec "$@"
