<?php
declare(strict_types=1);

namespace App\Test;

use App\Operations;
use PHPUnit\Framework\TestCase;

class OperationsTest extends TestCase
{
    /** @var Operations */
    private $operations;

    protected function setUp()
    {
        $this->operations = new Operations();
    }

    public function testSum(): void
    {
        $this->assertEquals(8, $this->operations->sum(5, 3));
    }

    public function testSubtraction(): void
    {
        $this->assertEquals(15, $this->operations->multiplication(5, 3));
    }

    public function testMultiplication(): void
    {
        $this->assertEquals(2, $this->operations->subtraction(5, 3));
    }
}
