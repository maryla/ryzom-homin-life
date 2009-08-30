<?php

defined('_JEXEC') or die('Restricted access');

require_once (JPATH_COMPONENT.DS.'controller.php');
require_once("models/CHomin.class.php");
require_once("models/CItem.class.php");
require_once("models/CFame.class.php");
require_once("models/CGuild.class.php");
require_once("models/CHands.class.php");
require_once("models/CPet.class.php");
require_once("models/CPhyScore.class.php");
require_once("models/CPhysicalChar.class.php");
require_once("models/CFame.class.php");
require_once("models/CPoint.class.php");
require_once("models/CPosition.class.php");
require_once("models/CSkill.class.php");
require_once("models/generate_image.php");
require_once("ryzom/ryzom_api/ryzom_api.php");
require_once("ryzom/ryzom_translate/ryzom_translate.php");


// controller definition
// Require specific controller if requested
if($controller = JRequest::getWord('controller')) {
	$path = JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php';
	if (file_exists($path)) {
		require_once $path;
	} else {
		$controller = '';
	}
}
$classname	= 'RyzomLifeController'.$controller;
$controller = new $classname( );
//get request
$controller->execute( JRequest::getVar('task', 'post'));
//redirect to the controller
$controller->redirect();
