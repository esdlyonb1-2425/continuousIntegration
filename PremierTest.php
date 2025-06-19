<?php

namespace App\Tests;

use App\Entity\Machin;
use PHPUnit\Framework\TestCase;

class PremierTest extends TestCase
{
    public function testSomething(): void
    {
        $this->assertTrue(true);
    }
    public function testMachinEntity(): void
    {
        $machin = new Machin();
        $machin->setName("premier machin");

        $this->assertTrue($machin->getName() === "premier machin");
    }
}
