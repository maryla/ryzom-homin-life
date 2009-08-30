<?php defined('_JEXEC') or die('Restricted access'); ?>
  
<form action="index.php" method="post" name="adminForm" id="adminForm">
<div class="col100">
    <fieldset class="adminform">
        <legend><?php echo JText::_( 'Details' ); ?></legend>
        <table class="admintable">
        <tr>
            <td width="100" align="right" class="key">
                <label for="ryz_uid">
                    <?php echo htmlentities(JText::_( 'ATYS_NAME' )); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="ryz_uid" id="ryz_uid" size="32" maxlength="250" value="<?php echo $this->ryzom->ryz_uid;?>" />
            </td>
        </tr>
     
        <tr>
            <td width="100" align="right" class="key">
                <label for="ryz_hominkeyfull">
                    <?php echo htmlentities(JText::_( 'ATYS_FULLKEY' )); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="ryz_hominkeyfull" id="ryz_hominkeyfull" size="32" maxlength="250" value="<?php echo ryzom_decrypt($this->ryzom->ryz_hominkeyfull);?>" />
            </td>
        </tr>
        <tr>
            <td width="100" align="right" class="key">
                <label for="ryz_hominkeypart">
                    <?php echo htmlentities(JText::_( 'ATYS_PARTKEY' )); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="ryz_hominkeypart" id="ryz_hominkeypart" size="32" maxlength="250" value="<?php echo ryzom_decrypt($this->ryzom->ryz_hominkeypart);?>" />
               
            </td>
        </tr>
        <tr>
            <td width="100" align="right" class="key">
                <label for="ryz_typeentity">
                    <?php echo JText::_( 'ATYS_TYPEENTITY' ); ?>:
                </label>
            </td>
            <td>
                <select id="ryz_typeentity" name="ryz_typeentity">
                	<option value="0" <?php if ($this->ryzom->ryz_typeentity==0) echo "selected";?>> <?php echo JText::_( 'ATYS_GUILD' ); ?></option>
                	<option value="1" <?php if ($this->ryzom->ryz_typeentity==1) echo "selected";?>> <?php echo JText::_( 'ATYS_HOMIN' ); ?></option>
                </select>
                
            </td>
        </tr>                        
    </table>
    </fieldset>
</div>
 
<div class="clr"></div>
<input type="hidden" name="ryz_passphrase" value="" />
<input type="hidden" name="option" value="com_ryzomlife" />
<input type="hidden" name="ryz_id" value="<?php echo $this->ryzom->ryz_id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="profil" />
</form>
