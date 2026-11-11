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
}
