<?php

class Jobeet_Model_Category extends Jobeet_Model_Abstract
{
    protected $_name;


    /**
     * set url
     *
     * @access public
     * @param  $url    String
     * @return Jobeet_Model_Category
     */
    public function setName($name)
    {
        $this->_name = (string)$name;
        return $this;
    }


    /**
     * get name
     *
     * @access public
     * @return String
     */
    public function getName()
    {
        return $this->_name;
    }
}

