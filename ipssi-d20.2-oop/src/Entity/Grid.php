<?php

declare(strict_types=1);

namespace Application\Entity;

interface Grid
{
    public function setRows($rows);
    public function setColumns($col);
    public function getRows();
    public function getColumns();
}