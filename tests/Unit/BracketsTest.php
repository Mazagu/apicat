<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Helpers\Brackets;

class BracketsTest extends TestCase
{
    /**
     * @test
     */
    public function brackets_match()
    {
        $cosa = new Brackets;
        $this->assertTrue($cosa->findMatches("[(())()]{}()[][[]]"));
        $this->assertTrue($cosa->findMatches("[]"));
        $this->assertFalse($cosa->findMatches("(]"));
        $this->assertFalse($cosa->findMatches("(])[]"));
    }
}
