# Velopress

Velopress is a Laravel package that helps the loading of WordPress. Adding this package to your Laravel 5 installation will automatically bootstrap WordPress 

## Installation

To install the Velopress package run

```
composer require mkendon/velopress
```

You will also need to install WordPress using composer as well. Add the following to your composer.json file. 

```
"extra": {
    "wordpress-install-dir": "public/wp"
}
```

This sets the install directory for WordPress to be in the public directory of the Laravel framework. If you have changed this update the above code as required.

Finally run the following code to install WordPress through composer

```
composer require johnpbloch/wordpress
```

Once you have the Velopress package installed you can register its service provider with your Laravel app.

Open your `config/app.php` file and add the following to your `providers` array

```
'providers' => [
    'Velopress\VelopressServiceProvider',
]
```

Then add the `alias`  to install the `Wordpress` facade

```
'aliases' => [
    'Wordpress' => 'Velopress\Facades\Wordpress',
]
```

Finally you will need to publish the `wp-config.php` file that comes with Velopress and that bootstraps Laravel for Wordpress

```
php artisan vendor:publish --tag=wordpress
```

This will publish a custom `wp-config.php` file to the Laravel public folder.