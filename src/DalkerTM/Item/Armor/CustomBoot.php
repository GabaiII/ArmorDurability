<?php

namespace DalkerTM\Item\Armor;

use pocketmine\item\Armor;
use pocketmine\utils\Config;

class CustomBoot extends Armor
{
    private $config;

    /**
     * @param mixed $config
     */
    public function setData(Config $config): void
    {
        $this->config = $config;
    }

    public function getData(): Config
    {
        return $this->config;
    }

    public function __construct(int $meta = 0)
    {
        $this->setData(new Config("plugin_data\ArmorDurability\armor.yml", Config::YAML));
        $id = $this->getData()->get("boots-id");
        $name = $this->getData()->get("boots-Name");
        parent::__construct($id, $meta, $name);
    }

    public function getDefensePoints(): int
    {
        $def = $this->getData()->get("boots-Defence");
        return $def;
    }

    public function getMaxDurability(): int
    {
        $dura = $this->getData()->get("boots-Durability");
        return $dura;
    }

}