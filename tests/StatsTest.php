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

    public function testMedianWithOddCount(): void
    {
        self::assertSame(2.0, Stats::median([1, 2, 3]));
    }

    public function testMedianWithEvenCount(): void
    {
        self::assertSame(2.5, Stats::median([1, 2, 3, 4]));
    }

    public function testMedianWithUnsortedInputDoesNotModifyIt(): void
    {
        $values = [5, 1, 4, 2, 3];

        self::assertSame(3.0, Stats::median($values));
        self::assertSame([5, 1, 4, 2, 3], $values);
    }

    public function testMedianOfSingleElement(): void
    {
        self::assertSame(7.0, Stats::median([7]));
    }

    public function testMedianOfEmptyListThrows(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        Stats::median([]);
    }

    public function testRange(): void
    {
        self::assertSame(4, Stats::range([3, 1, 5, 2]));
    }

    public function testRangeOfSingleElementIsZero(): void
    {
        self::assertSame(0, Stats::range([7]));
    }

    public function testRangeWithNegativeValues(): void
    {
        self::assertSame(2, Stats::range([-1, -3, -2]));
        self::assertSame(5, Stats::range([2, -3]));
    }

    public function testRangeOfEmptyListThrows(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        Stats::range([]);
    }
}
