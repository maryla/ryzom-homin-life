<?php
/**
 * 
 * @author maryla
 * @name CPoint
 * @desc Point class. used to manage fame, faction points...
 *
 */
class CPoint {

	private $_name;

	private $_value;


	public function getName()	{	return $this->_name;	}
	public function getValue()	{	return $this->_value;	}
	public function setName($aValue)	{	$this->_name=$aValue;	}
	public function setValue($aValue)	{	$this->_value=$aValue;	}
	
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
		$this->_name=str_replace("_"," ",$aXmlNode->getName());
		$this->_value=$aXmlNode;	
		
	}
}


?>