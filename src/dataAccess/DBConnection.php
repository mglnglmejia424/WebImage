<?php

require("../model/AppSettings.php");
use Settings\AppSettings as AppSettings;


/**
 * Clase que se encarga de la conexion a la base de datos
 * Su constructor se encarga de realizar la conexion con la DB o informar de algun error al hacerlo
 * Su destructor se encarga de liberar recursos de la base de datos, posteriormente se determinara
 * si liberara mas recursos  
 *
 * @author MiguelAngel
 */

/*

 * 
 *  */
class DBConnection {
    /*    
     */
    
    private $Settings;
    private $ConnectionParameters;
    protected $DataConnection;
    function __construct(){
        echo "Created Connection!";
        $AppSettings = new AppSettings();
        $this->Settings = $AppSettings->getSettings();
        foreach ($this->Settings->appSettings->constants->constant as $Constant):
            if ($Constant['name'] == "ConnectionString"){
                $this->setConnectionParameters($Constant);
                break;
            }
        endforeach;
    }
    
    public function getConnectionParameters(){
        return $this->ConnectionParameters;
    }
    
    public function setConnectionParameters($value){
        $this->ConnectionParameters = $value;
    }
    
    public function Connect($params){
        echo "\sConnection Opened!\s\n";
        echo $params->server . "," . $params->user . "," . $params->password . "," . $params->database;
        $this->DataConnection = new mysqli($params->server . "",$params->user . "",$params->password . "",$params->database . "");
        return $this->DataConnection;
    }
            
    function __destruct(){
        echo "Connection Closed!";
        $this->DataConnection->close();
    }
}

