<?php

declare(strict_types=1);

namespace Application\Entity;

class Check extends Initialize_Board
{

    public function check_Winner($row, $col)
    {
        if ($this->horizontalCheck($row, $col) || $this->verticalCheck($row, $col)) {
            return true;
        }
        return false;
    }

    public function horizontalCheck($row, $col)
    {
        $board = $this->get_Board();
        $player = $board[$row][$col];
        $count = 0;
        for ($i = $col; $i >= 0; $i--) {
            if ($board[$row][$i] !== $player) {
                break;
            }
            $count++;
        }
    }

    public function verticalCheck($row, $col)
    {
        if ($row >= $this->getRows() - 3) {
            return false;
        }
        return true;
    }
}