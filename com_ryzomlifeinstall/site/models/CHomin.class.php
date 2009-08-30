<?php
/**
 * 
 * @author maryla
 * @desc CHomin class
 */
class CHomin {


	private $_name;
	private $_shard;
	private $_uid;
	private $_slot;
	private $_cid;
	private $_race;
	private $_gender;
	private $_titleid;
	private $_played_time;
	private $_latest_login;
	private $_latest_logout;
	private $_latest_connection;
	private $_Key;
	private $_KeyF;
	private $_KeyP;
	private $_money;
	private $_cult;
	private $_civ;
	private $_building;
	private $_body;
	private $_baseurl;
	private $_inventories=array();
	private $_grade;
	private $_joined_date;
	
	private $_lang="fr";
	

	// association with CGuild class
	private $_guild;
	// association with CItem class
	private $_equipements=array();
	// association with CPet class
	private $_pets=array();
	// association with CSkill class
	private $_skills=array();
	// association with CPoint class
	private $_fames=array();
	// association with CPhyScore class
	private $_phys_scores;
	// association with CPhysicalChar class
	private $_phys_characs;
	// association with CHands class
	private $_hands=array();
	// association with CPosition class
	private $_position;
	// association with CPoint class
	private $_faction_points=array();
	private $_avatar_url;
	private $_passphrase;

	public function getName()	{	return $this->_name;	}
	public function getShard()	{	return $this->_shard;	}
	public function getUid()	{	return $this->_uid;	}
	public function getSlot()	{	return $this->_slot;	}
	public function getCid()	{	return $this->_cid;	}
	public function getRace()	{	return $this->_race;	}
	public function getGender()	{	return $this->_gender;	}
	public function getTitleid()	{	return $this->_titleid;	}
	public function getPlayed_time()	{	return $this->_played_time;	}
	public function getLatest_login()	{	return $this->_latest_login;	}
	public function getLatest_logout()	{	return $this->_latest_logout;	}
	public function getLatest_connection()	{	return $this->_latest_connection;	}
	public function getKeyF()	{	return $this->_KeyF;	}
	public function getKeyP()	{	return $this->_KeyP;	}
	public function getKey()	{	return $this->_Key;	}
	public function getMoney()	{	return $this->_money;	}
	public function getCult()	{	return $this->_cult;	}
	public function getCiv()	{	return $this->_civ;	}
	public function getBuilding()	{	return $this->_building;	}
	public function getBody()	{	return $this->_body;	}
	public function getFames() 	{	return $this->_fames; }
	public function getFactionPoints() 	{	return $this->_faction_points; }
	public function getJoinDate(){return $this->_joined_date;}
 	public function getPosition() { return $this->_position;}	
	
	
	public function setName($aValue)	{	$this->_name=$aValue;	}
	public function setShard($aValue)	{	$this->_shard=$aValue;	}
	public function setUid($aValue)	{	$this->_uid=$aValue;	}
	public function setSlot($aValue)	{	$this->_slot=$aValue;	}
	public function setCid($aValue)	{	$this->_cid=$aValue;	}
	public function setRace($aValue)	{	$this->_race=$aValue;	}
	public function setGender($aValue)	{	$this->_gender=$aValue;	}
	public function setTitleid($aValue)	{	$this->_titleid=$aValue;	}
	public function setPlayed_time($aValue)	{	$this->_played_time=$aValue;	}
	public function setLatest_login($aValue)	{	$this->_latest_login=$aValue;	}
	public function setLatest_logout($aValue)	{	$this->_latest_logout=$aValue;	}
	public function setLatest_connection($aValue)	{	$this->_latest_connection=$aValue;	}
	public function setKeyF($aValue)	{	$this->_KeyF=$aValue;	}
	public function setKeyP($aValue)	{	$this->_KeyP=$aValue;	}
	public function setMoney($aValue)	{	$this->_money=$aValue;	}
	public function setCult($aValue)	{	$this->_cult=$aValue;	}
	public function setCiv($aValue)	{	$this->_civ=$aValue;	}
	public function setBuilding($aValue)	{	$this->_building=$aValue;	}
	public function setBody($aValue)	{	$this->_body=$aValue;	}


