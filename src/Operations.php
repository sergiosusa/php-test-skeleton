<?php
declare(strict_types=1);

namespace App;

class Operations
{
    public function sum(int $x, int $y): int
    {
        return $x + $y;
    }

    public function subtraction(int $x, int $y): int
    {
        return $x - $y;
    }

    public function multiplication(int $x, int $y): int
    {
        return $x * $y;
    }
}
