<?php

ini_set('xdebug.var_display_max_depth', 10);

define('ECFECTUS_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

$app = new \App\Application(
    realpath(__DIR__.'/../')
);

$app->bootstrap();

return $app;