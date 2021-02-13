<?php
declare(strict_types=1);

namespace Fancy;

use PHPUnit\Framework\TestCase;

/**
 * @requires PHP 7.2
 */
final class TestCase extends TestCase
{
    /**
     * @beforeClass
     * @afterClass
     */
    public static function doStuff(): void
    {
    }

    /**
     * @before
     */
    public function createDependencies(): void
    {
    }

    /**
     * @uses MyClass::__construct
     *
     * @test
     * @covers MyClass::test
     */
    public function methodShouldDoStuff(): void
    {
    }
}
