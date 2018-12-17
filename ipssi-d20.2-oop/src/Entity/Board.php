<?php

declare(strict_types=1);

namespace Application\Entity;

interface Board
{
    public function get_Board();
    public function initialize_Board();
    public function set_Board($board);
    public function printBoard($moves);
}
