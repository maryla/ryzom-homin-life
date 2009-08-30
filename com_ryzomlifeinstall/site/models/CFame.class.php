<?php
/**
 * @name CFame fame class for the homin
 */
class CFame {

	private $_name;

	private $_value;


	public function getname()	{	return $this->_name;	}
	public function getvalue()	{	return $this->_value;	}
	public function setname($aValue)	{	$this->_name=$aValue;	}
	public function setvalue($aValue)	{	$this->_value=$aValue;	}
	
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