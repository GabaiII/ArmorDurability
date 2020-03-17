<?php

namespace DalkerTM\Item\Sword;

use pocketmine\entity\Entity;
use pocketmine\item\Tool;

class BoneSword extends Tool{

    public function __construct($meta = 0, $count = 1){
        parent::__construct(self::BONE, $meta, "Sword Custom");

    }

    public function getMaxDurability(): int
    {
        return 1200;
    }

    public function getAttackPoints(): int{
        return 12;
    }

    public function getMaxStackSize(): int{
        return 1;
    }

    public function onAttackEntity(Entity $victim): bool{
        return $this->applyDamage(1);
    }
}