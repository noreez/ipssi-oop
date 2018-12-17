<?php

declare(strict_types=1);

namespace Application\Entity;

interface Check_Function
{
    public function checkWinner($row, $col);
    public function horizontalCheck($row, $col);
    public function verticalCheck($row, $col);
}