<?php
/**
 *
 * @desc display homin skill tree
 
 */

 defined('_JEXEC') or die('Restricted access');
?>

<div class="ryzom-homin-skilltree">

<h3><?php echo  JText::_('ATYS_HOMIN_SKILLS') ?></h3>
<?php echo  JText::_('ATYS_HOMIN_SKILLS_DEPLOY') ?>
<?php

$lSkills = $this->row->_Homin->getSkills();
echo "<ul class=\"racine\">" ;
echo '<li class="sf"><span class="value">'.$lSkills["sf"]->getValue()."</span><span onclick=\"expandNotExpand(this)\" class=\"text\"> ".JText::_($lSkills["sf"]->getTranslation())."</span>";
$lSkills["sf"]->getChildren();
echo "</li>" ;
echo '<li class="sm"><span class="value">'.$lSkills["sm"]->getValue()."</span><span onclick=\"expandNotExpand(this)\" class=\"text\"> ".JText::_($lSkills["sm"]->getTranslation())."</span>";
$lSkills["sm"]->getChildren();
echo "</li>";
echo '<li class="sc"><span class="value">'.$lSkills["sc"]->getValue()."</span><span onclick=\"expandNotExpand(this)\" class=\"text\"> ".JText::_($lSkills["sc"]->getTranslation())."</span>";
$lSkills["sc"]->getChildren();
echo "</li>";
echo '<li class="sh"><span class="value">'.$lSkills["sh"]->getValue()."</span><span onclick=\"expandNotExpand(this)\" class=\"text\"> ".JText::_($lSkills["sh"]->getTranslation())."</span>";
$lSkills["sh"]->getChildren();
echo "</li>";
echo "</ul>";
echo '<div class="bottom"></div>';
?>
</div>
