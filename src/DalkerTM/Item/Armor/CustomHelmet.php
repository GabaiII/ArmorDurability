<?php

namespace DalkerTM\Item\Armor;

use pocketmine\item\Armor;
use pocketmine\item\ChainHelmet as CHelmet;
use pocketmine\utils\Config;

class CustomHelmet extends Armor
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
        $id = $this->getData()->get("helmet-id");
        $name = $this->getData()->get("helmet-Name");
        parent::__construct($id, $meta, $name);
    }

    public function getDefensePoints(): int
    {
        $def = $this->getData()->get("helmet-Defence");
        return $def;
    }

    public function getMaxDurability(): int
    {
        $dura = $this->getData()->get("helmet-Durability");
        return $dura;
    }

}