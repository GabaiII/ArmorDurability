<?php

namespace DalkerTM\Item\Armor;

use pocketmine\item\ChainBoots as CBoots;

class ChainBoot extends CBoots
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