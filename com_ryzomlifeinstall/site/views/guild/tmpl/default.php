<?php defined('_JEXEC') or die('Restricted access'); ?>
<div class="ryzom">

	<em class="ptl"><!----></em>
	<em class="ptr"><!----></em>
	<div class="ryzom-main">
		<div class="header">
			<div class="guild-icon"><?php echo ryzom_guild_icon_image($this->row->_Guild->getIcon(), 'b') ?></div>
			
			<h1 class="ryzom-homin-name">
			<img title="<?php echo  $this->row->_Guild->getName(); ?>" alt="<?php echo  $this->row->_Guild->getName(); ?>"
			src="<?php echo $this->baseurl; ?>/components/com_ryzomlife/views/ryzomlife/tmpl/generate_image.php?ur=<?php echo $this->row->_Guild->getRace()?>&ut=<?php echo $this->row->_Guild->getName()?>&us=40" />
			</h1>
			<span><?php echo $this->row->_Guild->getRace();?></span>
		</div>
		<hr class="clear" />
		<div class="ryzom_homin_left">
			<?php echo $this->loadTemplate('info'); ?>
			<?php echo $this->loadTemplate('fames'); ?>
			
		</div>
		<div class="ryzom_homin_middle" id="guild-middle">
			<?php echo $this->loadTemplate('members'); ?>
			<?php echo $this->loadTemplate('inventory'); ?>
		</div>


		<hr class="clear" />
		
		<hr class="clear" />
</div>
</div>