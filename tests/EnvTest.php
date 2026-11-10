<?php

declare(strict_types=1);

namespace PeppecPhpTest\Tests;

use PeppecPhpTest\Env;
use PHPUnit\Framework\TestCase;
use RuntimeException;

final class EnvTest extends TestCase
{
    /**
     * .env.testing is created by the project's extra setup action, from .env.testing.example.
     */
    public function testLoadsTheTestingEnvironment(): void
    {
        $values = Env::load(dirname(__DIR__) . '/.env.testing');

        self::assertSame('hello', $values['APP_GREETING']);
        self::assertArrayNotHasKey('# comment', $values);
    }

    public function testMissingFileThrows(): void
    {
        $this->expectException(RuntimeException::class);

        Env::load(__DIR__ . '/does-not-exist');
    }
}
