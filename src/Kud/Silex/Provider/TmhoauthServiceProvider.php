<?php

namespace Kud\Silex\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;

class TmhOAuthServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {	
        if(!isset($app['tmhoauth.keys.consumer_key'] || !isset($app['tmhoauth.keys.consumer_secret'])
        {
            throw new RuntimeException('You must specify both keys (consumer_key and consumer_secret)');
        }
        
        $app['tmhoauth'] = $app->share(function () use ($app) {
            return new tmhOAuth($app['tmhoauth.keys']);
        });

        if (isset($app['tmhoauth.class_path'])) {
            $app['autoloader']->registerPrefix('tmhOAuth', $app['tmhoauth.class_path']);
        }
    }
}
