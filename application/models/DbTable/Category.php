<?php

class Jobeet_Model_DbTable_Category extends Zend_Db_Table_Abstract
{

    protected $_name = 'category';
    protected $_dependentTables = array(
        "Jobeet_Model_CategoryAffiliate"
    );


}

