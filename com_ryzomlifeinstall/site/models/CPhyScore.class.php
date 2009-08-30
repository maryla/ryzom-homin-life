<?php
/**
 * 
 * @author maryla
 * @name CPhyScore
 * @desc Phys score class of the homin
 *
 */
class CPhyScore {

	private $_hitpoints_max;
	private $_stamina_max;
	private $_sap_max;
	private $_focus_max;
	private $_hitpoints;
	private $_stamina;
	private $_focus;
	private $_sap;


	public function getHitpoints_max()	{	return $this->_hitpoints_max;	}
	public function getStamina_max()	{	return $this->_stamina_max;	}
	public function getSap_max()	{	return $this->_sap_max;	}
	public function getFocus_max()	{	return $this->_focus_max;	}
	public function getHitpoints()	{	return $this->_hitpoints;	}
	public function getStamina()	{	return $this->_stamina;	}
	public function getFocus()	{	return $this->_focus;	}
	public function getSap()	{	return $this->_sap;	}
	public function setHitpoints_max($aValue)	{	$this->_hitpoints_max=$aValue;	}
	public function setStamina_max($aValue)	{	$this->_stamina_max=$aValue;	}
	public function setSap_max($aValue)	{	$this->_sap_max=$aValue;	}
	public function setFocus_max($aValue)	{	$this->_focus_max=$aValue;	}
	public function setHitpoints($aValue)	{	$this->_hitpoints=$aValue;	}
	public function setStamina($aValue)	{	$this->_stamina=$aValue;	}
	public function setFocus($aValue)	{	$this->_focus=$aValue;	}
	public function setSap($aValue)	{	$this->_sap=$aValue;	}
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
	* @param aHItPointsMax
	* @param aHItPoints
	* @param aStaminaMax
	* @param aStamina
	* @param aSapMax
	* @param aSap
	* @param aFocusMax
	* @param aFocus
	**/

	public function __construct($aHitPoints,$aHitPointsMax,$aStamina,$aStaminaMax,$aSap,$aSapMax,$aFocus,$aFocusMax){
		$this->_hitpoints=$aHitPoints;
		$this->_hitpoints_max=$aHitPointsMax;
		$this->_stamina=$aStamina;
		$this->_stamina_max=$aStaminaMax;
		$this->_focus=$aFocus;
		$this->_focus_max=$aFocusMax;
		$this->_sap=$aSap;
		$this->_sap_max=$aSap;

	}

}


?>