<?php defined('_JEXEC') or die('Restricted access'); ?>
<hr class="clear" />
	<div class="ryzom-homin-cadre-border-bottom">
	<div class="ryzom-homin-cadre-borders">
		<em class="ptl"></em>
		<em class="ptr"></em>
		<div class="ryzom-homin-cadre">
				<h3><?php echo htmlentities(JText::_('ATYS_GUILD_INFO'));?></h3>
				<div class="ryzom-homin-content">
				<ul>
				<li><span><?php echo ryzom_time_txt(ryzom_time_array($this->row->_Guild->getCreationDate(), ''))?></span> 
					<?php echo htmlentities(JText::_('ATYS_GUILD_CREATEDATE'));?></li>
				<li><span><?php echo $this->row->_Guild->getCult(); ?></span> 
					<?php echo htmlentities(JText::_('ATYS_HOMIN_CULT'));?></li>
				<li><span><?php echo $this->row->_Guild->getCivilisation(); ?></span> 
					<?php echo htmlentities(JText::_('ATYS_HOMIN_CIV'));?></li>
				<li><span><?php echo $this->row->_Guild->getShard(); ?></span> 
					<?php echo htmlentities(JText::_('ATYS_HOMIN_SHARD'));?></li>
				<li><span><?php echo $this->row->_Guild->getMoney(); ?></span> 
					<?php echo htmlentities(JText::_('ATYS_HOMIN_MONEY'));?></li>
				<li><span><?php echo $this->row->_Guild->getDescription(); ?></span> 
					<?php echo htmlentities(JText::_('ATYS_GUILD_DESC'));?></li>
			
				</ul>
				</div>
		</div>
		<em class="pbl"></em>
		<hr class="clear" />
		<em class="pbr"></em>
		<hr class="clear" />
	</div>
</div>