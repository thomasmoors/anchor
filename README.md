# Laravel Anchor

Wrap docker management in a convenient Laravel package, just like Sail but with a different approach. Also make it usable in production. Laravel Sail is nice, but fails on one of the biggest promises of Docker: consistency between environments, a.k.a. build once, run everywhere. 

![comic]([https://wizardzines.com/comics/why-containers/why-containers.png](https://wizardzines.com/images/uploads/why-containers.png) "Why containers")

Awesome comic by Julia Evans, please consider [supporting her](https://wizardzines.com/zines/containers/)


# Goals

- [ ] To enable all features in Laravel with the help of external services
  - [ ] [Broadcasting/Websockets](https://github.com/beyondcode/laravel-websockets)
  - [ ] [Development mail](https://github.com/mailhog/MailHog)
  - [x] [Queues](https://redis.io/)
  - [ ] [Task scheduling](https://hub.docker.com/r/willfarrell/crontab)
  - [ ] Scout
- [ ] To configure this package with just a config file
- [ ] To support multiple environments with different services (e.g. xDebug in development)
- [ ] To create smaller images than Sail by using Alpine based Linux images
- [ ] Let's Encrypt support
- [ ] docker-sync on Mac host

```bash
composer require thomasmoors/anchor
```

# Documentation

https://thomasmoors.github.io/anchor/
```bash
php artisan vendor:publish --provider="Thomasmoors\Anchor\AnchorServiceProvider" --tag="anchor-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Thomasmoors\Anchor\AnchorServiceProvider" --tag="anchor-config"
```


# Naming

As most things Docker related get a nautical term or at least something related to boats, I thought it to be a good idea to use Anchor. As a bonus just like docker-compose you now can execute `anchor up` and `anchor down` which does exactly the same to the containers as it would do to a boat. 🙂
## Usage

```php
$anchor = new Thomasmoors\Anchor();
echo $anchor->echoPhrase('Hello, Spatie!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Thomas Moors](https://github.com/thomasmoors)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
