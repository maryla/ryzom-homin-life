<?php
/**
 * 
 * @author maryla
 * @name CSkill
 * @desc Skill class 
 *
 */
class CSkill {

	private $_name;
	private $_value;
	private $_traduction;
	private $_isRootBranch;
	private $_child = array();
	private $_parent =null;

	public function getName()	{	return $this->_name;	}
	public function getValue()		{	return $this->_value;	}
	public function getTranslation(){ 	return $this->_traduction;	}
	public function setName($aValue)	{	$this->_name=$aValue;	}
	public function setValue($aValue)	{	$this->_value=$aValue;	}
	public function isRootBranch() {return $this->_isRootBranch;}
	public function addChild($aChild){ $this->_child[$aChild->getName()]=$aChild;}
	public function setParent($aParent){$this->_parent=$aParent;}
	public function getChildren(){ 
		if (sizeof($this->_child)>0) echo "<ul>";
		foreach($this->_child as $lChild){
			if (sizeof($lChild->_child)==0) $lLast=" class =\"last\" "; else $lLast=""; 
			echo "<li$lLast><span class=\"value\">".$lChild->_value."</span><span onclick=\"expandNotExpand(this)\" class=\"text\"> ".JText::_($lChild->_traduction)."</span>";	
			$lChild->getChildren();
			echo "</li>";
		}
		if (sizeof($this->_child)>0) echo "</ul>";
	}
	public function getChildren2(){
		return $this->_child;	
	}

	/**
	 * @desc convert class to string
	 * @return string
	 **/
	public function __tostring(){
		$lTxt ="";
		$lClassVars = get_class_vars(get_class($this));
		print_r($lClassVars);
		foreach ($lClassVars as $lName=>$lValue) {
				$lTxt.="|" . $lName." : ".$this->$lName . "<br/>";
		}
		return get_class($this)." ". $lTxt;
	}
	/**
	* @desc constructor
	* @param aName name of the skill
	* @param aValue value of the skill
	* @param aTrad string for the translation
	*
	**/
	public function __construct($aName,$aValue,$aLang="fr"){
		$this->_isRootBranch=false;
		$lArrayRoot= array("sc","sm","sf","sh");
		$this->_name=$aName;
		$this->_value=$aValue;
		//$this->_traduction="ATYS_HOMIN_SKILLS_".strtoupper($aName);
		$this->_traduction=ryzom_translate($aName.".skill",$aLang);
		if (in_array($aName,$lArrayRoot)) $this->_isRootBranch=true;

	}
}


?>