<?php
abstract class Jobeet_Model_MapperAbstract
{
    /**
     * Table Data Gateway class
     *
     * @access protected
     * @var    Zend_Db_Table_Abstract
     */
    protected $_dbTable = null;


    /**
     * set Table Data Gateway class
     *
     * @access public
     * @param  $dbTable    String|Zend_Db_Table_Abstract
     * @return Jobeet_Model_MapperAbstract
     * @thrown Jobeet_Model_Exception
     */
    public function setDbTable($dbTable)
    {
        if(is_string($dbTable)) {
            $dbTable = new $dbTable();
        }

        if(!($dbTable instanceof Zend_Db_Table_Abstract)) {
            throw new Exception(
                "Invalid table data gateway provided."
            );
        }

        $this->_dbTable = $dbTable;
        return $this;
    }


    /**
     * get table data gateway class
     *
     * @return Zend_Db_Table_Abstract
     */
    abstract public function getDbTable();
}
