<?php

namespace DalkerTM\Item\Food;
use pocketmine\item\Food;

class SweetBerries extends Food
{
    public function __construct(int $id = self::SWEET_BERRIES, int $meta = 0, string $name = "Sweet Berries")
    {
        parent::__construct($id, $meta, $name);
    }
    public function getFoodRestore(): int
    {
        return 9.4;
    }

    public function getSaturationRestore(): float
    {
        return 6.4;
    }

}