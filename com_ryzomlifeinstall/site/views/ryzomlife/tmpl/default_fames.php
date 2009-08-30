<?php
/**
 *
 * @desc display homin fames
 */

 defined('_JEXEC') or die('Restricted access');
?>
<div class="ryzom-homin-cadre-border-bottom">
<div class="ryzom-homin-cadre-borders">
<em class="ptl"></em>
<em class="ptr"></em>
<div class="ryzom-homin-cadre">
		<?php $lFames=$this->row->_Homin->getFames();		;?>
		<h3><?php echo  JText::_('ATYS_HOMIN_FAMES') ?></h3>
		<div class="ryzom-homin-content">		
		<ul>
			<?php foreach($lFames as $lFame) :?>
				<li><span><?php echo (int)($lFame->getValue()/6000);?></span><?php echo $lFame->getName();?> </li>
			<?php endforeach;?>	
		</ul>
</div></div>
<em class="pbl"></em><hr class="clear" />
<em class="pbr"></em>
<hr class="clear" />
</div>
</div>
