<?php

class Jobeet_Model_DbTable_Job extends Zend_Db_Table_Abstract
{

    protected $_name = 'job';
    protected $_referenceMap = array(
        "Category" => array(
            "columns"       => array("category_id"),
            "refTableClass" => "Jobeet_Model_DbTable_Category",
            "refColumns"    => array("id")
        )
    );
    protected $_dependentTables = array(
        "Jobeet_Model_DbTable_Category"
    );


}

