<?php
/**
 * @desc display homin inventories
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
		$lInvs = $this->row->_Homin->getInventories();
		$lDivInventory=$lTabMenu="";
		$lCpt=0;
		$this->_inventory=true;
		$this->_equipmentPart=null;
		foreach($lInvs as $lKey => $lValue) : 
			if ($lCpt==0) $lClass="activ";else $lClass="";
			$lTabMenu .="<li class=\"$lKey\"><a id=\"link-$lKey\" class=\"$lClass\" nohref onclick=\"javascript:displayTabPage(this,'inv-".$lKey."');\">".JText::_('ATYS_HOMIN_INVENTORY_'.strtoupper($lKey))."</a></li>";
			$lDivInventory.='<div id="inv-'.$lCpt++.'" class="inv-'.$lKey.'">';
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
			
			//build the item list of the current contener
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
							$lTxtInfo .= "<li>". JText::_("ATYS_HOMIN_EQUIP".strtoupper($lKey))." ".$lValue."</li>";
					}		
				 endforeach;
				$lDivInventory .=	"<a href=\"javascript:return false;\" class=\"tooltip\">"
						.$lItem->getIcon()
					 	."<em><span></span>".ryzom_translate($lItem->getXml(),$this->row->getLanguage())."<ul>".$lTxtInfo."</ul></em></a>";
					 	
					 	
			endforeach;
			$lDivInventory.="</div>";
		endforeach;?>
	<?php echo "<ul class=\"menu\">$lTabMenu</ul>";?>
	<?php echo $lDivInventory;?>
</div>
<em class="pbl"></em><hr class="clear" />
<em class="pbr"></em>
<hr class="clear" />
</div>
</div>