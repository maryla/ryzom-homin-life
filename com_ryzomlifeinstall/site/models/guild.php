<?php

/**
 * @author maryla
 * @name RyzomLifeModeGuild
 * @desc Guild joomla model class. Use the CGuild class
 */

defined('_JEXEC') or die();
jimport('joomla.application.component.model');
class RyzomLifeModelGuild extends JModel {

	private $_Guild=null;
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
	 * Initialize the homin from the key
	 * @param aKey string key
	 * 
	 */
	public function setGuild($aKey){
		$lRes=$this->getPassPhrase($aKey);
		$lPassPhrase=$lRes[0]->ryz_passphrase;
		$lKnownHomin=$this->getHominInfoFromDB();
		$lArray=array("key"=>$aKey,"passphrase"=>$lPassPhrase,"knownhomin"=>$lKnownHomin,"lang"=>$this->getLanguage());
		$this->_Guild = new CGuild("default",$lArray);
	}
	
	public function __get($aName){
		return $this->$aName;	
	}
	/**
	 * @desc retrieve passphrase from Key
	 * @param aKey guild key
	 * @return string passphrase
	 */
	 private function getPassPhrase($aKey){
	 	if (!empty($aKey)){

	 		$query = ' SELECT ryz_passphrase FROM #__ryzomlife '.
					"  WHERE ryz_typeentity=0 and ryz_hominkeyfull = '".$aKey."'";
					
			return $this->_getList( $query );
			
	 	}
	 }
	/**
	 * @desc retrieve passphrase from Key
	 * @param aKey guild key
	 * @return string passphrase
	 */
	 private function getHominInfoFromDB(){
	 		$query = ' SELECT * FROM #__ryzomlife '.
					"  WHERE ryz_typeentity=1";
		
			return $this->_getList( $query );
			
	 	
	 }
 	/**
	 * @return lang used string
	 */
	public function getLanguage(){
		$lLang=explode('-',JFactory::getLanguage()->getTag());
		return strtolower($lLang[0]);
	}
   

}
