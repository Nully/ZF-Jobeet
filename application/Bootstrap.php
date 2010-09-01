<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    /**
     * ViewHelper の初期定義を行います
     * 
     */
    protected function _initViewHelpers()
    {
        $view = $this->bootstrap("view")->getResource("view");
        $view->headLink(array(
            "rel"   => "stylesheet",
            "href"  => "/css/import.css",
            "type"  => "text/css",
            "media" => "Screen,Projection,TV",
        ));
    }

}

