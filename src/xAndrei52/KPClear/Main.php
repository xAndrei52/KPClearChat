<?php
namespace KPClear\KPClear;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\{Command, CommandSender};
use pocketmine\{Server, Player};

class Main extends PluginBase implements Listener{

       public function onEnable(){
           $this->getServer()->getPluginManager()->registerEvents($this, $this);
   }
   
   public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
       if(strtolower($command->getName()) == "ccnow"){
                  if ($sender instanceof Player) {
                  if($sender->hasPermission("clear.kpclear")){
           $senderName = $sender->getName();
           $this->getServer()->broadcastMessage("§l§6Chat is being clearing...");
           $this->getServer()->broadcastMessage("§r§bMany things may help to these...");
           $this->getServer()->broadcastMessage("§r§bLikeee:");
           $this->getServer()->broadcastMessage("§r§bAdvertise");
           $this->getServer()->broadcastMessage("§r§bSpamming");
           $this->getServer()->broadcastMessage("§r§bSwearing");
           $this->getServer()->broadcastMessage("§r§bAnd many things like these");
           $this->getServer()->broadcastMessage("§r$senderName requested and §cClearChat");
           $this->getServer()->broadcastMessage("§rJust §bwait §rpls");
           $this->getServer()->broadcastMessage("§rChat will be cleared as request of §6$senderName");
           $this->getServer()->broadcastMessage("§rLmao idk what to put here xD");
           $this->getServer()->broadcastMessage("§r§eClearing chat right now.");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§4!§c) §rClearing Chat");
           $this->getServer()->broadcastMessage("§l§c(§eKP§bClear§c) §r$senderName requested an §bclear of chat.");
           $this->getServer()->broadcastMessage("§e§lKP§bClear §rplugin modded from 0 by §bxAndrei52");
           return true;
           }
}
return true;
 }
           
           
