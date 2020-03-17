<?php

namespace DalkerTM\Item\Armor;

use pocketmine\item\ChainHelmet as CHelmet;

class ChainHelmet extends CHelmet
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