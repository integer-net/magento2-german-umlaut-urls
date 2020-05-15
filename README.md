# magento2-german-umlaut-urls

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)


## Purpose

The common German umlauts are automatically adapted when URLs are created. For example, an ä becomes an a, although it is common to paraphrase umlauts with an additional e, in this case ä to ae. This module solves this problem and converts umlauts correctly in URLs.


## Installation

1. Install via composer
    ```
    composer require integer-net/magento2-german-umlaut-urls
    ```
2. Enable module
    ```
    bin/magento setup:upgrade
    ```
## Configuration

Zero configuration needed.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

### Magento Integration Tests

0. Configure test database in `dev/tests/integration/etc/install-config-mysql.php`. [Read more in the Magento docs.](https://devdocs.magento.com/guides/v2.3/test/integration/integration_test_execution.html) 

1. Copy `Test/Integration/phpunit.xml.dist` from the package to `dev/tests/integration/phpunit.xml` in your Magento installation.

2. In that directory, run
    ``` bash
    ../../../vendor/bin/phpunit
    ```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Andreas von Studnitz][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.txt) for more information.

[ico-version]: https://img.shields.io/packagist/v/integer-net/magento2-german-umlaut-urls.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/integer-net/magento2-german-umlaut-urls/master.svg?style=flat-square
[ico-scrutinizer]: https://scrutinizer-ci.com/g/integer-net/magento2-german-umlaut-urls/badges/coverage.png?b=master
[ico-code-quality]: https://img.shields.io/scrutinizer/g/integer-net/magento2-german-umlaut-urls.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/integer-net/magento2-german-umlaut-urls
[link-travis]: https://travis-ci.org/integer-net/magento2-german-umlaut-urls
[link-scrutinizer]: https://scrutinizer-ci.com/g/integer-net/magento2-german-umlaut-urls/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/integer-net/magento2-german-umlaut-urls
[link-author]: https://github.com/wigman
[link-contributors]: ../../contributors
