<?php

namespace DalkerTM\Item\Sword;

use DalkerTM\Main;
use pocketmine\entity\Entity;
use pocketmine\item\Tool;
use pocketmine\utils\Config;

class CustomSword extends Tool{
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

    public function __construct($meta = 0, $count = 1){
        $this->setData(new Config("plugin_data\ArmorDurability\sword.yml", Config::YAML));
        $id = $this->getData()->get("Sword-id");
        $name = $this->getData()->get("Sword-Name");
        parent::__construct($id, $meta, $name);

    }

    public function getMaxDurability(): int
    {
        $dura = $this->getData()->get("Sword-Durability");
        return $dura;
    }

    public function getAttackPoints(): int{
        $dam = $this->getData()->get("Sword-Damanage");
        return $dam;
    }

    public function getMaxStackSize(): int{
        return 1;
    }
    public function onAttackEntity(Entity $victim): bool{
        return $this->applyDamage(1);
    }
}