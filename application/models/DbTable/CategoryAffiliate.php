<?php

class Jobeet_Model_DbTable_CategoryAffiliate extends Zend_Db_Table_Abstract
{
    protected $_primary = "category_id";
    protected $_name = 'category_affiliate';
    protected $_referenceMap = array(
        "Category" => array(
            "columns"       => array("category_id"),
            "refTableClass" => "Jobeet_Model_DbTable_Category",
            "refColmuns"    => array("id")
        ),
        "Affiliate" => array(
            "columns"       => array("affiliate_id"),
            "refTableClass" => "Jobeet_Model_DbTable_Affiliate",
            "refColmuns"    => array("id")
        ),
    );


}

