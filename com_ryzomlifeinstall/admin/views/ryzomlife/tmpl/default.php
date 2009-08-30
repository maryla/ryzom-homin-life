<?php defined('_JEXEC') or die('Restricted access'); ?>
<form action="index.php" method="post" name="adminForm">
<div id="editcell">
    <table class="adminlist">
    <thead>
        <tr>
        	<th width="20">
    			<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
				</th>
        	
            <th width="5">
                <?php echo JText::_( 'ID' ); ?>
            </th>
            <th>
                <?php echo htmlentities(JText::_( 'ATYS_NAME' )); ?>
            </th>
            <th>
                <?php echo htmlentities(JText::_( 'ATYS_FULLKEY' )); ?>
            </th>            
            <th>
                <?php echo htmlentities(JText::_( 'ATYS_PARTKEY' )); ?>
            <th>
                <?php echo htmlentities(JText::_( 'ATYS_TYPEENTITY' )); ?>
            </th>                
            </th>            
        </tr>            
    </thead>
    <?php
    $k = 0;
    for ($i=0, $n=count( $this->items ); $i < $n; $i++)
    {
        $row =& $this->items[$i];
        $checked    = JHTML::_( 'grid.id', $i, $row->ryz_id );
        $link = JRoute::_( 'index.php?option=com_ryzomlife&controller=profil&task=edit&cid[]='. $row->ryz_id );
        
        ?>
        <tr class="<?php echo "row$k"; ?>">
		    <td>
		   		 <?php echo $checked; ?>
			</td>
        
            <td>
                <?php echo $row->ryz_id; ?>
            </td>
            <td>
                <a href="<?php echo $link; ?>"><?php echo $row->ryz_uid; ?></a>
            </td>
            <td>
                <?php echo ryzom_decrypt($row->ryz_hominkeyfull,$row->ryz_passphrase); ?>
            </td>
            <td>
                <?php echo ryzom_decrypt($row->ryz_hominkeypart,$row->ryz_passphrase); ?>
            </td> 
            <td>
                <?php echo (($row->ryz_typeentity==1) ?   "Homin"  :  "Guilde" ) ?>
            </td>                         
        </tr>
        <?php
        $k = 1 - $k;
    }
    ?>
    </table>
</div>
 
<input type="hidden" name="option" value="com_ryzomlife" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="profil" />
 
</form>
