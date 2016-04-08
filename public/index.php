<?php

$app = require __DIR__ . '/../bootstrap/app.php';

$kernel = $app->get(\Ecfectus\Framework\Http\Kernel::class);

$request = $app->get(\Psr\Http\Message\ServerRequestInterface::class);

$response = $app->get(\Psr\Http\Message\ResponseInterface::class);


$kernel->handle($request, $response);