<?php

$app = require __DIR__ . '/../bootstrap/app.php';

$router = $app->get(\Ecfectus\Router\Router::class);

$router->get('/public[/{name}]', 'test');

$kernel = $app->get(\Ecfectus\Framework\Http\Kernel::class);

/*
$kernel->pushMiddleware(function($r, $resp, $next){
   return $next($r, $resp->withStatus(200));
});
*/

$request = $app->get(\Psr\Http\Message\ServerRequestInterface::class);

$response = $app->get(\Psr\Http\Message\ResponseInterface::class);

$kernel->handle($request, $response);