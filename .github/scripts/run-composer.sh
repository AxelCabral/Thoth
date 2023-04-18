#!/bin/sh
cp .env.ci .env
sudo composer install --no-ansi --no-interaction --no-suggest --prefer-dist