<?php

declare(strict_types=1);

namespace Application\Service;

use Application\Entity\PlayerMove;

class ConnectFourGame extends PlayerMove
{

    function __construct($rows = 6, $cols = 7)
    {
        $this->setDimensions($rows, $cols);
    }

    protected function Game()
    {
        $this->initialize_Board();

        $this->set_Player(rand(1, 2));

        $this->move();
    }
}