	/**
	 * @desc get avatar url from ballistix
	 */
	public function isFullProfile(){
		
		if(strtoupper($this->_Key[0])=='F') return true;
			else return false;
	}
	/**
	 * @desc get avatar url from ballistix
	 */
	public function getAvatarUrl(){
		return $this->_avatar_url;
	}
	/**
	* @desc return CGuild object
	*
	**/
	public function getGuild(){
		return $this->_guild;

	}
		/**
	* @desc return grade string
	*
	**/
	public function getGrade(){
		return $this->_grade;

	}
	/**
	 * @desc return title according to gender and language
	 * @param aLang
	 **/
	public function getTitle($aLang="fr"){
		return ryzom_title_txt($this->_titleid, $aLang, $this->_gender);

	}
	/**
	*@return array of CItem
	**/
	public function getEquipments(){
		return $this->_equipements;
	}
	/**
	* @param aPart part of the equipment
	* @return CItem from part
	**/
	public function getEquipment($aPart){
		if (array_key_exists($aPart,$this->_equipements)) 
			return $this->_equipements[$aPart];
		else return null;
	}
	
	/**
	* @param aPart part of the equipment
	* @return CItem from part
	**/
	public function getEquipmentImage($aPart){
		$lReturn="<img src=\"".$this->_baseurl."/components/com_ryzomlife/assets/equip_$aPart.png\" />";
		if (!is_null($this->_equipements[$aPart])){
			$lReturn="<a href=\"#\" class=\"tooltip\">".$this->_equipements[$aPart]->getIcon()
					."<em><span></span>fff".$this->_equipements[$aPart]."</em></a>";
			 
		
		}
		return $lReturn;
	}
	/**
	 *@return array of CSkill
	 **/
	public function getSkills(){
		return $this->_skills;
	}
	/**
	* @return CPhyScores
	**/

	public function getPhysScores(){
		return $this->_phys_scores;

	}
	/**
	* @return CPhysCarach
	**/

	public function getPhysCharac(){
		return $this->_phys_characs;

	}
	/**
	 * @desc return inventories array key
	 */
	 public function getInventories(){
	 	return $this->_inventories;	
	 }
	
	

	/**
	 * @desc default constructor 
	 * @param $aTypeCons 	default : for full or partial homin creation. 
	 * 						profilfromguild : for partial member creation
	 * @param $aArgs array(key,passphrase,member)
	 */
	 public function __construct($aTypeCons="default",$aArgs){
	 	
	 	$this->_lang=$aArgs["lang"];
	 	
	 	switch($aTypeCons){
	 		case "profilfromguild":
	 			$this->constructHominFromGuild($aArgs);
	 			break;
	 		default:
	 			$this->constructHomin($aArgs);
	 			break;
	 		
	 	}
	 
	 	
	 }

	/**
	 * sub constructor that build full homin object
	 * @param $aArgs array(key,passphrase)
	 */
	private function constructHomin($aArgs){
			$this->_passphrase=$aArgs["passphrase"];
		
			if (isset($aArgs["key"])){
				$lKey=ryzom_decrypt($aArgs["key"],$aArgs["passphrase"]);
				if (strtoupper($lKey[0])!='G')
					$lName="_Key".strtoupper($lKey[0]);
				else
					$lName="_Key";
 
	
				$this->$lName=ryzom_decrypt($aArgs["key"],$aArgs["passphrase"]);
				$this->_Key=ryzom_decrypt($aArgs["key"],$aArgs["passphrase"]);
				
				$uid=0;$gid=0;$slot=0;$full=false;
				if(ryzom_character_valid_key($this->$lName, $uid, $slot, $full)) {
					$xml = ryzom_character_simplexml($this->$lName);
					$this->initFromXml($xml);
					$this->initInventories();
				} else {
					$trace = debug_backtrace();
					trigger_error(	'RYZOM ERROR construct :This key is not a valid character key' .
									$trace[0]['file'] .
		            				' on line ' . $trace[0]['line'],E_USER_NOTICE);
				}
	
			}
		
		
	} 
	/**
	 * sub constructor that build partial homin object from guild information
	 * @param $aArgs array(member)
	 */		 
	private function constructHominFromGuild($aArgs){
		$this->_name=$aArgs["member"]->name;
		$this->_grade=$aArgs["member"]->grade;
		$this->_joined_date=$aArgs["member"]->joined_date;
		
	}
	


