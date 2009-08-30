<?php
/**
 * 
 * @author maryla
 * @name CPhysicalChar
 * @desc HOmin Physical Char class 
 *
 */
class CPhysicalChar {

	private $_constitution;
	private $_metabolism;
	private $_intelligence;
	private $_wisdom;
	private $_strength;
	private $_wellbalanced;
	private $_dexterity;
	private $_will;

	public function getConstitution()	{	return $this->_constitution;	}
	public function getMetabolism()	{	return $this->_metabolism;	}
	public function getIntelligence()	{	return $this->_intelligence;	}
	public function getWisdom()	{	return $this->_wisdom;	}
	public function getStrength()	{	return $this->_strength;	}
	public function getWellBalanced()	{	return $this->_wellbalanced;	}
	public function getDexterity()	{	return $this->_dexterity;	}
	public function getWill()	{	return $this->_will;	}
	public function setConsitution($aValue)	{	$this->_consitution=$aValue;	}
	public function setMetabolism($aValue)	{	$this->_metabolism=$aValue;	}
	public function setIntelligence($aValue)	{	$this->_intelligence=$aValue;	}
	public function setWisdom($aValue)	{	$this->_wisdom=$aValue;	}
	public function setStrength($aValue)	{	$this->_strengh=$aValue;	}
	public function setWellBalanced($aValue)	{	$this->_wellbalanced=$aValue;	}
	public function setDexterity($aValue)	{	$this->_dexterity=$aValue;	}
	public function setWill($aValue)	{	$this->_will=$aValue;	}
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
	
	/**
	 * @desc constructor from xml node
	 * @param aXmlNode
	 */
	public function __construct($aXmlNode){
		
		foreach($aXmlNode->children() as $lChild){
			$lName="_".$lChild->getName();
			$this->$lName=$lChild;
		}

		
	}
}


?>