namespace booty;
using pocketmine\item\Stick;
using pocketmine\entity\PrimedTNT;
using pocketmine\Player;
using pocketmine\plugin\PluginBase;

class Main extends PluginBase{

public function onEnable(){
$this->getLogger()->info("Boots are being strapped on!");
}

public function Kabeeem(PlayerInteractionEvent $event){
$boo = getPlayer()->getInventory()->getIteminHand()->getId();
if($boo = 280){
