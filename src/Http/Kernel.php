<?php
/**
 * Created by PhpStorm.
 * User: leemason
 * Date: 09/04/16
 * Time: 14:12
 */

namespace App\Http;

use Ecfectus\Framework\Session\Http\Middleware\StartSessionMiddleware;

class Kernel extends \Ecfectus\Framework\Http\Kernel
{
    /**
     * Global middleware to run on every request.
     *
     * @var array
     */
    public $globalMiddleware = [

    ];

    /**
     * Named middleware to be used selectively via routes.
     *
     * @var array
     */
    public $middleware = [
        'session' => StartSessionMiddleware::class,
    ];

    /**
     * Grouped middleware to be used selectivly via routes.
     *
     * @var array
     */
    public $middlewareGroups = [

    ];
}