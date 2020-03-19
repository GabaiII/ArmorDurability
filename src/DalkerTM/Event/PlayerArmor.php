<?php

namespace DalkerTM\Event;

use DalkerTM\Main;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\event\entity\EntityArmorChangeEvent;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\utils\Config;

class PlayerArmor implements Listener
{
    //Credit MoonLy-Dev trop la flemme a la refaire XD
    private $config;

    public function setData(Config $config): void
    {
        $this->config = $config;
    }

    public function getData(): Config
    {
        return $this->config;
    }

    public function PlayerArmor(EntityArmorChangeEvent $event)
    {
        $this->setData(new Config(Main::getInstance()->getDataFolder() . 'config.yml', Config::YAML));

        $player = $event->getEntity();

        if ($player instanceof Player) {

            $new = $event->getNewItem();
            $old = $event->getOldItem();
            $id = Item::fromString($this->getData()->get("item"));
            $configs = $this->getData()->getAll();
            $ids = array_keys($configs);

            if($new->getId() === $id->getId() && $new->getDamage() === $id->getDamage()){

                $player->setNameTagVisible(false);

            } else if($old->getId() === $id->getId() && $old->getDamage() === $id->getDamage()){

                $player->setNameTagVisible(true);

            }

            if (in_array($new->getId(), $ids)) {

                $array = $this->getData()->getAll()[$new->getId()];

                $effects = $array["effect"];

                foreach ($effects as $effectid => $arrayeffect) {

                    $eff = new EffectInstance(
                        Effect::getEffect($effectid),
                        INT32_MAX,
                        (int)$arrayeffect["amplifier"],
                        (bool)$arrayeffect["visible"]
                    );

                    $player->addEffect($eff);

                }

            } else if (in_array($old->getId(), $ids)) {

                $array = $this->getData()->getAll()[$old->getId()];
                $effects = $array["effect"];

                foreach ($effects as $effectid => $arrayeffect) {

                    $player->removeEffect($effectid);

                }

            }
        }

        $player = $event->getEntity();
        $new = $event->getNewItem();
        $old = $event->getOldItem();


        if ($player instanceof Player) {



        }
    }

}