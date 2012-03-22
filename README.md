# tmhOAuth Silex Extension

thmOAuth Service Provider for [Silex][1].

## Installation

    $ git submodule add git://github.com/kud/silex-tmhoauth-extension.git /path/to/vendor/service-provider/Tmhoauth

## Autoloader

    $app['autoloader']->registerNamespace('Kud', /path/to/vendor/service-provider/Tmhoauth/src');

## Registering

    $app->register(new Kud\Tmhoauth\Extension(), array(
        'tmhoauth.keys' => array(
        	'consumer_key'    => 'ENTER_HERE_YOUR_TWITTER_CONSUMER_KEY',
        	'consumer_secret   => 'ENTER_HERE_YOUR_TWITTER_CONSUMER_SECRET',
        )
    ));

## Credits

* [tmhOAuth][2]

## License

The tmhOAuth Silex Extension is licensed under the MIT license.

[1]: http://silex-project.org
[2]: https://github.com/themattharris/tmhOAuth
