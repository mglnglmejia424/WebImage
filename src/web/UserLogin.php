<?php
        // put your code here
require("../dataAccess/DBConnection.php");

$userName = "";
$password = "";
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $userName = $_POST["txtUserName"];
            $password = $_POST["txtPassword"];
            getUsername($userName,$password);
        }
        function getUsername($userName,$password){
            $DataConnection = new DBConnection();
            $ConnectParams = $DataConnection->getConnectionParameters();
            $DataBase = $DataConnection->Connect($ConnectParams);
            print_r($DataBase);
//            $dbConnection = new mysqli("localhost","DBUser","p3DMTwzpz8wVP6F5","WebImage_DB");
//            print_r($dbConnection);
        }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/metro-bootstrap.min.css">
        
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="../../js/metro.min.js"></script>
        <script type="text/css">
        input.form-control {
            width: 100px;
        }
        div.container{
            width:150px;
            height:400px;
        }
        </script>
    </head>
    <body>
        <form class="form-signin" role="form" method="post" action="<?php $_PHP_SELF ?>">
            <div class="container">
                <h3>Sign in</h3>
                <input id="txtUserName" name="txtUserName" type="text" class="form-control" placeholder="User Name" required autofocus>
                <input id="txtPassword" name="txtPassword" type="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="button">Sign in</button>
            </div>
        </form>
    </body>
</html>
