<?php

/**
 * @desc display equipment image with tooltip
 */

defined('_JEXEC') or die('Restricted access');
$lTxt="";
$lEqu=$this->row->_Homin->getEquipment($this->_equipmentPart);
$lTxt="<img src=\"".$this->baseurl."/components/com_ryzomlife/assets/equip_".$this->_equipmentPart.".png\" />";
$lTxtInfo="";

if (!is_null($lEqu)) :
	foreach($lEqu->getAttributes() as $lKey => $lValue ) :
		switch ($lKey){
			case "_xml":
				break;
			case "":
				break;
			default:
				$lTxtInfo .= "<li>". JText::_("ATYS_HOMIN_EQUIP".strtoupper($lKey))." ".$lValue."</li>";
		}		
	endforeach;
	$lTxt =	"<a href=\"#\" class=\"tooltip\">"
			.$lEqu->getIcon()
		 	."<em><span></span>".ryzom_translate($lEqu->getXml(),$this->row->getLanguage())."<ul>".$lTxtInfo."</ul></em></a>";
endif;
	echo $lTxt;	

?>
