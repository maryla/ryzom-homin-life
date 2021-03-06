<?php
/**
 * Hello Controller for Hello World Component
 * 
 * @license		GNU/GPL
 */

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 * Hello Hello Controller
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class RyzomLifeControllerProfil extends RyzomLifeController
{
	/**
	 * constructor (registers additional tasks to methods)
	 * @return void
	 */
	function __construct()
	{
		parent::__construct();

		// Register Extra tasks
		$this->registerTask( 'add','edit' );
	}

	/**
	 * display the edit form
	 * @return void
	 */
	function edit()
	{
		JRequest::setVar( 'view', 'profil' );
		JRequest::setVar( 'layout', 'form'  );
		JRequest::setVar('hidemainmenu', 1);

		parent::display();
	}

	/**
	 * save a record (and redirect to main page)
	 * @return void
	 */
	function save()
	{
		$model = $this->getModel('profil');

		if ($model->store($post)) {
			$msg = JText::_( 'Profil Saved!' );
		} else {
			$msg = JText::_( 'Error Saving Profil' );
		}

		// Check the table in so it can be edited.... we are done with it anyway
		$link = 'index.php?option=com_ryzomlife';
		$this->setRedirect($link, $msg);
	}

	/**
	 * remove record(s)
	 * @return void
	 */
	function remove()
	{
		$model = $this->getModel('profil');
		if(!$model->delete()) {
			$msg = JText::_( 'Error: One or More Profil Could not be Deleted' );
		} else {
			$msg = JText::_( 'Profil(s) Deleted' );
		}

		$this->setRedirect( 'index.php?option=com_ryzomlife', $msg );
	}

	/**
	 * cancel editing a record
	 * @return void
	 */
	function cancel()
	{
		$msg = JText::_( 'Operation Cancelled' );
		$this->setRedirect( 'index.php?option=com_ryzomlife', $msg );
	}
}