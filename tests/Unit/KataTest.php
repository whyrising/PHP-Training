<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{
    /** @test */
    public function expressionsMatterAssertions()
    {
        $this->assertEquals(6, $this->expressionMatter(2, 1, 2));
        $this->assertEquals(4, $this->expressionMatter(2, 1, 1));
        $this->assertEquals(3, $this->expressionMatter(1, 1, 1));
        $this->assertEquals(9, $this->expressionMatter(1, 2, 3));
        $this->assertEquals(5, $this->expressionMatter(1, 3, 1));
        $this->assertEquals(8, $this->expressionMatter(2, 2, 2));
        $this->assertEquals(20, $this->expressionMatter(5, 1, 3));
        $this->assertEquals(105, $this->expressionMatter(3, 5, 7));
        $this->assertEquals(35, $this->expressionMatter(5, 6, 1));
        $this->assertEquals(8, $this->expressionMatter(1, 6, 1));
        $this->assertEquals(14, $this->expressionMatter(2, 6, 1));
        $this->assertEquals(48, $this->expressionMatter(6, 7, 1));
        $this->assertEquals(60, $this->expressionMatter(2, 10, 3));
        $this->assertEquals(27, $this->expressionMatter(1, 8, 3));
        $this->assertEquals(126, $this->expressionMatter(9, 7, 2));
        $this->assertEquals(20, $this->expressionMatter(1, 1, 10));
        $this->assertEquals(18, $this->expressionMatter(9, 1, 1));
        $this->assertEquals(300, $this->expressionMatter(10, 5, 6));
        $this->assertEquals(12, $this->expressionMatter(1, 10, 1));
    }

    public function expressionMatter(int $a, int $b, int $c)
    {
        return max([
            $a * $b * $c,
            $a + $b + $c,
            $a + $b * $c,
            ($a + $b) * $c,
            $a * ($b + $c)
        ]);
    }
}
