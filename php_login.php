<?php
   ob_start();
   session_start();
?>
<!DOCTYPE HTML>
<html>
<head>


<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">

   <head>
      <title>JEOPARDY</title>
      <link href='php_login.css' rel='stylesheet' type='text/css'>
      <!--
      <embed name="theme_song" src="./song.mp3" loop="true" hidden="true" autostart="true"></embed>
      !-->
      <audio autoplay loop>
	  <source src="./song.mp3" type="audio/mpeg">
	      Your browser can't play this sound.
      </audio>


   </head>

   <body>

      <h2>JEOPARDY!</h2>
      <h2> Web Programming Edition </h2>
      <h3>Please login to play.</h3>

      <div class = "container form-signin">

         <?php
            $msg = '';

            if (isset($_POST['login']) && !empty($_POST['username'])
               && !empty($_POST['password'])) {

               if ($_POST['username'] == 'WebDev' &&
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'WebDev';
                  echo 'You have entered a valid use name and password. Please click the Login button again to play the game.';
                  header("Location: ./gameStart.php");
   exit;
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->

      <div class = "container">

         <form class = "form-signin" role = "form"
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control"
               name = "username" placeholder = "username = WebDev"
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 1234" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit"
               name = "login">Login</button>
         </form>

         <!-- <a href = "logout.php">Click here to clean Session.</a> -->

      </div>

   </body>
</html>
