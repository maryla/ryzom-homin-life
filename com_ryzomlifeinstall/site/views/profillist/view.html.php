<?php
jimport( 'joomla.application.component.view');

class RyzomLifeViewProfilList extends JView
{
	function display($tpl = null)
	{
		
		// Get data from the model
		$lProfils	= & $this->get( 'Data');
		$this->assignRef('items',		$lProfils);
		
		$lists = $this->_buildSortLists();
		$this->assignRef( 'lists', $lists );
		
		
		$lDocument = & JFactory::getDocument();	
		//Add stylesheets to the document
		$lDocument->addStyleSheet('components/com_ryzomlife/assets/css/ryzomlife.css');
		$lDocument->addScript('components/com_ryzomlife/assets/js/ryzom_functions.js');
		parent::display($tpl);

	}
	/**
	 * build the sort lists
	 * @return array lists 'order' and 'order_dir'
	 **/
	function _buildSortLists()
	{
		// Table ordering values
		
		global $mainframe,$option;
		
	
		$filter_order  = $mainframe->getUserStateFromRequest($option. '.filter_order', 'filter_order', '', 'cmd');
		$filter_order_Dir = $mainframe->getUserStateFromRequest($option . '.filter_order_Dir', 'filter_order_Dir', '', 'cmd');
	
		$lists['order']     = $filter_order;
		$lists['order_Dir'] = $filter_order_Dir;
		return $lists;
	}
	
}
?>
