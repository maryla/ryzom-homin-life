<?php
/**
 * 
 * @author maryla
 * @name CPosition
 * @desc Homin position class
 *
 */
class CPosition {

	private $_x;
	private $_y;
	private $_head;

	public function getX()	{	return $this->_x;	}
	public function getY()	{	return $this->_y;	}
	public function getHead()	{	return $this->_head;	}
	public function setX($aValue)	{	$this->_x=$aValue;	}
	public function setY($aValue)	{	$this->_y=$aValue;	}
	public function setHead($aValue)	{	$this->_head=$aValue;	}
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
	public function __construct($aXml){
		$this->_x=$aXml->attributes()->x;
		$this->_y=$aXml->attributes()->y;
		$this->_head=$aXml->attributes()->head;
	}
}


?>
