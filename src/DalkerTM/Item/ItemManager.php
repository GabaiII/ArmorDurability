<?php

namespace DalkerTM\Item;

use DalkerTM\Item\Armor\ChainBoot;
use DalkerTM\Item\Armor\ChainChestplat;
use DalkerTM\Item\Armor\ChainHelmet;
use DalkerTM\Item\Armor\ChainLeggings;
use DalkerTM\Item\Sword\BoneSword;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;

class ItemManager extends  ItemFactory
{

    public static function init()
    {
       self::registerItem(new ChainBoot, true);
       self::registerItem(new ChainChestplat(),true);
       self::registerItem(new ChainLeggings(),true);
       self::registerItem(new ChainHelmet(), true);
       self::registerItem(new BoneSword(),true);
        Item::initCreativeItems();
    }

}