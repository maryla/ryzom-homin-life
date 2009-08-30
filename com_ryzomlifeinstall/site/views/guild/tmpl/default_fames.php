<?php
/*
 * Created on 14 ao�t 2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 defined('_JEXEC') or die('Restricted access');
?>
<div class="ryzom-homin-cadre-border-bottom">
<div class="ryzom-homin-cadre-borders">
	<em class="ptl"></em>
	<em class="ptr"></em>
	<div class="ryzom-homin-cadre">
			<?php $lFames=$this->row->_Guild->getFames();		;?>
			<h3><?php echo  htmlentities(JText::_('ATYS_HOMIN_FAMES')) ?></h3>
			<div class="ryzom-homin-content">		
			<ul>
				<?php foreach($lFames as $lFame) :?>
					<li><span><?php echo (int)($lFame->getValue()/6000);?></span><?php echo $lFame->getName();?> </li>
				<?php endforeach;?>	
			</ul>
			</div>
	</div>
	<em class="pbl"></em>
	<hr class="clear" />
	<em class="pbr"></em>
	<hr class="clear" />
</div>
</div>