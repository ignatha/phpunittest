<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use App\Out;

class OutTest extends TestCase
{
    public function testOne()
    {
        $out = new Out();

        $this->assertSame(2, $out->getData(array(1,2,3)));

    }

    public function testTwo()
    {
        $out = new Out();

        $this->assertSame(0, $out->getData(array(1,1,3,3,5,5,7,7)));

    }

    public function testThree()
    {
        $out = new Out();

        $this->assertSame(3, $out->getData(array(1,3,2,3,5,0)));

    }    
}