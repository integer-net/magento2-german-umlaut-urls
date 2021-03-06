# magento2-german-umlaut-urls

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)


## Purpose

The common German umlauts are automatically adapted when URLs are created. For example, an ä becomes an a, although it is common to paraphrase umlauts with an additional e, in this case ä to ae. This module solves this problem and converts umlauts correctly in URLs.

## Restrictions

This module only affects the URL generation when URLs are auto-generated, i.e. when a new Product / Category / CMS Page is created, but the field "URL Key" is left empty. In that case, the URL key is being generated from the name. It doesn't affect existing Products / Categories / CMS Pages, as URL Keys are already generated for them.

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

## Testing

### Magento Integration Tests

0. Configure test database in `dev/tests/integration/etc/install-config-mysql.php`. [Read more in the Magento docs.](https://devdocs.magento.com/guides/v2.3/test/integration/integration_test_execution.html) 

1. Copy `Test/Integration/phpunit.xml.dist` from the package to `dev/tests/integration/phpunit.xml` in your Magento installation.

2. In the Magento root directory, run
    ``` bash
    bin/magento dev:tests:run integration
    ```

## Credits

- [Andreas von Studnitz][link-author-avs]
- [Dominik Brachmanski][link-author-db]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.txt) for more information.

[ico-version]: https://img.shields.io/packagist/v/integer-net/magento2-german-umlaut-urls.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/integer-net/magento2-german-umlaut-urls
[link-contributors]: ../../contributors
[link-author-avs]: https://github.com/avstudnitz
[link-author-db]: https://github.com/DomBra27
