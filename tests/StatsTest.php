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

    public function testAverage(): void
    {
        self::assertSame(2.0, Stats::average([1, 2, 3]));
        self::assertSame(2.5, Stats::average([1, 2, 3, 4]));
    }

    public function testAverageOfSingleElement(): void
    {
        self::assertSame(5.0, Stats::average([5]));
    }

    public function testAverageWithNegativeValues(): void
    {
        self::assertSame(-2.0, Stats::average([-1, -2, -3]));
        self::assertSame(-0.5, Stats::average([2, -3]));
    }

    public function testAverageOfEmptyListThrows(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        Stats::average([]);
    }
}
