<?php

namespace DalkerTM;

use DalkerTM\Event\PlayerArmor;
use DalkerTM\Item\ItemManager;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener
{
    public static $main;
    private $config;

    public function onEnable()
    {
        self::$main = $this;
        $this->getLogger()->notice("Creator is DalkerTM");
        $this->loadConfig();
        $this->registerEvents();
    }
    private function loadConfig(){
        if(!file_exists($this->getDataFolder()."config.yml")) {
            $this->saveResource('config.yml');
        }
        $this->config = new Config($this->getDataFolder() . 'sword.yml', Config::YAML, array(
            "Sword-id" => 352,
            "Sword-Durability" => 14,
            "Sword-Name" => "Stap",
            "Sword-Damanage" => 12
        ));
        $this->config = new Config($this->getDataFolder() . 'armor.yml', Config::YAML, array(
            "#Helmet",
            "helmet-id" => 302,
            "helmet-Durability" => 12000,
            "helmet-Name" => "Custom Helmet",
            "helmet-Defence" => 5,
            "#Chestplate",
            "chestplate-id" => 303,
            "chestplate-Durability" => 12000,
            "chestplate-Name" => "Custom ChestPlate",
            "chestplate-Defence" => 5,
            "#Leggings",
            "leggins-id" => 304,
            "leggins-Durability" => 12000,
            "leggins-Name" => "Custom Leggings",
            "leggins-Defence" => 5,
            "#Boots",
            "boots-id" => 305,
            "boots-Durability" => 12000,
            "boots-Name" => "Custom Boots",
            "boots-Defence" => 5
        ));
    }

    public function onLoad()
    {
        ItemManager::init();
    }

    private function registerEvents()
    {
             $event = new PlayerArmor();
            $this->getServer()->getPluginManager()->registerEvents($event,$this);
    }

    public static function getInstance(): Main{
        return self::$main;
}
}