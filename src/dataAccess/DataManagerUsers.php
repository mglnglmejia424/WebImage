<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataManagerUsers
 *
 * @author MiguelAngel
 */
class DataManagerUsers {
    //put your code here
    private $dbConnection;
    function __construct($host,$username,$password,$database){
        $this->dbConnection = new mysqli($host,$username,$password,$database);
    }
    
    function __destruct(){
        $this->dbConnection->close();
    }
    
    public function saveUser($username,$passwordHash){
        $connection = $this->dbConnection;
        if ($connection->connect_errno){
            throw new mysqli_sql_exception;
        }
        try{
            
            $statement = $connection->stmt_init();
            $insertQuery = "INSERT INTO tblUsers (Username,Password) "
                    . "VALUES (?,?)";
            if($statement->prepare($insertQuery)){
                $statement->bind_param("ss", $username,$passwordHash);
                $statement->execute();
            }else{
                throw new mysqli_sql_exception;
            }
        } catch (Exception $e){
            throw $e;
        }  finally {
            $statement->close();
        }
    }
}
