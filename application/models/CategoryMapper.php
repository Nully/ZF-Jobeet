<?php
class Jobeet_Model_CategoryMapper extends Jobeet_Model_MapperAbstract
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
            $this->setDbTable("Jobeet_Model_DbTable_Category");
        }

        return $this->_dbTable;
    }


    /**
     * save a Category data
     *
     * @access public
     */
    public function save(Jobeet_Model_Category $Category)
    {
        // @TODO: save action
    }


    /**
     * find one Category data
     *
     * @access public
     * @param  
     */
    public function find($id, Jobeet_Model_Category $category)
    {
        $result = $this->getDbTable()->find($id);

        if(count($result) == 0) {
            return;
        }

        $row = $result->current();
        $category->setOptions($row->toArray());
    }


    /**
     * fetch all Categorys
     *
     * @access public
     * @return Array
     */
    public function fetchAll()
    {
        $results = $this->getDbTable()->fetchAll();
        $categories = array();
        foreach($results as $row) {
            $category = new Jobeet_Model_Category();
            $category->setOptions($row->toArray());
            $categories[] = $category;
        }

        return $categories;
    }
}
