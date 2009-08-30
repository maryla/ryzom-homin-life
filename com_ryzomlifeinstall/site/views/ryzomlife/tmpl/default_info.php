<?php

/**
 *
 * @desc display homin info
 */

defined('_JEXEC') or die('Restricted access');

?>
<div class="ryzom-homin-cadre-border-bottom">
<div class="ryzom-homin-cadre-borders">
<em class="ptl"></em>
<em class="ptr"></em>
<div class="ryzom-homin-cadre">
			<h3><?php echo  "Info" ?></h3>
			<div class="ryzom-homin-content">
			<ul>
				<li>
					<?php echo "<span>".  $this->row->_Homin->getRace()."</span> ". JText::_('ATYS_HOMIN_RACE');?>
				</li>
				<li>
					<?php echo "<span>".   $this->row->_Homin->getGender()."</span> ". JText::_('ATYS_HOMIN_GENDER');?>
				</li>
				<li>
					<?php echo "<span>".  $this->row->_Homin->getShard()."</span> ".  JText::_('ATYS_HOMIN_SHARD');?>
				</li>
				
				<?php if(JRequest::getVar('task')=='viewfull') :?>
				<?php if ($this->row->_Homin->getPosition()!=null) :?>
				<li style="line-height:28px;">
					<?php 
					$lUrl="components/com_ryzomlife/coord/mymap.html?x=".$this->row->_Homin->getPosition()->getX()."&y=".$this->row->_Homin->getPosition()->getY();
					$lCoordonnees="X:".$this->row->_Homin->getPosition()->getX()." Y:".$this->row->_Homin->getPosition()->getY();
					?>
					<span>
						<a onclick="openMapAjaxWindows('<?php echo $lUrl?>')" alt="<?php echo $lCoordonnees;?>" nohref="">
							<img src="components/com_ryzomlife/assets/icon/carte.png" alt="<?php echo $lCoordonnees;?>" />
						</a>
					</span>
					<?php echo   JText::_('ATYS_HOMIN_POSITION');	?>
					
		
				</li>	
				<?php endif; ?>
				<li>
					<?php echo "<span>".  $this->row->_Homin->getMoney()."</span> ".  JText::_('ATYS_HOMIN_MONEY');?>
				</li>
				<li>
					<?php echo "<span>".  $this->row->_Homin->getCult()."</span> ".  JText::_('ATYS_HOMIN_CULT');?>
				</li>
				<li>
					<?php echo "<span>".  $this->row->_Homin->getCiv()."</span> ".  JText::_('ATYS_HOMIN_CIV');?>
				</li>
				<?php endif;?>								
			</ul>
</div></div>
<em class="pbl"></em><hr class="clear" />
<em class="pbr"></em>
<hr class="clear" />
</div>
</div>	
