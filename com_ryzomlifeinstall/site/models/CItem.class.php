<?php
/**
 * @name CItem
 * @author maryla
 * @desc Class for item and equipment
 */
class CItem {

	private $_name=null;	/** @desc **/
	private $_c=null;		/** @desc color **/
	private $_slot=null; 	/** @desc the position of the item in the inventory**/
	private $_q=null;		/** @desc quality **/
	private $_w=null;		/** @desc weight **/
	private $_hp=null;		/** @desc hp of the item (between 0 and dur) **/
	private $_dur=null;		/** @desc durability of the item **/
	private $_dm=null;		/** @desc dodge modifier **/
	private $_pf=null;		/** @desc protection factor **/
	private $_e=null;		/** @desc energy of the item (b=basic f=fine c=choice e=excelent s=supreme) **/
	private $_text=null;	/** @desc the text specified by the crafter**/
	private $_sl=null;		/** @desc sap load **/
	private $_lu=null;		/** @desc **/
	private $_pm=null;		/** @desc parry modifier **/
	private $_adm=null;		/** @desc adversary dodge modifier **/
	private $_apm=null;		/** @desc adversary parry modifier **/
	private $_part=null;	/** @desc emplacement corporel **/
	private $_xml=null;		/** @desc xml node **/
	private $_msp=null;		/** @desc max slashing protection **/
	private $_mbp=null;		/** @desc max blunt protection **/
	private $_mpp=null; 	/** @desc max piercing protection **/
	
   	private $_s=null;		/** @desc stack size **/
   	private $_sap=null;		/** @desc 0 means no sap, 1 mean sap icon **/
 	private $_csl=null;		/** @desc current sap load **/   
 	private $_hpb=null;		/** @desc hp buff **/
	private $_sab=null;		/** @desc sap buff **/
    private $_stb=null;		/** @desc sta buff **/
    private $_fob=null;		/** @desc focus buff **/
   	private $_hr=null;		/** @desc hit rate **/
	private $_r=null;		/** @desc range **/
	private $_type=null; 	/** @desc type of item **/
	private $_continent=null; /** @desc continent where the item is in sell*/
	private $_in_sell_since=null; /** @desc sell date */
	private $_price=null; /** @desc sell price */
	


	public function getContinent(){ return $this->_continent;}
	public function getIn_sell_since(){ 

		return ryzom_time_txt(ryzom_time_array($this->_in_sell_since, ''));
		
	}
	public function getS(){ return $this->_s;}
	public function getSap(){ return $this->_sap;}
	public function getCsl(){ return $this->_csl;}
	public function getHpb(){ return $this->_hpb;}
	public function getSab(){ return $this->_sab;}
	public function getStb(){ return $this->_stb;}
	public function getFob(){ return $this->_fob;}
	public function getHr(){ return $this->_hr;}
	public function getR(){ return $this->_r;}
	
	public function getMsp(){ return $this->_msp;}
	public function getMbp(){ return $this->_mbp;}
	public function getMpp(){ return $this->_mpp;}
	public function getXml(){ 	return $this->_xml;}
	public function getName(){	return $this->_name;	}
	public function getC()	{	
		return JText::_('ATYS_HOMIN_EQUIP_COLOR_'.$this->_c);
	}
	public function getSlot(){	return $this->_slot;	}
	public function getQ()	{	return $this->_q;	}
	public function getW()	{	return $this->_w;	}
	public function getHp()	{	return $this->_hp;	}
	public function getDur(){	return $this->_dur;	}
	public function getDm()	{	return $this->_dm;	}
	public function getPf()	{	return $this->_pf;	}
	public function getE()	{
		return JText::_('ATYS_HOMIN_EQUIP_E_'.$this->_e);	
		
	}
	public function getText(){	return $this->_text;	}
	public function getPrice(){	return $this->_price;	}
	public function getSl()	{	return $this->_sl;	}
	public function getLu()	{	return $this->_lu;	}
	public function getPm()	{	return $this->_pm;	}
	public function getAdm(){	return $this->_adm;	}
	public function getApm(){	return $this->_apm;	}
	public function getPart(){	return JText::_('ATYS_HOMIN_EQUIP_PART_'.strtoupper($this->_part));	}
	
