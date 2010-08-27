<?php

class Jobeet_Model_DbTable_Affiliate extends Zend_Db_Table_Abstract
{

    protected $_name = 'affiliate';
    protected $_referenceMap = array(
        "Category" => array(
            "colmuns" => array("id"),
            "refTableClass" => "Jobeet_Model_DbTable_CategoryAffiliate",
            "refColumns" => array("category_id"),
            "onDelete" => "CASCADE",
            "onUpdate" => "CASCADE",
        )
    );
    protected $_dependentTables = array(
        "Jobeet_Model_DbTable_CategoryAffiliate"
    );


}

