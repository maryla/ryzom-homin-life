<?php
/**
 *
 * @desc display homin avatar and equipment
 */

defined('_JEXEC') or die('Restricted access');
?>	
	<div class="ryzom-homin-avatar">
		<div class="ryzom-left-items">
			<div class="ryzom-item1">
				<?php  $this->_equipmentPart="head";echo $this->loadTemplate('equipment'); ?></div>
			<div class="ryzom-item2">
				<?php  $this->_equipmentPart="chest";echo $this->loadTemplate('equipment'); ?></div>
			<div class="ryzom-item3">
				<?php  $this->_equipmentPart="legs";echo $this->loadTemplate('equipment'); ?></div>
			<div class="ryzom-item4">
				<?php  $this->_equipmentPart="feet";echo $this->loadTemplate('equipment'); ?></div>
			<div class="ryzom-item5">
				<?php  $this->_equipmentPart="wrist_l";echo $this->loadTemplate('equipment'); ?></div>
			<div class="ryzom-item6">
				<?php  $this->_equipmentPart="wrist_r";echo $this->loadTemplate('equipment'); ?></div>
			<div class="ryzom-item7">
				<?php  $this->_equipmentPart="head_dress";echo $this->loadTemplate('equipment'); ?></div>
			<div class="ryzom-item8">
				<?php  $this->_equipmentPart="necklace";echo $this->loadTemplate('equipment'); ?></div>
				<?php  //echo $this->row->_Homin->getEquipmentImage("pendant") ?>
		</div>
		<div class="ryzom-avatar-img"><?php  echo '<img src="'.$this->row->_Homin->getAvatarUrl().'" />';?></div>
		<div class="ryzom-right-items">
			<div class="ryzom-item1">
				<?php  $this->_equipmentPart="arms";echo $this->loadTemplate('equipment'); ?></div>
			<div class="ryzom-item2">
				<?php  $this->_equipmentPart="hands";echo $this->loadTemplate('equipment'); ?></div>
			<div class="ryzom-item3">
				<?php  $this->_equipmentPart="ear_l";echo $this->loadTemplate('equipment'); ?></div>
			<div class="ryzom-item4">
				<?php  $this->_equipmentPart="ear_r";echo $this->loadTemplate('equipment'); ?></div>
			<div class="ryzom-item5">
				<?php  $this->_equipmentPart="ankle_l";echo $this->loadTemplate('equipment'); ?></div>
			<div class="ryzom-item6">
				<?php  $this->_equipmentPart="ankle_r";echo $this->loadTemplate('equipment'); ?></div>
			<div class="ryzom-item7">
				<?php  $this->_equipmentPart="finger_l";echo $this->loadTemplate('equipment'); ?></div>
			<div class="ryzom-item8">
				<?php  $this->_equipmentPart="finger_r";echo $this->loadTemplate('equipment'); ?></div>
		</div>

	</div>