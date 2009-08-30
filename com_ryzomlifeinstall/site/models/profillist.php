<?php

/**
 *
 * @author maryla
 * @name RyzomLifeModelProfilList
 * @desc ProfilList joomla Model class
 */

defined('_JEXEC') or die();
jimport('joomla.application.component.model');
class RyzomLifeModelProfilList extends JModel {

    /**
     * profil list data array
     *
     * @var array
     */
    private $_data;
 
    /**
     * Returns the query
     * @return string The query to be used to retrieve the rows from the database
     */
    function _buildQuery()
    {
        $query = ' SELECT * '
            . ' FROM #__ryzomlife'
        ;
        return $query;
    }
 
    /**
     * Retrieves the profillist data
     * @return array Array of objects containing the data from the database
     */
    function getData()
    {
        // Lets load the data if it doesn't already exist
        if (empty( $this->_data ))
        {
            $query = $this->_buildQuery();
            $query .= $this->_buildContentOrderBy();
           
            $this->_data = $this->_getList( $query );
        }
 
        return $this->_data;
    }
    
    /***
     * 
     * @desc order query 
     */
   	function _buildContentOrderBy()
		{
		        global $mainframe, $option;
		 
		        $filter_order     = $mainframe->getUserStateFromRequest( $option.'filter_order', 'filter_order', 'ryz_uid', 'cmd' );
		        $filter_order_Dir = $mainframe->getUserStateFromRequest( $option.'filter_order_Dir', 'filter_order_Dir', 'asc', 'word' );
		 
		        $orderby = ' ORDER BY '.$filter_order.' '.$filter_order_Dir;
		 
		        return $orderby;
	}

}
