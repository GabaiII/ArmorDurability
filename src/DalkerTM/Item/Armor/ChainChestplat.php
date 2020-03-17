<?php

namespace DalkerTM\Item\Armor;

use pocketmine\item\ChainChestplate as CChestplate;

class ChainChestplat extends CChestplate
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