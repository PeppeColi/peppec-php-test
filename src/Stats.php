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
}
