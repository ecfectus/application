<?php

error_reporting(E_ALL);

$app = require __DIR__ . '/../bootstrap/app.php';

function testing($request, $response, $next){
   $response->getBody()->write('from func');
   return $next($request, $response);
}

class test{

   protected $app = null;

   public function __construct(\Ecfectus\Application $app){
      $this->app = $app;
   }

   public function __invoke($request, $response, $next){
      $response->getBody()->write(print_r($request->getAttribute('route'), true));
      return $next($request, $response);
   }

   public function from($request, $response, $next){
      $response->getBody()->write('from class func');
      return $next($request, $response);
   }
}



$app->push(function(\Psr\Http\Message\RequestInterface $request, \Psr\Http\Message\ResponseInterface $response, $next) use ($app) {

   $router = $app->get(\Ecfectus\Router\Router::class);

   $router->get('/', function($request, $response, $next) {

      $response->getBody()->write('hello from route!');

      return $next($request, $response);
   });

   $router->get('/test', 'test');

   return $next($request, $response);

});



$app->push(function(\Psr\Http\Message\RequestInterface $request, \Psr\Http\Message\ResponseInterface $response, $next) use ($app) {

   $response->getBody()->write('hello from global!');

   return $next($request, $response);

});



$app->listen();