<?php

namespace DalkerTM;

use DalkerTM\Event\PlayerArmor;
use DalkerTM\Item\ItemManager;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onEnable()
    {
        $this->getLogger()->notice("Creator is DalkerTM");
        $this->registerEvents();
    }
    public function onLoad()
    {
        ItemManager::init();
    }

    public function registerEvents()
    {
             $event = new PlayerArmor();
            $this->getServer()->getPluginManager()->registerEvents($event,$this);
    }

}