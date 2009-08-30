<?php
/**
 *
 * display homin inventories
 * @version $Id$
 * @copyright 2009
 */
 defined('_JEXEC') or die('Restricted access');
?>
<div class="ryzom-homin-inventories-border-bottom">
<div class="ryzom-homin-inventories-borders">
	<em class="ptl"></em>
	<em class="ptr"></em>
	<div class="ryzom-homin-inventories">
	<h3><?php echo  JText::_('ATYS_HOMIN_INVENTORY'); ?></h3>
	<?php 
		$lValue = $this->row->_Guild->getInventoryRoom();
		$lDivInventory="";
		$lCpt=0;
		//Sort the item list
		$sort_name=array();
		$sort_quality=array();
		$sort_type=array();
		foreach($lValue as $lItem) :
			 $sort_name[]=ryzom_translate($lItem->getXml(),$this->row->getLanguage());
			 $sort_quality[]=$lItem->getQ();
			 $sort_type[]=$lItem->getType();
		endforeach;
		array_multisort($sort_type,SORT_ASC,$sort_name,SORT_ASC,$sort_quality,SORT_ASC,$lValue);
			
		//build the item list of the room
		foreach($lValue as $lItem) : 
			
			 $lTxtInfo="";
			 //Build the tooltips
			 foreach($lItem->getAttributes() as $lKey => $lValue ) :
				switch ($lKey){
					case "_xml":
						break;
					case "":
						break;
					default:
						$lTxtInfo .= "<li>". htmlentities(JText::_("ATYS_HOMIN_EQUIP".strtoupper($lKey)))." ".htmlentities($lValue)."</li>";
				}		
			 endforeach;
			$lDivInventory .=	'<a href="javascript:return false;" class="tooltip">'
						.$lItem->getIcon()
					 	."<em><span></span>".ryzom_translate($lItem->getXml(),$this->row->getLanguage())."<ul>".$lTxtInfo."</ul></em></a>";
					 	
					 	
		endforeach;
	 echo $lDivInventory;?>
	</div>
	<em class="pbl"></em>
	<hr class="clear" />
	<em class="pbr"></em>
	<hr class="clear" />
</div>
</div>