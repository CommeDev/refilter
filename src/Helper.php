<?php
declare(strict_types=1);

namespace Zigzagdev\Refilter;

function filterAndReIndex(array $array, ?callable $callback = null): array
{
    return array_values(array_filter($array, $callback));
}