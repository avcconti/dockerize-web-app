#!/bin/sh
set -e

cat  << EOM
💻 💻 💻 💻 💻 💻 💻
💻 Our entrypoint 💻
💻 💻 💻 💻 💻 💻 💻                                      
EOM


export AWS_ACCESS_KEY_ID="${AWS_ACCESS_KEY_ID:-1}"
export AWS_SECRET_ACCESS_KEY=miau2

exec "$@"