	/**
	 * @desc initialize inventories of the homin 
	 * 
	 */
	 private function initInventories(){
	 	$lXml = ryzom_character_simplexml($this->_Key, 'items');
	 	
	 	foreach($lXml->children() as $lInventories){
	 		switch ($lInventories->getName()){
	 			case 'inventories':
	 				foreach($lInventories->children() as $lConteneur){
		 					
		 					$lChildren=$lConteneur->children();
		 					if(sizeof($lChildren)>0){
			 					$lArray=array();
			 					foreach($lChildren as $lItem){
			 						$lArray[]=new CItem($lItem);
			 					}
			 					$this->_inventories[$lConteneur->getName()]=$lArray;
			 					unset($lArray);
		 					}
	 						
	 					}
	 				;
	 			break;
	 			case 'cache':
	 				break;
	 			default:
	 				$lArray=array();
			 		foreach($lInventories as $lItem){
			 			$lArray[]=new CItem($lItem);
			 		}
			 		$this->_inventories[$lInventories->getName()]=$lArray;
			 		unset($lArray);
	 				break;
	 				
	 		}
	 		
	 	}

				
	 }
	 
	/**
	 * @desc initialize class from xml file
	 * @param $aXml xml object
	 * @return unknown_type
	 */
	private function initFromXml($aXml){

		$this->_avatar_url= "http://ballisticmystix.net/api/dressingroom.php?".$this->buildAvatarURL($aXml);

		foreach ($aXml->children() as $lChild)
		{
			if(isset($lChild)){
			$lName="_".$lChild->getName();
			switch($lChild->getName()){
				case "name" :
					$this->_name=$lChild;
					break;
				case "latest_connection":
					;
					break;
				case "body":
					;
					break;
				case "guild":
					$lArray=array("partial"=>$lChild);
					
					$this->_guild = new CGuild("partial",$lArray);
					;
					break;
				case "equipments":
					unset($this->_equipements);
					$this->_equipements=array();
					$this->setEquipements($lChild);
					;
					break;
				case "hands":
					$this->_hands= new CHands($lChild);
					;
					break;
				case "faction_points":
					$this->setFactionPoints($lChild);
					;
					break;
				case "position":
					$this->_position = new CPosition($lChild);
					;
					break;
				case "phys_characs":
					$this->_phys_characs=new CPhysicalChar($lChild);
					;
					break;
				case "phys_scores":
					$this->setPhysScore($lChild);
					;
					break;
				case "skills":
					unset($this->_skills);
					$this->_skills=array();
					$this->setSkills($lChild);
					;
					break;
				case "fames":
					
					$this->setFames($lChild);
					
					;
					break;
				case "pets":
					$this->_pets=new CPet($lChild);

					;
					break;
				default:
					$this->$lName= $lChild;
					;
			} // switch
			}


		}

	}
	
