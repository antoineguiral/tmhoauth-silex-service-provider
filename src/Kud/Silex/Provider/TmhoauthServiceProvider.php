<?php

namespace Kud\Silex\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;

class TmhoauthServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {	
        $app['tmhoauth.options'] = isset($app['tmhoauth.keys']) ? $app['tmhoauth.keys'] : array();
        
        $app['tmhoauth'] = $app->share(function () use ($app) {
            return new tmhOAuth($app['tmhoauth.options']);
        });

        if (isset($app['tmhoauth.class_path'])) {
            $app['autoloader']->registerNamespace('tmhOAuth', $app['tmhoauth.class_path']);
        }
    }
}
