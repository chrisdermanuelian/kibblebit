<?php

   include("C:\wamp64\www\kibblebit\workspace\config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT USER_ID FROM USER WHERE USERNAME = '$myusername' and PASSWORD = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      #$active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         #session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         #echo $_SESSION['login_user'];

      header("location: http://localhost/kibblebit/workspace/html5up-big-picture/welcome.php");
        exit();
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>