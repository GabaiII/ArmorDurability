<?php

namespace DalkerTM\Item\Armor;

use pocketmine\item\ChainLeggings as CLeggings;

class ChainLeggings extends CLeggings
{

    public function getDefensePoints(): int
    {
        return 5;
    }

    public function getMaxDurability(): int
    {
        return 1560;
    }
}