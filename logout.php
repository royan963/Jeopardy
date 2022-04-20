<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   session_destroy();
   
   echo 'You have cleared your session. Please wait a moment...';
   header('Refresh: 2; URL = php_login.php');
?>
