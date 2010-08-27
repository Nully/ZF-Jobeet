<?php
abstract class Jobeet_Model_Abstract
{
    protected $_id;
    protected $_updated_at;
    protected $_created_at;


    /**
     * Mutate
     *
     * @access public
     * @param  $name    protected variable name
     * @param  $value   protected variable value
     * @return Void
     * @thrown Jobeet_Model_Exception
     */
    public function __set($name, $value)
    {
        $method = "set". $this->toCamel($name);
        if($name == "mapper" || !method_exists($this, $method)) {
            throw new Exception(
                "Invalid property ". get_class($this). "::". $name
            );
        }

        $this->$method($value);
    }


    /**
     * Accessor
     *
     * @access public
     * @param  $name    protected variable name
     * @return Mix
     * @thrown Jobeet_Model_Exception
     */
    public function __get($name)
    {
        $method = "get". $this->toCamel($name);
        if($name == "mapper" || !method_exist($this, $method)) {
            throw new Exception(
                "Invalid property ". get_class($this). "::". $name
            );
        }

        return $this->$method();
    }


    /**
     * to camel case string
     *
     * @access protected
     * @param  $name   String
     * @return String
     */
    protected function toCamel($name)
    {
        $name = str_replace("_", " ", $name);
        $name = ucwords($name);
        $name = str_replace(" ", "", $name);
        return $name;
    }


    /**
     * set protected variables
     *
     * @access public
     * @param  $options  Array
     * @return Jobeet_Model_Abstract
     */
    public function setOptions(array $options)
    {
        foreach($options as $name => $value) {
            $this->__set($name, $value);
        }

        return $this;
    }


    /**
     * set id
     *
     * @access public
     * @param  $id       Int
     * @return Jobeet_Model_Affiliate
     */
    public function setId($id)
    {
        $this->_id = (int)$id;
        return $this;
    }


    /**
     * get id
     *
     * @access public
     * @return Int
     */
    public function getId()
    {
        return $this->_id;
    }


    /**
     * set id
     *
     * @access public
     * @param  $id       Int
     * @return Jobeet_Model_Affiliate
     */
    public function setUpdatedAt($date)
    {
        $this->_updated_at = $date;
        return $this;
    }


    /**
     * get id
     *
     * @access public
     * @return Int
     */
    public function getUpdatedAt()
    {
        return $this->_updated_at;
    }


    /**
     * set id
     *
     * @access public
     * @param  $id       Int
     * @return Jobeet_Model_Affiliate
     */
    public function setCreatedAt($date)
    {
        $this->_created_at = $date;
        return $this;
    }


    /**
     * get id
     *
     * @access public
     * @return Int
     */
    public function getCreatedAt()
    {
        return $this->_created_at;
    }
}