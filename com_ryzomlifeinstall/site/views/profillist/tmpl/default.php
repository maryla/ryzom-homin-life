<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php echo $this->loadTemplate('form'); ?>
<form action="<?php echo JRoute::_( 'index.php' );?>" method="post" id="adminForm" name="adminForm">
<div id="editcell">
    <table class="adminlist">
    <thead>
          <tr>

            <th class="sectiontableheader">
           		<?php echo JHTML::_( 'grid.sort', htmlentities(JText::_( 'ATYS_NAME' )), 'ryz_uid', $this->lists['order_Dir'], $this->lists['order']); ?>
           	</th>
            <th class="sectiontableheader">
                <?php echo htmlentities(JText::_( 'ATYS_FULLKEY' )); ?>
            </th>
            <th class="sectiontableheader">
                <?php echo htmlentities(JText::_( 'ATYS_PARTKEY' )); ?>
            </th>                          
            <th class="sectiontableheader">
                	<?php echo JHTML::_( 'grid.sort', htmlentities(JText::_( 'ATYS_TYPEENTITY' )), 'ryz_typeentity', $this->lists['order_Dir'], $this->lists['order']); ?>
                
            </th>            
        </tr>            
    </thead>
    <?php
    $k = 0;
    for ($i=0, $n=count( $this->items ); $i < $n; $i++)
    {
        $row =& $this->items[$i];
        $lLinkF = JRoute::_( 'index.php?option=com_ryzomlife&controller=ryzomlife&task=viewfull&view=ryzomlife&key='. $row->ryz_hominkeyfull );
        $lLinkP = JRoute::_( 'index.php?option=com_ryzomlife&controller=ryzomlife&task=viewpart&view=ryzomlife&key='. $row->ryz_hominkeypart );
        if ($row->ryz_typeentity==0) $lLinkF = JRoute::_( 'index.php?option=com_ryzomlife&controller=ryzomlife&task=viewfull&view=guild&key='. $row->ryz_hominkeyfull );
        ?>
        <tr class="sectiontableentry<?php echo "$k"; ?>">
		    
            <td>
                <?php echo $row->ryz_uid; ?>
            </td>
  			 <td>
  			 	<?php if (isset($row->ryz_hominkeyfull) && $row->ryz_hominkeyfull!=null && $row->ryz_hominkeyfull!="") :?>
               	<a href="<?php echo $lLinkF; ?>"><?php echo JText::_('_ATYS_SEE_FULLKEY');?></a>
                 <?php endif;?>
                 
            </td>
   			<td>
   				<?php if (isset($row->ryz_hominkeypart) && $row->ryz_hominkeypart!=null && $row->ryz_hominkeypart!="") :?>
                <a href="<?php echo $lLinkP; ?>"><?php echo JText::_('_ATYS_SEE_PARTKEY');?></a>
                <?php endif;?>
            </td>            
            <td>
                <?php if($row->ryz_typeentity==1) echo JText::_('_ATYS_HOMIN'); else echo JText::_('_ATYS_GUILD'); ?>
            </td>                         
        </tr>
        <?php
        $k = 1 - $k;
    }
    ?>
    </table>
</div>
<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
<input type="hidden" name="filter_order_Dir" value="" />
<input type="hidden" name="option" value="com_ryzomlife" />
<input type="hidden" name="view" value="profillist" />

 
</form>
