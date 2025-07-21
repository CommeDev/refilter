<?php

namespace Zigzagdev\App\Tests\Unit;

use PHPUnit\Framework\TestCase;

class HelperTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function test_filter_and_reindex_removes_null_and_reindex(): void
    {
        $data = ['foo', null, 'bar'];

        $result = \Zigzagdev\Refilter\filterAndReIndex($data);

        $this->assertSame(['foo', 'bar'], $result);
    }

    public function test_filter_and_reindex_with_callback(): void
    {
        $data = [1, 2, 3, 4];
        $result = \Zigzagdev\Refilter\filterAndReIndex($data, fn ($v) => $v % 2 === 0);

        $this->assertSame([2, 4], $result);
    }
}
