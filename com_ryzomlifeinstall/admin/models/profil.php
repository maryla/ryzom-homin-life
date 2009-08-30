<?php
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.model');

class RyzomLifeModelProfil extends JModel
{
	/**
	 * Constructor that retrieves the ID from the request
	 *
	 * @access	public
	 * @return	void
	 */
	function __construct()
	{
		parent::__construct();

		$array = JRequest::getVar('cid',  0, '', 'array');
		$this->setId((int)$array[0]);
	}

	/**
	 * Method to set the hello identifier
	 *
	 * @access	public
	 * @param	int profil identifier
	 * @return	void
	 */
	function setId($id)
	{
		// Set id and wipe data
		$this->_id		= $id;
		$this->_data	= null;
	}

	/**
	 * Method to get a profil
	 * @return object with data
	 */
	function &getData()
	{
		// Load the data
		if (empty( $this->_data )) {
			$query = ' SELECT * FROM #__ryzomlife '.
					'  WHERE ryz_id = '.$this->_id;
			$this->_db->setQuery( $query );
			$this->_data = $this->_db->loadObject();
		}
		if (!$this->_data) {
			$this->_data = new stdClass();
			$this->_data->ryz_id = 0;
			$this->_data->ryz_hominkeyfull  = null;
			$this->_data->ryz_hominkeypart  = null;
			$this->_data->ryz_passphrase  = md5(time().rand());
			$this->_data->ryz_uid  = null;
			$this->_data->ryz_typeentity  = 1;
		}
		return $this->_data;
	}

	/**
	 * Method to store a record
	 *
	 * @access	public
	 * @return	boolean	True on success
	 */
	function store()
	{	
		$row =& $this->getTable('ryzomlife');

		$data = JRequest::get( 'post' );
		$data["ryz_passphrase"]=md5(time().rand());
	
		if(isset($data["ryz_hominkeypart"]) && $data["ryz_hominkeypart"]!= null && $data["ryz_hominkeypart"]!="")
			$data["ryz_hominkeypart"]=ryzom_encrypt($data["ryz_hominkeypart"],$data["ryz_passphrase"]);
		if(isset($data["ryz_hominkeyfull"]) && $data["ryz_hominkeyfull"]!= null && $data["ryz_hominkeyfull"]!="")			
		$data["ryz_hominkeyfull"]=ryzom_encrypt($data["ryz_hominkeyfull"],$data["ryz_passphrase"]);

		// Bind the form fields to the ryzomlife table
		if (!$row->bind($data)) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}

		// Make sure the ryzomlife record is valid
		if (!$row->check()) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}

		// Store the web link table to the database
		if (!$row->store()) {
			$this->setError( $row->getErrorMsg() );
			return false;
		}

		return true;
	}

	/**
	 * Method to delete record(s)
	 *
	 * @access	public
	 * @return	boolean	True on success
	 */
	function delete()
	{
		$cids = JRequest::getVar( 'cid', array(0), 'post', 'array' );

		$row =& $this->getTable('ryzomlife');

		if (count( $cids )) {
			foreach($cids as $cid) {
				if (!$row->delete( $cid )) {
					$this->setError( $row->getErrorMsg() );
					return false;
				}
			}
		}
		return true;
	}

}