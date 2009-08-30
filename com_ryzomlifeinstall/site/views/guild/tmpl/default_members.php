<?php defined('_JEXEC') or die('Restricted access'); ?>
	<div class="ryzom-homin-cadre-border-bottom">
	<div class="ryzom-homin-cadre-borders">
	<em class="ptl"></em>
	<em class="ptr"></em>
	<div class="ryzom-homin-cadre">
				<h3><?php echo htmlentities(JText::_('ATYS_GUILD_MEMBERS'));?></h3>
				<div class="ryzom-homin-content">
<?php 
$lMembers=$this->row->_Guild->getMembers();
if(sizeOf($lMembers) >0) :
?>
	<ul>
	<?php foreach($lMembers as $lMember) :
		$lLink=null;
		if($lMember->getKeyF()!=null)
	 		$lLink = JRoute::_( 'index.php?option=com_ryzomlife&controller=ryzomlife&task=viewfull&view=ryzomlife&key='. $lMember->getKeyF());
	 	else if($lMember->getKeyP()!=null)
	 		$lLink = JRoute::_( 'index.php?option=com_ryzomlife&controller=ryzomlife&task=viewpart&view=ryzomlife&key='. $lMember->getKeyP());
	
	?>
		<li><?php 
				echo $lMember->getGrade(). " - ";
				if(isset($lLink) )
					echo '<a href="'.$lLink.'">'.$lMember->getName()."</a>";
				else 
					echo $lMember->getName();
				echo " - ". htmlentities(JText::_('ATYS_GUILD_MEMBERS_REC'))." ".ryzom_time_txt(ryzom_time_array($lMember->getJoinDate(), ''));
			?></li>
	<?php endforeach; ?>
	</ul>
<?php endif; ?>
	</div></div>
	<em class="pbl"></em><hr class="clear" />
	<em class="pbr"></em>
	<hr class="clear" />
	</div>
	</div>