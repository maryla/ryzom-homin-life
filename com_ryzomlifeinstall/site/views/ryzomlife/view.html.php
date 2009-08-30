<?php
jimport( 'joomla.application.component.view');

class RyzomLifeViewRyzomLife extends JView
{
	function display($tpl = null)
	{
		
		$model = &$this->getModel();
		
		
		$lKey=null;
		$lKey = JRequest::getVar('key');
		
		$model->setHomin($lKey);
		
		
		
		//Get document object
		$lDocument = & JFactory::getDocument();	
		//Add stylesheets & js to the document
		$lDocument->addStyleSheet('components/com_ryzomlife/assets/css/ryzomlife.css');
		$lDocument->addScript('components/com_ryzomlife/assets/js/ryzom_functions.js');
		// Add windows stylesheet & js
		$lDocument->addScript('components/com_ryzomlife/assets/js/windows_js/prototype.js');
		$lDocument->addScript('components/com_ryzomlife/assets/js/windows_js/window.js');
		$lDocument->addStyleSheet('components/com_ryzomlife/assets/css/default.css');
		$lDocument->addStyleSheet('components/com_ryzomlife/assets/css/alphacube.css');
		
		$this->assignRef( 'row', $model );
		parent::display($tpl);

	}
}
?>
