<?php

class Jobeet_Model_Affiliate extends Jobeet_Model_Abstract
{
    protected $_url;
    protected $_token;
    protected $_is_active = false;


    /**
     * set url
     *
     * @access public
     * @param  $url    String
     * @return Jobeet_Model_Affiliate
     */
    public function setUrl($url)
    {
        $this->_url = (string)$url;
        return $this;
    }


    /**
     * get url
     *
     * @access public
     * @return Int
     */
    public function getUrl()
    {
        return $this->_url;
    }


    /**
     * set token
     *
     * @access public
     * @param  $token   String
     * @return Jobeet_Model_Affiliate
     */
    public function setToken($token)
    {
        $this->_token = (int)$token;
        return $this;
    }


    /**
     * get token
     *
     * @access public
     * @return Int
     */
    public function getToken()
    {
        return $this->_token;
    }


    /**
     * set id
     *
     * @access public
     * @param  $is_active   Int
     * @return Jobeet_Model_Affiliate
     */
    public function setIsActive($is_active)
    {
        $this->_is_active = (bool)(int)$is_active;
        return $this;
    }


    /**
     * get id
     *
     * @access public
     * @return Int
     */
    public function getIsActive()
    {
        return $this->_is_active;
    }
}

