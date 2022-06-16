<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use App\Trusts;

class TrustsTest extends TestCase
{
    public function testOne()
    {
        $trust = new Trusts();

        $this->assertSame(3, $trust->trust(4,[[1,3],[2,3],[1,4],[2,4],[4,2]]));

    }
}