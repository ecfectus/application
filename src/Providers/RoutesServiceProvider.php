<?php
/**
 * Created by PhpStorm.
 * User: leemason
 * Date: 27/11/2016
 * Time: 17:21
 */

namespace App\Providers;


use Ecfectus\Container\ServiceProvider\AbstractServiceProvider;
use Ecfectus\Container\ServiceProvider\BootableServiceProviderInterface;
use Ecfectus\Router\RouterInterface;
use Symfony\Component\HttpFoundation\Request;

class RoutesServiceProvider extends AbstractServiceProvider implements BootableServiceProviderInterface
{

    public $provides = [];

    protected $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function register(){}

    public function boot()
    {
        $this->router->get('/')->setHandler(function(Request $request){
            $request->getSession()->set('test', 'value');
            return $request->getSession()->all();
            return ['this' => 'and', 'that' => ''];
        })->setMiddleware(['session']);
    }

}