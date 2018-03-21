#!/bin/sh
set -e

echo "The Dockerfile ENTRYPOINT has been executed!"

export MY_ENV_VAR="miau"

exec "$@"
