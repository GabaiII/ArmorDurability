<?php

namespace DalkerTM\Item;

use DalkerTM\Item\Armor\CustomBoot;
use DalkerTM\Item\Armor\CustomChestplat;
use DalkerTM\Item\Armor\CustomHelmet;
use DalkerTM\Item\Armor\CustomLeggings;
use DalkerTM\Item\Food\SweetBerries;
use DalkerTM\Item\Sword\CustomSword;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;

class ItemManager extends  ItemFactory
{

    public static function init()
    {
       self::registerItem(new CustomBoot, true);
       self::registerItem(new CustomChestplat(),true);
       self::registerItem(new CustomLeggings(),true);
       self::registerItem(new CustomHelmet(), true);
       self::registerItem(new CustomSword(),true);
        self::registerItem(new SweetBerries(),true);
        Item::initCreativeItems();
    }

}