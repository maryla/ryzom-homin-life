<?php
/*
 * Created on 10 août 2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 ?>
 
<?php defined('_JEXEC') or die('Restricted access'); ?>
<div>
<h3><?php echo htmlentities(JText::_( 'ATY_HOMIN_KEYSEARCHTITLE' )); ?></h3>
<form id="searchForm" action="<?php echo JRoute::_( 'index.php?option=com_ryzomlife&controller=ryzomlife&view=ryzomlife' );?>" method="post" name="searchForm">
	<label for="key"><?php echo htmlentities(JText::_( 'ATY_HOMIN_KEYSEARCH' )); ?>: </label><input type="text" name="key" id="key" size="30" value="" class="inputbox" />
	<input type="submit" value="<?php echo htmlentities(JText::_( 'ATY_HOMIN_KEYSEARCHBUTTON' )); ?>"/>
	<input type="hidden" name="option" value="com_ryzomlife" />
	<input type="hidden" name="task" value="displayprofile" />
	
</form>
</div>
<br/><br/>

