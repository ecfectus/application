<?php
/**
 * Created by PhpStorm.
 * User: leemason
 * Date: 27/11/2016
 * Time: 17:25
 */

namespace App\Providers;


use Ecfectus\Container\ServiceProvider\AbstractServiceProvider;
use Ecfectus\Router\RouterInterface;

class AppServiceProvider extends AbstractServiceProvider
{

    public $provides = [
        RoutesServiceProvider::class,
    ];

    public function register()
    {
        $this->bind(RoutesServiceProvider::class, [function(RouterInterface $router){
            return new RoutesServiceProvider($router);
        }, RouterInterface::class]);
    }

}