	/**
	 * init base url
	 */
	 public function setBaseUrl($aVal){$this->_baseurl=$aVal;}
	/***
	*@param aXmlNode : xml node equipmeents
	*@desc feed equipment array with xmlnode
	**/
	public function setEquipements($aXmlNode){
		foreach($aXmlNode as $lItem){
			$lKey= $lItem->attributes()->part;
			$this->_equipements["$lKey"]=new CItem($lItem);
			
		}


	}
	/***
	*@param aXmlNode : xml node fames
	*@desc feed fames array with xmlnode
	**/
	public function setFames($aXmlNode){
		$lFame=array();
		$lFameTribe=array();
		foreach($aXmlNode->children() as $lItem){
			
			
			if (stripos($lItem->getName(),"tribe_")===false){
		
				$lFame[]=new CPoint($lItem);
		
			}
			else{
		
				$lName = str_replace("tribe_","",$lItem->getName());

				$lDoc = new DOMDocument('1.0');
				
				$lRoot = $lDoc->createElement($lName,$lItem);
				$lRoot = $lDoc->appendChild($lRoot);
				
				$lItem=simplexml_import_dom($lRoot);
				$lFameTribe[]=	new CPoint($lItem);
			}
		
		}
		array_multisort($lFame);
		array_multisort($lFameTribe);
	
		$this->_fames=array_merge($lFame,$lFameTribe);
	}	
	/***
	*@param aXmlNode : xml node faction points
	*@desc feed faction points array with xmlnode
	**/
	public function setFactionPoints($aXmlNode){
		foreach($aXmlNode->children() as $lItem){
			$this->_faction_points[]=new CPoint($lItem);
			
		}
	}		
	/**
	* @desc feed the homin skill
	* @param aXmlNode xml node of skills
	*/
	public function setSkills($aXmlNode){
		$lCurrentSkill=$lPrevious=null;
		foreach($aXmlNode->children() as $lItem){
			//$this->_skills[$lItem->getName()]=new CSkill($lItem->getName(),$lItem);
			//array_push($this->_skills,new CSkill($lItem->getName(),$lItem));
			$lCurrentSkill=new CSkill($lItem->getName(),$lItem,$this->_lang);
		
			if (!$lCurrentSkill->isRootBranch()){
				$lParentName=substr($lCurrentSkill->getName(),0,strlen($lCurrentSkill->getName())-1);
				$lParent=$this->_skills[$lParentName];
				$lParent->addChild($lCurrentSkill);
				$lCurrentSkill->setParent($lParent);
			}	
			$this->_skills[$lItem->getName()]=$lCurrentSkill;	
			
			
		}
	
		
	}
	/**
	* @desc feed the homin phys_score
	* @param aXmlNode phys_score node
	**/
	public function setPhysScore($aXmlNode){
		$this->_phys_scores = new CPhyScore($aXmlNode->hitpoints,$aXmlNode->hitpoints->attributes()->max,
						$aXmlNode->stamina,$aXmlNode->stamina->attributes()->max,
						$aXmlNode->sap,$aXmlNode->sap->attributes()->max,
						$aXmlNode->focus,$aXmlNode->focus->attributes()->max
						);
	}
	
	/**
	* @desc feed the homin phys_score
	* @param aXmlNode phys_score node
	**/
	public function setPhysCharac($aXmlNode){
		$this->_phys_characs = new CPhysicalChar($aXmlNode);
						
	}
	/**
	* @desc convert class to string
	* @return string
	**/
	public function __tostring(){
		return  $this->_name;
	}
	
	/**
	* @desc build the avator thanks to balllistix dressing room
	* */
	private function buildAvatarURL($aXml){

		$url=array();
		
		foreach($aXml->equipments->item as $node){
			// if it's one of armor parts
			$part = (string) $node['part'];
			if(in_array($part, array('hands', 'chest', 'arms', 'legs','feet','head'))){
				$color = (int) $node['c'];
				$url[]=$part.'='.(string) $node.'/'.$color;
			}
		}
		// race
		switch(strtolower($aXml->race)){
			case 'zorai':
			case 'fyros':
			case 'matis':
			case 'tryker': // fall thru
				$race=strtolower($aXml->race);
				break;
			default:
				$race='tryker';
		}
		$url[]='race='.$race;
		// gender
		if(strtolower($aXml->gender)=='f') $gender='f'; else $gender='m';
		$url[]='gender='.$gender;
		// hair
		$hair_type  = (int)$aXml->body->hair_type;
		$hair_color = (int)$aXml->body->hair_color;
		$url[]='hair='.$hair_type.'/'.$hair_color;
		// tattoo
		$tattoo=(int)$aXml->body->tattoo;
		$url[]='tattoo='.$tattoo;

		// join the URL and return it
		return join('&',$url);

	}


}


?>
