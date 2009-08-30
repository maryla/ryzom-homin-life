<?php
jimport( 'joomla.application.component.view');

class RyzomLifeViewGuild extends JView
{
	function display($tpl = null)
	{
		
		$model = &$this->getModel();
		$lKey=null;
		$lKey = JRequest::getVar('key');
		$model->setGuild($lKey);
		
		
		//Get document object
		$lDocument = & JFactory::getDocument();	
		//Add stylesheets to the document
		$lDocument->addStyleSheet('components/com_ryzomlife/assets/css/ryzomlife.css');
		$lDocument->addScript('components/com_ryzomlife/assets/js/ryzom_functions.js');
		$this->assignRef( 'row', $model );
		parent::display($tpl);

	}
	
	
}
?>