# DMS Coding Standard

Customised PHPCS ruleset to standardise our PHP repositories

Standards
---------

Our coding standard is based on [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md)
and [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md), following the Doctrine flavor, with a couple differences:

- :white_check_mark: Do not add spaces before a colon in return type declaration, only after `function (): void {}`
- :white_check_mark: Always add `declare(strict_types=1)` at the beginning of a file (1 line after tag, not 2)

More info:

- https://github.com/slevomat/coding-standard
- https://github.com/doctrine/coding-standard
