<?php
/**
 *
 * @desc display homin phys char
 */

 defined('_JEXEC') or die('Restricted access');
?>
<div class="ryzom-homin-cadre-border-bottom">
<div class="ryzom-homin-cadre-borders">
<em class="ptl"></em>
<em class="ptr"></em>
<div class="ryzom-homin-cadre">

		<?php $lPhysChar=$this->row->_Homin->getPhysCharac();		?>
		<h3><?php echo  JText::_('ATYS_HOMIN_CARAC') ?></h3>
		<div class="ryzom-homin-content">	
		<ul>
			<li><span><?php echo $lPhysChar->getConstitution(); ?></span><?php echo JText::_('ATYS_HOMIN_PHYSC_CONSTITUTION');?></li>
			<li><span><?php echo $lPhysChar->getMetabolism(); ?></span><?php echo JText::_('ATYS_HOMIN_PHYSC_METABOLISME');?></li>
			<li><span><?php echo $lPhysChar->getIntelligence(); ?></span><?php echo JText::_('ATYS_HOMIN_PHYSC_INTELLIGENCE');?></li>
			<li><span><?php echo $lPhysChar->getWisdom(); ?></span><?php echo JText::_('ATYS_HOMIN_PHYSC_WISDOM');?></li>
			<li><span><?php echo $lPhysChar->getStrength(); ?></span><?php echo JText::_('ATYS_HOMIN_PHYSC_STRENGH');?></li>
			<li><span><?php echo $lPhysChar->getWellBalanced(); ?></span><?php echo JText::_('ATYS_HOMIN_PHYSC_WELLBALANCED');?></li>
			<li><span><?php echo $lPhysChar->getDexterity(); ?></span><?php echo JText::_('ATYS_HOMIN_PHYSC_DEXTERITY');?></li>
			<li class="last"><span><?php echo $lPhysChar->getWill(); ?></span><?php echo JText::_('ATYS_HOMIN_PHYSC_WILL');?></li>
			
		</ul>
</div></div>
<em class="pbl"></em><hr class="clear" />
<em class="pbr"></em>
<hr class="clear" />
</div>
</div>