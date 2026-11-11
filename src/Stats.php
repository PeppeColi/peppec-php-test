<?php

declare(strict_types=1);

namespace PeppecPhpTest;

/**
 * Integer helper functions.
 */
final class Stats
{
    /**
     * Returns the sum of the values, or 0 for an empty list.
     *
     * @param list<int> $values
     */
    public static function sum(array $values): int
    {
        return array_sum($values);
    }

    /**
     * Returns the arithmetic mean of the values.
     *
     * @param list<int> $values
     *
     * @throws \InvalidArgumentException If the list is empty.
     */
    public static function average(array $values): float
    {
        if ($values === []) {
            throw new \InvalidArgumentException('Cannot compute the average of an empty list.');
        }

        return array_sum($values) / count($values);
    }

    /**
     * Returns the median of the values.
     *
     * @param list<int> $values
     *
     * @throws \InvalidArgumentException If the list is empty.
     */
    public static function median(array $values): float
    {
        if ($values === []) {
            throw new \InvalidArgumentException('Cannot compute the median of an empty list.');
        }

        sort($values);

        $count = count($values);
        $middle = intdiv($count, 2);

        if ($count % 2 === 1) {
            return (float) $values[$middle];
        }

        return ($values[$middle - 1] + $values[$middle]) / 2;
    }

    /**
     * Returns the difference between the largest and the smallest value.
     *
     * @param list<int> $values
     *
     * @throws \InvalidArgumentException If the list is empty.
     */
    public static function range(array $values): int
    {
        if ($values === []) {
            throw new \InvalidArgumentException('Cannot compute the range of an empty list.');
        }

        return max($values) - min($values);
    }

    /**
     * Returns the largest value.
     *
     * @param list<int> $values
     *
     * @throws \InvalidArgumentException If the list is empty.
     */
    public static function max(array $values): int
    {
        if ($values === []) {
            throw new \InvalidArgumentException('Cannot compute the max of an empty list.');
        }

        return max($values);
    }
}
