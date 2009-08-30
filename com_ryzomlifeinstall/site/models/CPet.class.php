<?php
/**
 * 
 * @author gatou
 * @name CPet
 * @desc Pet class
 */
class CPet {

	private $_id;
	private $_price;
	private $_slot;
	private $_satiety;
	private $_status;
	private $_stable;
	private $_sheet;
	private $_position;


	public function getId()	{	return $this->_id;	}
	public function getPrice()	{	return $this->_price;	}
	public function getSlot()	{	return $this->_slot;	}
	public function getSatiety()	{	return $this->_satiety;	}
	public function getStatus()	{	return $this->_status;	}
	public function getStable()	{	return $this->_stable;	}
	public function getSheet()	{	return $this->_sheet;	}
	public function setId($aValue)	{	$this->_id=$aValue;	}
	public function setPrice($aValue)	{	$this->_price=$aValue;	}
	public function setSlot($aValue)	{	$this->_slot=$aValue;	}
	public function setSatiety($aValue)	{	$this->_satiety=$aValue;	}
	public function setStatus($aValue)	{	$this->_status=$aValue;	}
	public function setStable($aValue)	{	$this->_stable=$aValue;	}
	public function setSheet($aValue)	{	$this->_sheet=$aValue;	}
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