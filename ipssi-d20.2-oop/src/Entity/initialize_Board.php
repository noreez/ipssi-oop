<?php

declare(strict_types=1);

namespace Application\Entity;

class initialize_Board extends Player implements Grid, Board
{

    protected $columns = 7;
    protected $rows = 6;
    protected $board = array();


    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    public function getRows()
    {
        return $this->rows;
    }

    public function setColumns($col)
    {
        $this->columns = $col;
    }

    public function getColumns()
    {
        return $this->columns;
    }

    public function setDimensions($rows, $cols)
    {
        if (!isset($rows)) return;
        $this->setRows($rows);
        $this->setColumns($cols === null ? $rows : $cols);
    }

    public function set_Board($board_a)
    {
        $this->board = $board_a;
    }

    public function get_Board()
    {
        return $this->board;
    }

    public function initialize_Board()
    {

        $board = array();
        for ($i = 0; $i < $this->getRows(); $i++) {
            $board[$i] = array();
            for ($j = 0; $j < $this->getColumns(); $j++) {
                $board[$i][$j] = -1;
            }
        }
        $this->set_Board($board);
    }

}