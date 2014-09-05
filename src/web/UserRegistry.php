<?php
require("../dataAccess/DataManagerUsers.php");
require("../model/AppSettings.php");

if($_SERVER['REQUEST_METHOD']==="POST"){
     $userName = $_POST["txtUserName"];
     $password = $_POST["txtPassword"];
     $email = $_POST["txtEmail"];
     $connectionParams = (new AppSettings())->getSettings()->constant;
     $dataManagerUsers = new DataManagerUsers("localhost","DBUser","p3DMTwzpz8wVP6F5","WebImage_DB");
     print_r($connectionParams[0]);
     $passwordHash = password_hash($password,PASSWORD_DEFAULT);
     $dataManagerUsers->saveUser($userName, $passwordHash);
//     $Settings = new AppSettings();
//     $params = $Settings->getSettings();
//     foreach($params->constant as $setting):
//         print_r($setting);
//     endforeach;
     
     echo "<script type='text/javascript'>";
     echo "alert('User saved successfully');";
     echo "</script>";
}
?>


<!DOCTYPE html>

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
        
    </head>
    <body>
        <form class="form-signin" role="form" method="post" action="<?php $_PHP_SELF ?>">
            <h2>Sign Up</h2>
            <input id="txtUserName" name="txtUserName" type="text" class="form-control" placeholder="User Name" required autofocus />
            <input id="txtPassword" name="txtPassword" type="password" class="form-control" placeholder="Password" required />
            <input id="txtEmail" name="txtEmail" type="email" class="form-control" placeholder="E-mail*"/>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        </form>
    </body>
</html>
