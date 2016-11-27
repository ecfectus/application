<?php

$app = require __DIR__ . '/../bootstrap/app.php';

$kernel = $app->get(\Ecfectus\Framework\Http\KernelInterface::class);

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

$response = $kernel->handle($request);

$response->send();

$kernel->terminate($request, $response);