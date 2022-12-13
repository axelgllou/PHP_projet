<html>
 <head>
 <meta charset="utf-8">

 <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
 </head>
 <body style='background:#fff;'>
 <div id="content">
 
 <?php
 session_start();
 if($_SESSION['username'] !== ""){
 $user = $_SESSION['username'];

 echo "Bonjour $user, vous êtes connecté";
 }
 ?>
 
 </div>
 </body>
</html>