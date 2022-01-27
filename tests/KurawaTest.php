<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use App\Kurawa;

class KurawaTest extends TestCase
{
    public function testOne()
    {
        $kurawa = new Kurawa();

        $this->assertTrue($kurawa->getData("([]{}()[]{}())"));

    }

    public function testTwo()
    {
        $kurawa = new Kurawa();

        $this->assertTrue($kurawa->getData("[]"));

    }

    public function testThree()
    {
        $kurawa = new Kurawa();

        $this->assertTrue($kurawa->getData("{}"));

    }

    public function testFour()
    {
        $kurawa = new Kurawa();

        $this->assertTrue($kurawa->getData("()[]({[]})"));

    }


    public function testFive()
    {
        $kurawa = new Kurawa();

        $this->assertTrue($kurawa->getData("[({([{[([])]}])})]"));

    }

    public function testSix()
    {
        $kurawa = new Kurawa();

        $this->assertFalse($kurawa->getData("["));

    }

    public function testSeven()
    {
        $kurawa = new Kurawa();

        $this->assertFalse($kurawa->getData("([]"));

    }

    public function testEight()
    {
        $kurawa = new Kurawa();

        $this->assertFalse($kurawa->getData("()[](){"));

    }

    public function testNine()
    {
        $kurawa = new Kurawa();

        $this->assertFalse($kurawa->getData("[({([{[([)]}])})]"));

    }

    public function testTen()
    {
        $kurawa = new Kurawa();

        $this->assertFalse($kurawa->getData("[({([{[([])]}])})"));

    }

}