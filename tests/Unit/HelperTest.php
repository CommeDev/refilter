<?php

namespace Zigzagdev\App\Tests;

it('removes null and re index array', function () {
    $data = ['foo', null, 'bar'];
    $result = \Zigzagdev\Refilter\filterAndReIndex($data);

    expect($result)->toEqual(['foo', 'bar']);
});

it('filters with callback and re index', function () {
    $data = [1, 2, 3, 4];
    $result = \Zigzagdev\Refilter\filterAndReIndex($data, fn ($v) => $v % 2 === 0);

    expect($result)->toEqual([2, 4]);
});