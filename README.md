# tmhOAuth Silex Extension

tmhOAuth service provider for [Silex][1].

## Installation

```bash
$ wget http://getcomposer.org/composer.phar
$ php composer.phar install
```

## Registering

```php
$app->register(new Kud\Silex\Provider\TmhOAuthServiceProvider(), array(
    'tmhoauth.keys' => array(
    	'consumer_key'    => 'ENTER_HERE_YOUR_TWITTER_CONSUMER_KEY',
    	'consumer_secret   => 'ENTER_HERE_YOUR_TWITTER_CONSUMER_SECRET',
    ),
));
``

## Credits

* [tmhOAuth][2]

## License

The tmhOAuth Silex Extension is licensed under the MIT license.

[1]: http://silex-project.org
[2]: https://github.com/themattharris/tmhOAuth
