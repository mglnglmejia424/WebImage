<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of AppSettings
 *
 * @author MiguelAngel
 */
class AppSettings {
    //put your code here
    private $CONFIG_FILE;
    public $AppSettings;
    function __construct() {
        $this->CONFIG_FILE = "../../config.xml";
    }
    
    function __destruct() {
        $this->CONFIG_FILE = "";
    }
    
    function getSettings(){
        try{
            $this->AppSettings = simplexml_load_file($this->CONFIG_FILE);
            return $this->AppSettings;
        }
        catch(Exception $ex){
            echo "ERROR OPENING XML";
            echo $ex;
            return NULL;
        }
        
        
    }
}
