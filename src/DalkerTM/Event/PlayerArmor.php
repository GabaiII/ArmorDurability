<?php

namespace DalkerTM\Event;

use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\event\entity\EntityArmorChangeEvent;
use pocketmine\event\Listener;
use pocketmine\Player;

class PlayerArmor implements Listener
{
    public function onArmorChange(EntityArmorChangeEvent $ev) {
        $player = $ev->getEntity();
        $Nid = $ev->getNewItem()->getID();
        $Oid = $ev->getOldItem()->getID();

        if($player instanceof Player){
            //Casque
            if($Nid === 302){
                $eff = new EffectInstance(Effect::getEffect(Effect::STRENGTH) ,  INT32_MAX, 1, false);
                $player->addEffect($eff);
                $eff = new EffectInstance(Effect::getEffect(Effect::NIGHT_VISION) ,  INT32_MAX, 1, false);
                $player->addEffect($eff);

            }elseif($Oid === 302){
                $player->removeEffect(5);
                $player->removeEffect(16);

            }

            //Plastron
            if($Nid === 303){
                $eff = new EffectInstance(Effect::getEffect(Effect::RESISTANCE) , INT32_MAX, 1, false);
                $eff = new EffectInstance(Effect::getEffect(Effect::HEALTH_BOOST) ,INT32_MAX, 3, false);
                $player->addEffect($eff);

            }elseif($Oid === 303){
                $player->removeEffect(12);
                $player->removeEffect(21);
            }

            //Jambieres
            if($Nid === 304){
                $eff = new EffectInstance(Effect::getEffect(Effect::SATURATION) , INT32_MAX, 2, false);
                $player->addEffect($eff);
            }elseif($Oid === 304){
                $player->removeEffect(3);
                $player->removeEffect(23);
            }

            //Bottes
            if($Nid === 305){
                $eff = new EffectInstance(Effect::getEffect(Effect::SPEED) , INT32_MAX, 1,false);
                $player->addEffect($eff);

            }elseif($Oid === 305){
                $player->removeEffect(1);
                $player->removeEffect(13);
            }

            if($Nid === 469){

                $player->setNameTagAlwaysVisible(false);
                $player->setNameTagVisible(false);


            } else if($Oid === 469){

                $player->setNameTagAlwaysVisible(true);
                $player->setNameTagVisible(true);

            }
        }
    }

}