<?php

declare(strict_types=1);

namespace Example;

use Amazing\Sniffs\Spacing\ControlStructureSniff;
use ArrayIterator;
use Fancy\TestCase;
use InvalidArgumentException;
use IteratorAggregate;

use function assert;
use function strlen as stringLength;
use function substr;

use const PHP_MINOR_VERSION;
use const PHP_RELEASE_VERSION as PHP_PATCH_VERSION;
use const PHP_VERSION;

/**
 * Description
 */
class Example implements IteratorAggregate
{
    private const VERSION = PHP_VERSION - (PHP_MINOR_VERSION * 100) - PHP_PATCH_VERSION;

    private ControlStructureSniff|int|string|null $baxBax = null;

    public function __construct(private int|null $foo = null, private array $bar = [], private bool $baz = false, $baxBax = 'unused')
    {
        $this->baxBax = $baxBax;
    }

    /**
     * Description
     */
    public function getFoo(): int|null
    {
        return $this->foo;
    }

    /**
     * @return iterable
     */
    public function getIterator(): array
    {
        assert($this->bar !== null);

        return new ArrayIterator($this->bar);
    }

    public function isBaz(): bool
    {
        return $this->baz;
    }

    public function mangleBar(int $length): void
    {
        if (! $this->baz) {
            throw new InvalidArgumentException();
        }

        $this->bar = (string) $this->baxBax ?? substr($this->bar, stringLength($this->bar - $length));
    }

    public static function getMinorVersion(): int
    {
        return self::VERSION;
    }

    public static function getTestCase(): TestCase
    {
        return new TestCase();
    }
}
