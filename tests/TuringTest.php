<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use App\Turing;

class TuringTest extends TestCase
{
    public function testOne()
    {
        $turing = new Turing();

        $this->assertSame(10, $turing->getData("10"));

    }

    public function testTwo()
    {
        $turing = new Turing();

        $this->assertSame(0, $turing->getData("D"));

    }

    public function testThree()
    {
        $turing = new Turing();

        $this->assertSame(0, $turing->getData("C"));

    }

    public function testFour()
    {
        $turing = new Turing();

        $this->assertSame(0, $turing->getData("+"));

    }

    public function testFive()
    {
        $turing = new Turing();

        $this->assertSame(0, $turing->getData("10 D"));

    }

    public function testSix()
    {
        $turing = new Turing();

        $this->assertSame(20, $turing->getData("10 C"));

    }

    public function testSeven()
    {
        $turing = new Turing();

        $this->assertSame(30, $turing->getData("10 +"));

    }

    public function testEight()
    {
        $turing = new Turing();

        $this->assertSame(450, $turing->getData("10 100 200 D C + 10"));

    }

    public function testNine()
    {
        $turing = new Turing();

        $this->assertSame(1270, $turing->getData("10 + + + + + +"));

    }

    public function testTen()
    {
        $turing = new Turing();

        $this->assertSame(0, $turing->getData("10 D C C C C C C C C"));

    }
}