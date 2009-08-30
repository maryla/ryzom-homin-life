<?php

/**
 *
 * @author maryla
 * @name RyzomLifeModelRyzomLife
 * @desc Homin profil joomla model class. use CHomin class
 * 
 * 
 */

defined('_JEXEC') or die();
jimport('joomla.application.component.model');
class RyzomLifeModelRyzomLife extends JModel {

	private $_Homin;
	private $_equipmentPart;
	private $_inventory;
	
	public function __get($aName) {
		return $this->$aName;
	}

	public function __set($aName,$aValue){
		$this->$aName=$aValue;
	}
	
	/**
	 * Initialize the homin from the key
	 * @param aKey string key
	 * 
	 */
	public function setHomin($aKey){
		$this->_inventory=false;
		$this->_equipmentPart=null;
		
		$lPassPhrase=$this->getPassPhrase($aKey)->ryz_passphrase;
		$lParams =array("key"=>$aKey,"passphrase"=>$lPassPhrase,"lang"=>$this->getLanguage());
		$this->_Homin = new CHomin("default",$lParams);
		$this->_Homin->setBaseUrl($this->baseurl);
		
	
	}
	/**
	 * Constructor that retrieves the homin from the request
	 *
	 * @access    public
	 * @return    void
	 */
	function __construct(){
		parent::__construct();

	}
	
	
	/**
	 * @return lang used string
	 */
	public function getLanguage(){
		$lLang=explode('-',JFactory::getLanguage()->getTag());
		return strtolower($lLang[0]);
	}
	
	/**
	 * retrieve passphrase
	 * 
	 */
	 private function getPassPhrase($aKey){
	 	if (!empty($aKey)){
	 		
	 		if (JRequest::getVar('task')=="viewfull") $lField="ryz_hominkeyfull";
	 		if (JRequest::getVar('task')=="viewpart") $lField="ryz_hominkeypart";
	 		$query = ' SELECT ryz_passphrase FROM #__ryzomlife '.
					'  WHERE '.$lField." = '".$aKey."'";
			
			$this->_db->setQuery( $query );
			
			return $this->_db->loadObject();
			
	 	}
	 }


}
