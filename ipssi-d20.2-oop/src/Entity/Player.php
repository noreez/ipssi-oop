<?php

declare(strict_types=1);

namespace Application\Entity;

class Player
{

    protected $actual = 0;

    protected function get_Player()
    {
        return $this->current_player;

    }

    protected function set_Player($player_no)
    {

        $this->current_player = $player_no;

    }
}