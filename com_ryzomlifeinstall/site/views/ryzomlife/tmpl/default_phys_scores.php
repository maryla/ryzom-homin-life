<?php

/**
 *
 * @desc display homin phsy score
 * 
 */
defined('_JEXEC') or die('Restricted access');

?>
<div class="ryzom-homin-cadre-border-bottom">
<div class="ryzom-homin-cadre-borders">
<em class="ptl"></em>
<em class="ptr"></em>
<div class="ryzom-homin-cadre">
	<h3><?php echo  JText::_('ATYS_HOMIN_PHYSSCORES') ?></h3>
<div class="ryzom-homin-content">	<div class="ryzom-scores">
	<div class="ryzom-homin-hitpoints">
		<span><?php echo JText::_('ATYS_HOMIN_PHYS_HITPOINTS');?></span>
		<?php echo $this->row->_Homin->getPhysScores()->getHitpoints()."/".$this->row->_Homin->getPhysScores()->getHitpoints_max(); ?></div>
	<div class="ryzom-homin-stamina">
		<span><?php echo JText::_('ATYS_HOMIN_PHYS_STAMINA');?></span>
		<?php echo $this->row->_Homin->getPhysScores()->getStamina()."/".$this->row->_Homin->getPhysScores()->getStamina_max(); ?></div>
	<div class="ryzom-homin-sap">
		<span><?php echo JText::_('ATYS_HOMIN_PHYS_SAP');?></span>
		<?php echo $this->row->_Homin->getPhysScores()->getSap()."/".$this->row->_Homin->getPhysScores()->getSap_max(); ?></div>
	<div class="ryzom-homin-focus">
		<span><?php echo JText::_('ATYS_HOMIN_PHYS_FOCUS');?></span>
		<?php echo $this->row->_Homin->getPhysScores()->getFocus()."/".$this->row->_Homin->getPhysScores()->getFocus_max(); ?></div>
</div></div></div>
<em class="pbl"></em><hr class="clear" />
<em class="pbr"></em>
<hr class="clear" />
</div>
</div>