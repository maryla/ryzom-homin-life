<?php

class CHands {


	// association with CEquipment class
	private $item;
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