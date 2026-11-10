<?php

declare(strict_types=1);

namespace PeppecPhpTest\Tests;

use PeppecPhpTest\Stats;
use PHPUnit\Framework\TestCase;

final class StatsTest extends TestCase
{
    public function testSum(): void
    {
        self::assertSame(6, Stats::sum([1, 2, 3]));
        self::assertSame(-1, Stats::sum([2, -3]));
    }

    public function testSumOfEmptyListIsZero(): void
    {
        self::assertSame(0, Stats::sum([]));
    }
}
