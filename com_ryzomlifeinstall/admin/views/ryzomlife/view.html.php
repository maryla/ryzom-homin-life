<?php

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view' );

class RyzomLifeViewRyzomLife extends JView
{
	/**
	 * RyzomLife view display method
	 * @return void
	 **/
	function display($tpl = null)
	{
		JToolBarHelper::title(   JText::_( 'ATYS_RYZOM_LIFE' ), 'generic.png' );
		JToolBarHelper::deleteList();
		JToolBarHelper::editListX();
		JToolBarHelper::addNewX();

		// Get data from the model
		$items		= & $this->get( 'Data');

		$this->assignRef('items',		$items);

		parent::display($tpl);
	}
}