	public function setPrice($aValue){ $this->_price=$aValue;	}
	public function setContinent($aValue){	$this->_continent=$aValue;	}
	public function setIn_sell_since($aValue){	
		$this->_in_sell_since=$aValue;
	}
	public function setName($aValue){	$this->_name=$aValue;	}
	public function setC($aValue)	{	$this->_c=$aValue;		}
	public function setSlot($aValue){	$this->_slot=$aValue;	}
	public function setQ($aValue)	{	$this->_q=$aValue;		}
	public function setW($aValue)	{	$this->_w=$aValue;		}
	public function setHp($aValue)	{	$this->_hp=$aValue;		}
	public function setDur($aValue)	{	$this->_dur=$aValue;	}
	public function setDm($aValue)	{	$this->_dm=$aValue;		}
	public function setPf($aValue)	{	$this->_pf=$aValue;		}
	public function setE($aValue)	{	$this->_e=$aValue;		}
	public function setText($aValue){	$this->_text=$aValue;	}
	public function setSl($aValue)	{	$this->_sl=$aValue;		}
	public function setLu($aValue)	{	$this->_lu=$aValue;		}
	public function setPm($aValue)	{	$this->_pm=$aValue;		}
	public function setAdm($aValue)	{	$this->_adm=$aValue;	}
	public function setApm($aValue)	{	$this->_apm=$aValue;	}
	public function setPart($aValue){	$this->_part=$aValue;	}
	public function setMsp($aValue)	{	$this->_msp=$aValue;	}
	public function setMbp($aValue)	{	$this->_mbp=$aValue;	}
	public function setMpp($aValue)	{	$this->_mpp=$aValue;	}
	public function setS($aValue)	{  	$this->_s=$aValue;		}
	public function setSap($aValue)	{  	$this->_sap=$aValue;	}
	public function setCsl($aValue)	{  	$this->_csl=$aValue;	}
	public function setHpb($aValue)	{  	$this->_hpb=$aValue;	}
	public function setSab($aValue)	{  	$this->_sab=$aValue;	}
	public function setStb($aValue)	{  	$this->_stb=$aValue;	}
	public function setFob($aValue)	{  	$this->_fob=$aValue;	}
	public function setHr($aValue)	{  	$this->_hr=$aValue;		}
	public function setR($aValue)	{  	$this->_r=$aValue;		}
	
	public function getType() {return $this->_type;}
	
	/**
	 * Set the type of the item according to its code
	 * @param $aValue item code
	 */
	public function setType($aValue){
		$lTestJewel="#^ic(t|f|m|z){1}j#i";
		$lTestShield="#^ic(t|f|m|z){1}s#i";
		$lTestFight="#^ic(t|f|m|z){1}m#i";
		$lTestArmor="#^ic(t|f|m|z){1}a#i";
		$lTestTools="#^it#i";
		$lTestItem="#^item#i";
		$lTestRessource="#^m#i";
		$this->_type="Item";
		
		if (preg_match($lTestJewel,$aValue)==1) $this->_type="Equipment Jewel";
		elseif (preg_match($lTestShield,$aValue)==1) $this->_type="Equipment Shield";
			elseif (preg_match($lTestFight,$aValue)==1) $this->_type="Equipment Fight";
			elseif (preg_match($lTestArmor,$aValue)==1) $this->_type="Equipment Armor";
			elseif (preg_match($lTestRessource,$aValue)==1) $this->_type="Ressource";
			elseif (preg_match($lTestItem,$aValue)==1) $this->_type="Item";
			elseif (preg_match($lTestTools,$aValue)==1) $this->_type="Tools";

	}
	/**
	* @param aXmlNode xml item node
	* @desc constructor
	**/
	public function __construct($aXmlNode){
		
		foreach($aXmlNode->attributes() as $lAttr){
			$lName="_".$lAttr->getName();
			$this->$lName=$lAttr;
		}
		$this->_xml=$aXmlNode;
		$this->setType($aXmlNode);
		
	}
	
	
	/**
	 * @return img balise feed with icon url
	 **/
	public function getIcon(){
		return ryzom_item_icon_image_from_simplexml($this->_xml);	
	}
	
	/**
	 * @desc convert class to string
	 * @return string
	 **/
	public function __tostring(){
		$lTxt ="";
		$lClassVars = get_class_vars(get_class($this));
		foreach ($lClassVars as $lName =>$lValue) {
			if(!is_null($this->$lName))$lTxt .="<li>".JText::_('ATYS_HOMIN_EQUIP'.strtoupper($lName))." : ". $this->$lName."</li>";
		}
		return "<ul>$lTxt</ul>";
	}
	
	/**
	 * @return return array of attributes
	 */
	public function getAttributes(){
		$lArray= array();
		$lClassVars = get_class_vars(get_class($this));
		foreach ($lClassVars as $lName => $lValue) {
			$lNameF="get".ucfirst(strtolower(substr($lName,1)));
			if (isset($this->$lName))$lArray["$lName"]=$this->$lNameF();
		}
		return $lArray;
		
	}
	

}

?>