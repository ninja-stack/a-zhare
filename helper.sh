#!/usr/bin/env bash

case $1 in
  start*)
    command -v php >/dev/null 2>&1 || { echo >&2 "I require php but it's not installed. Aborting."; exit 1; }
    command -v composer >/dev/null 2>&1 || { echo >&2 "I require composer but it's not installed.  Aborting."; exit 1; }
    command -v node >/dev/null 2>&1 || { echo >&2 "I require node but it's not installed. Aborting."; exit 1; }
    command -v yarn >/dev/null 2>&1 || { echo >&2 "I require yarn but it's not installed. Aborting."; exit 1; }
    command -v vagrant >/dev/null 2>&1 || { echo >&2 "I require vagrant but it's not installed. Aborting."; exit 1; }

    echo >&2 "PHP version";
    php -v;
    echo >&2 "";

    echo >&2 "Composer version";
    composer -V;
    echo >&2 "";

    echo >&2 "Node version";
    node -v;
    echo >&2 "";

    echo >&2 "Yarn version";
    yarn -v;
    echo >&2 "";

    echo >&2 "Vagrant version";
    vagrant -v;
    echo >&2 "";

    echo >&2 "VirtualBox version";
    VBoxManage -v;
    echo >&2 "";

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

    echo >&2 "Finished!";
    ;;
  stop*)
    vagrant halt;
    ;;
  *)
    echo "What?!"
    ;;
esac


