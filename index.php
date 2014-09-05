<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Web Image</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/metro-bootstrap.min.css">
        

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="js/metro.min.js"></script>
        <script type="text/javascript">
            function resizeIframe(obj) {
//                obj.style.height = (obj.contentWindow.document.body.scrollHeight) + 'px';
//                obj.style.width = (obj.contentWindow.document.body.scrollWidth) + 'px';
            }
        </script>
        
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Web Image</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#">Sign Up</a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container theme-showcase" role="main" style="height:500px;padding:60px">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <iframe src="src/web/UserRegistry.php" frameBorder="0" 
                        style="overflow: hidden;height: 400px;width: 100%" height="100%" width="100%">
                        </iframe>
                    </div>
                    <div class="col-md-4">
                        <iframe src="src/web/UserLogin.php" frameBorder="0" 
                        style="height: 400px;overflow:hidden" scrolling="no">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
