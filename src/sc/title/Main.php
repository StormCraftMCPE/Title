<?php

namespace sc\title;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerJoinEvent;

Class Main extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("plugin Titler Enable!");}
  
  public function onDisable(){
    $this->getLogger()->info("Titler Disable!");
    }
  public function onJoin(PlayerJoinEvent $ev){
    if($this->getServer()->get("join.title") === true)
      $player = $ev->getPlayer();
      $player->addTitle("StormCraft MCPE"); // Your Server Name
    }
   }
 }
