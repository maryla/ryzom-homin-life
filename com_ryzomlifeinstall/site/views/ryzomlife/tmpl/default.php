<?php 
/**
 *
 * @desc display homin full or partial
 * 
 */
defined('_JEXEC') or die('Restricted access');

?>


<div class="ryzom">

	<em class="ptl"><!----></em>
	<em class="ptr"><!----></em>
	
	<div class="ryzom-main">
	
<div class="ryzom-homin-header">
<img id="img-race" src="<?php echo $this->baseurl; ?>/components/com_ryzomlife/assets/icon/ico_rond_<?php echo strtolower($this->row->_Homin->getRace());?>.png" />

<h1 class="ryzom-homin-name">
	<img title="<?php echo  $this->row->_Homin->getName(); ?>" alt="<?php echo  $this->row->_Homin->getName(); ?>"
	src="<?php echo $this->baseurl; ?>/components/com_ryzomlife/views/ryzomlife/tmpl/generate_image.php?ur=<?php echo $this->row->_Homin->getRace()?>&ut=<?php echo $this->row->_Homin->getName()?>&us=40" />
</h1>
<span class="ryzom-homin-title"><?php echo  $this->row->_Homin->getTitle();?></span>
<?php if (($this->row->_Homin->getGuild()!=null)) : ?>
	<?php $lGuildName=$this->row->_Homin->getGuild()->getName();?>
	<span class="ryzom-homin-guild">
	<img src="<?php echo ryzom_guild_icon_url($this->row->_Homin->getGuild()->getIcon(),'s');?>" alt="<?php echo $lGuildName; ?>" title="<?php echo $lGuildName; ?>" />
	<?php echo  $lGuildName;?>
	</span>
<?php endif;?>

</div>

<div class="ryzom-homin-profile">
	<?php if(JRequest::getVar('task')=='viewfull') :?>
	<ul class="menu">
		<li><a id="link-ryzom_homin_left" class="activ" href="javascript:return false" onclick="javascript:displaySimpleTabPage(this,'link-ryzom_homin_middle','ryzom_homin_left','ryzom_homin_middle');">Informations</a></li>
		<li><a id="link-ryzom_homin_middle" class=""  href="javascript:return false" onclick="javascript:displaySimpleTabPage(this,'link-ryzom_homin_left','ryzom_homin_middle','ryzom_homin_left');">Stat</a></li>
	</ul>
	<?php endif;?>
	<div class="ryzom_homin_left" id="ryzom_homin_left">
		<?php echo $this->loadTemplate('info');?>
		<?php if(JRequest::getVar('task')=='viewfull') :
			echo $this->loadTemplate('phys_scores'); 
			echo $this->loadTemplate('phys_charac');			
		endif;?>
	</div>
	
	<?php if(JRequest::getVar('task')=='viewfull') :?>
		<div id="ryzom_homin_middle" class="ryzom_homin_middle">
		<?php
			echo $this->loadTemplate('faction_points');
			echo $this->loadTemplate('fames');
		?>
		</div>
	<?php endif; ?>
	
	<?php echo $this->loadTemplate('avatar'); ?>
</div>
<hr class="clear" />
<?php if(JRequest::getVar('task')=='viewfull') echo $this->loadTemplate('skilltree'); ?>
<?php if(JRequest::getVar('task')=='viewfull') echo $this->loadTemplate('inventories'); ?>
<br/>
<em class="pbl2"><!----></em>
<em class="pbr2"><!----></em>
</div>

</div>

