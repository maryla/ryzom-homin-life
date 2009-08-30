<?php
/**
 * 
 * @author maryla
 * @name CGuild guild class
 *
 */
class CGuild {

	private $_name;
	private $_gid;
	private $_icon;
	private $_race;
	private $_creation_date;
	private $_shard;
	private $_description;
	private $_money;
	private $_building;
	private $_cult;
	private $_civ;
	private $_motd;
	private $_fames;
	private $_room;
	private $_key;
	
	// association with CHomin class
	private $_members=array();

	public function getName()	{	return $this->_name;	}
	public function getGid()	{	return $this->_gid;	}
	public function getIcon()	{	return $this->_icon;	}
	public function getKey()	{	return $this->_key;	}
	public function getCreationDate() { return $this->_creation_date;}
	public function getCult()	{	return $this->_cult;	}
	public function getCivilisation()	{	return $this->_civ;	}
	public function getShard(){return $this->_shard;}
	public function getMoney(){return $this->_money;}
	public function getDescription(){ return $this->_description;}
	public function getRace(){ return $this->_race;}
	public function getMembers(){ return $this->_members;}
	public function getFames(){return $this->_fames;}
	public function getInventoryRoom(){return $this->_room;}
	
	public function setName($aValue)	{	$this->_name=$aValue;	}
	public function setGid($aValue)	{	$this->_gid=$aValue;	}
	public function setIcon($aValue)	{	$this->_icon=$aValue;	}
	public function setKey_f($aValue)	{	$this->_key_f=$aValue;	}
	public function setKey_p($aValue)	{	$this->_key_p=$aValue;	}
	

	/**
	 * @desc Default constructor
	 * @param $aType constructor type
	 * @param $aArgs array (key,passphrase,knownhomin,partial,icon)
	 */
	public function __construct($aType,$aArgs){
		switch ($aType){
			case "partial" :
				$this->constructPartialGuild($aArgs);
				break;
			default:
				$this->constructGuild($aArgs);
		}
		
	}
	
	/**
	 * @desc sub constructor : create full guild object
	 * @param $aArgs array (key,passphrase,knownhomin,partial,icon)
	 * @return unknown_type
	 */
	private function constructGuild($aArgs){
	if (isset($aArgs["key"])){
			$this->_key=ryzom_decrypt($aArgs["key"],$aArgs["passphrase"]);
			if (strtoupper($this->_key[0])=='G'){
				$lGid=0;
				if(ryzom_guild_valid_key($this->_key,$lGid)) {
				$xml = ryzom_guild_simplexml($this->_key);
				$this->initFromXML($xml,$aArgs["knownhomin"]);
				
				} else {
					$trace = debug_backtrace();
					trigger_error(	'RYZOM ERROR construct :This key is not a valid character key' .
									$trace[0]['file'] .
		            				' on line ' . $trace[0]['line'],E_USER_NOTICE);
				}
			}else {
				$trace = debug_backtrace();
					trigger_error(	'RYZOM ERROR Guild construct :This key is not a valid guild key',E_USER_NOTICE);
				
			}
		}else{
			$trace = debug_backtrace();
			trigger_error(	'RYZOM ERROR Guild construct : The key must not be empty',E_USER_NOTICE);
		}
		
	}
	/**
	 * @desc sub constructor : create partial guild object 
	 * @param $aArgs array (key,passphrase,knownhomin,partial,icon)
	 */
	private function constructPartialGuild($aArgs){
		$this->_name=$aArgs["partial"]->name;
		$this->_icon=$aArgs["partial"]->icon;
	}
	
	
	/**
	 * @desc build from xmlnode
	 * @param $aXmlNode xml node
	 * @param $aKnownHomin db ob ject of homin
	 * @return void
	 */
	 private function initFromXML($aXmlNode,$aKnownHomin){
		foreach($aXmlNode->children() as $lChild){
			$lName="_".$lChild->getName();
			
			switch($lChild->getName()){
				case 'members' :
					$this->setMembersFromXML($lChild,$aKnownHomin);
					break;
				case 'fames' :
					$this->setFames($lChild);
					break;
				case 'room':
					$this->initInventoryRoom($lChild);
					break;
				default :
					$this->$lName= $lChild;
			}
			
			
		}//for
	}
	/**
	 * @desc init room inventory
	 * @param aXmlNode xlm node room 
	 * @return voir
	 */
	public function initInventoryRoom($aXmlNode){
		foreach($aXmlNode->children() as $lItem){
			 $this->_room[]=new CItem($lItem);
		}
	
	}
	
	/**
	* @desc feed fames array with xmlnode
	* @param aXmlNode : xml node fames
	*/
	public function setFames($aXmlNode){
		foreach($aXmlNode->children() as $lItem){
			$this->_fames[]=new CPoint($lItem);
			
		}
	}	
	
	/**
	 * @desc init Member object
	 * @param $aXmlNode xml node
	 * @param $aKnownHomin db object of homin
	 * @return void
	 */
	private function setMembersFromXML($aXmlNode,$aKnownHomin){
		$this->_members=array();
		$lsort_grade=$lsort_name=array();
		foreach($aXmlNode->children() as $lChild){
			
			$lArray=array("member"=>$lChild);
			$lHomin=new CHomin("profilfromguild",$lArray);
			$lRes = array_search($lChild->name,$aKnownHomin);
			
			foreach($aKnownHomin as $lCurrentH){
				
				if (strcasecmp($lCurrentH->ryz_uid,$lChild->name)==0){
					
					$lHomin->setKeyF($lCurrentH->ryz_hominkeyfull);
					$lHomin->setKeyP($lCurrentH->ryz_hominkeypart);
					break;
				}	
			}	
			
			$this->_members[]= $lHomin;	
			$lsort_grade[]=$lHomin->getGrade();
			$lsort_name[]=$lHomin->getName();
			
		}
		//sort by grade and name
		array_multisort($lsort_grade, SORT_ASC, $lsort_name, SORT_ASC, $this->_members);
	}

	/**
	 * @desc convert class to string
	 * @return string
	 **/
	public function __tostring(){
		$lTxt ="";
		$lClassVars = get_class_vars(get_class($this));
		foreach ($lClassVars as $lName => $lValue) {
			$lTxt.="$lName ".$this->$lName."<br/>";
		}
		return get_class($this)." ". $lTxt;
	}


}


?>