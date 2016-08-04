#!/usr/bin/env sh

# start built-in server in background

php -S "localhost:8888" -t "./www" "./www/index.php" &

sleep 3s
