<?php
/**
 * Hello World table class
 * 
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link http://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_4
 * @license        GNU/GPL
 */
 
// No direct access
defined('_JEXEC') or die('Restricted access');
 
/**
 * Hello Table class
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class TableRyzomLife extends JTable
{
    /**
     * Primary Key
     *
     * @var int
     */
    var $ryz_id = null;
 
    /**
     * @var string
     */
    var $ryz_uid= null;
    /**
     * @var string
     */
    var $ryz_hominkeyfull = null;
    /**
     * @var string
     */
    var $ryz_hominkeypart= null;        
    /**
     * @var int
     */
    var $ryz_typeentity= 1;  
      /**
     * @var string
     */
    var $ryz_passphrase= null;       
 
    /**
     * Constructor
     *
     * @param object Database connector object
     */
    function TableRyzomLife( &$db ) {
        parent::__construct('#__ryzomlife', 'ryz_id', $db);
    }
}
