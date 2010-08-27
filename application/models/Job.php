<?php

class Jobeet_Model_Job extends Jobeet_Model_Abstract
{
    protected $_category_id;
    protected $_type;
    protected $_company;
    protected $_logo;
    protected $_url;
    protected $_position;
    protected $_location;
    protected $_description;
    protected $_how_to_apply;
    protected $_token;
    protected $_is_public;
    protected $_is_activated;
    protected $_email;
    protected $_expires_at;


    /**
     * set url
     *
     * @access public
     * @param  $url    String
     * @return Jobeet_Model_Affiliate
     */
    public function setCategoryId($id)
    {
        $this->_category_id = (int)$id;
        return $this;
    }


    /**
     * get url
     *
     * @access public
     * @return Int
     */
    public function getCategoryId()
    {
        return $this->_category_id;
    }


    /**
     * set type
     *
     * @access public
     * @param  $type    String
     * @return Jobeet_Model_Affiliate
     */
    public function setType($type)
    {
        $this->_type = (string)$type;
        return $this;
    }


    /**
     * get type
     *
     * @access public
     * @return Int
     */
    public function getType()
    {
        return $this->_type;
    }


    /**
     * set company
     *
     * @access public
     * @param  $copmany    String
     * @return Jobeet_Model_Affiliate
     */
    public function setCompany($company)
    {
        $this->_company = (string)$company;
        return $this;
    }


    /**
     * get company
     *
     * @access public
     * @return Int
     */
    public function getCompany()
    {
        return $this->_company;
    }


    /**
     * set logo
     *
     * @access public
     * @param  $logo    String
     * @return Jobeet_Model_Affiliate
     */
    public function setLogo($logo)
    {
        $this->_logo = (string)$logo;
        return $this;
    }


    /**
     * get logo
     *
     * @access public
     * @return Int
     */
    public function getLogo()
    {
        return $this->_logo;
    }


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
     * @return String
     */
    public function getUrl()
    {
        return $this->_url;
    }


    /**
     * set position
     *
     * @access public
     * @param  $position    String
     * @return Jobeet_Model_Affiliate
     */
    public function setPosition($position)
    {
        $this->_position = (string)$position;
        return $this;
    }


    /**
     * get position
     *
     * @access public
     * @return String
     */
    public function getPosition()
    {
        return $this->_position;
    }


    /**
     * set location
     *
     * @access public
     * @param  $location    String
     * @return Jobeet_Model_Affiliate
     */
    public function setLocation($location)
    {
        $this->_location = (string)$location;
        return $this;
    }


    /**
     * get location
     *
     * @access public
     * @return String
     */
    public function getLocation()
    {
        return $this->_location;
    }


    /**
     * set description
     *
     * @access public
     * @param  $description    String
     * @return Jobeet_Model_Affiliate
     */
    public function setDescription($description)
    {
        $this->_description = (string)$description;
        return $this;
    }


    /**
     * get description
     *
     * @access public
     * @return String
     */
    public function getDescription()
    {
        return $this->_description;
    }


    /**
     * set how to apply
     *
     * @access public
     * @param  $apply    String
     * @return Jobeet_Model_Affiliate
     */
    public function setHowToApply($apply)
    {
        $this->_how_to_apply = (string)$apply;
        return $this;
    }


    /**
     * get how to apply
     *
     * @access public
     * @return String
     */
    public function getHowToApply()
    {
        return $this->_how_to_apply;
    }


    /**
     * set token
     *
     * @access public
     * @param  $token    String
     * @return Jobeet_Model_Affiliate
     */
    public function setToken($token)
    {
        $this->_token = (string)$token;
        return $this;
    }


    /**
     * get token
     *
     * @access public
     * @return String
     */
    public function getToken()
    {
        return $this->_token;
    }


    /**
     * set is public
     *
     * @access public
     * @param  $url    String
     * @return Jobeet_Model_Affiliate
     */
    public function setIsPublic($is_public)
    {
        $this->_is_public = (bool)(int)$is_public;
        return $this;
    }


    /**
     * get is public
     *
     * @access public
     * @return Int
     */
    public function getIsPublic()
    {
        return $this->_is_public;
    }


    /**
     * set is activated
     *
     * @access public
     * @param  $is_activated    Int
     * @return Jobeet_Model_Affiliate
     */
    public function setIsActivated($activated)
    {
        $this->_is_activated = (bool)(int)$activated;
        return $this;
    }


    /**
     * get is activated
     *
     * @access public
     * @return Int
     */
    public function getIsActivated()
    {
        return $this->_is_activated;
    }


    /**
     * set email
     *
     * @access public
     * @param  $url    String
     * @return Jobeet_Model_Affiliate
     */
    public function setEmail($mail)
    {
        $this->_email = (int)$mail;
        return $this;
    }


    /**
     * get email
     *
     * @access public
     * @return String
     */
    public function getEmail()
    {
        return $this->_email;
    }


    /**
     * set url
     *
     * @access public
     * @param  $url    String
     * @return Jobeet_Model_Affiliate
     */
    public function setExpiresAt($expires)
    {
        $this->_expires_at = $expires;
        return $this;
    }


    /**
     * get expires at
     *
     * @access public
     * @return Int
     */
    public function getExpiresAt()
    {
        return $this->_expires_at;
    }
}

