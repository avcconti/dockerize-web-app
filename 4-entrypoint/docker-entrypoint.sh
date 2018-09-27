#!/bin/sh
set -e

cat  << EOM
💻 💻 💻 💻 💻 💻 💻
💻 Our entrypoint 💻
💻 💻 💻 💻 💻 💻 💻                                      
EOM


export AWS_ACCESS_KEY_ID=miau
export AWS_SECRET_ACCESS_KEY=miau2

exec "$@"
