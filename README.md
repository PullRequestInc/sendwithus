# sendwithus

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)

Laravel5+ bindings for the excellent email service sendwithus.  Wraps https://github.com/sendwithus/sendwithus_php with a facade and client manager.

## Structure

```
config/
src/
tests/
vendor/
```

## Install

Via Composer

``` bash
$ composer require PullRequestInc/sendwithus
```

Now add PullRequestInc\sendwithus\SendwithusServiceProvider::class to your config/app.php's providers
and 'Sendwithus' => PullRequestInc\sendwithus\Facades\Sendwithus::class to the aliases.


``` bash
$ php artisan vendor:publish
```

Next, update your .env files with your sendwithus API keys.  

SENDWITHUS_API_KEY_PRODUCTION=..................

SENDWITHUS_API_KEY_TESTING=....................

Other environment variables you can set:

SENDWITHUS_API_DEFAULT_KEY (production|testing)  Default: production

SENDWITHUS_DEBUG (true|false)   Default: false;

## Usage

``` 
<?php

$emails = Sendwithus::emails();

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ phpunit 
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email lyal@pullrequest.com instead of using the issue tracker.

## Credits

- [Lyal Avery][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/PullRequestInc/sendwithus.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/PullRequestInc/sendwithus/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/PullRequestInc/sendwithus.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/PullRequestInc/sendwithus.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/PullRequestInc/sendwithus.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/PullRequestInc/sendwithus
[link-travis]: https://travis-ci.org/PullRequestInc/sendwithus
[link-scrutinizer]: https://scrutinizer-ci.com/g/PullRequestInc/sendwithus/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/PullRequestInc/sendwithus
[link-downloads]: https://packagist.org/packages/PullRequestInc/sendwithus
[link-author]: https://github.com/lyal
[link-contributors]: ../../contributors
