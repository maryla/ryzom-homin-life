<?php
/**
 *
 * display homin faction points
 */

 defined('_JEXEC') or die('Restricted access');
?>
<div class="ryzom-homin-cadre-border-bottom">
<div class="ryzom-homin-cadre-borders">
<em class="ptl"></em>
<em class="ptr"></em>
<div class="ryzom-homin-cadre">
		<?php $lFactionPs=$this->row->_Homin->getFactionPoints();		;?>
		<h3><?php echo  JText::_('ATYS_HOMIN_FACTION_POINTS') ?></h3>
		<div class="ryzom-homin-content">		
		<ul>
			<?php foreach($lFactionPs as $lFaction) :?>
				<li><span><?php echo $lFaction->getValue();?></span><?php echo $lFaction->getName();?> </li>
			<?php endforeach;?>	
		</ul>
</div></div>
<em class="pbl"></em><hr class="clear" />
<em class="pbr"></em>
<hr class="clear" />
</div>
</div>