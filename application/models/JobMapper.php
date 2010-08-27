<?php
class Jobeet_Model_JobMapper extends Jobeet_Model_MapperAbstract
{
    /**
     * get table data gateway class
     *
     * @Override  getDbTable
     * @return Zend_Db_Table_Abstract
     */
    public function getDbTable()
    {
        if(!$this->_dbTable) {
            $this->setDbTable("Jobeet_Model_DbTable_Job");
        }

        return $this->_dbTable;
    }


    /**
     * save a affiliate data
     *
     * @access public
     */
    public function save(Jobeet_Model_Job $affiliate)
    {
        // @TODO: save action
    }


    /**
     * find one affiliate data
     *
     * @access public
     * @param  
     */
    public function find($id, Jobeet_Model_Job $affiliate)
    {
        $result = $this->getDbTable()->find($id);

        if(count($result) == 0) {
            return;
        }

        $row = $result->current();
        $affiliate->setOptions($row->toArray());
    }


    /**
     * fetch all affiliates
     *
     * @access public
     * @return Array
     */
    public function fetchAll()
    {
        $results = $this->getDbTable()->fetchAll();
        $affiliates = array();
        foreach($results as $row) {
            $affiliate = new Jobeet_Model_Job();
            $affiliate->setOptions($row->toArray());
            $affiliates[] = $affiliate;
        }

        return $affiliates;
    }
}
