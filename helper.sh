#!/usr/bin/env bash

case $1 in
  start*)
    echo >&2 "Installing composer dependencies";
    composer install;
    echo >&2 "";

    echo >&2 "Installing yarn dependencies";
    yarn install;
    echo >&2 "";

    echo >&2 "Copying .env files";
    cp -n .env.dev .env;
    echo >&2 "";

    vendor/bin/homestead make;
    sed -i 's/ip: 192.168.10.10/ip: 192.168.88.88/g' ./Homestead.yaml;
    sed -i 's/- homestead/- a-zhare/g' ./Homestead.yaml;
    sed -i 's/homestead.test/a-zhare.test/g' ./Homestead.yaml;
    echo >&2 "";

    echo >&2 "Initializing Homestead";
    vagrant up;
    echo >&2 "";

    echo >&2 "Running yarn watch";
    yarn watch;
    ;;
  stop*)
    vagrant halt;
    ;;
  *)
    echo "What?!"
    ;;
esac


