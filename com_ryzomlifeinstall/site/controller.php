<?php
jimport('joomla.application.component.controller');

class RyzomLifeController extends JController
{

	function display()
	{
		
		// Set a default view if none exists
		if ( ! JRequest::getCmd( 'view' ) ) {
			JRequest::setVar('view', 'profillist' );
			JRequest::setVar('layout', 'default' );
		}
		
		if(JRequest::getVar('task')=='displayprofile'){
			$lKey = JRequest::getVar('key');
			$lLinkF = JRoute::_( 'index.php?option=com_ryzomlife&task=viewfull&view=ryzomlife&key='. ryzom_encrypt($lKey) );
        	$lLinkP = JRoute::_( 'index.php?option=com_ryzomlife&task=viewpart&view=ryzomlife&key='. ryzom_encrypt($lKey ));
        	$lLinkG = JRoute::_( 'index.php?option=com_ryzomlife&task=viewfull&view=guild&key='. ryzom_encrypt($lKey));
    		
    		if (strtoupper($lKey[0])=='F')
				$this->setRedirect(JRoute::_($lLinkF));
			else if (strtoupper($lKey[0])=='P')
				$this->setRedirect(JRoute::_($lLinkP));
				else if (strtoupper($lKey[0])=='G')
					$this->setRedirect(JRoute::_($lLinkG));
		}
		parent::display();
	}
	


}
