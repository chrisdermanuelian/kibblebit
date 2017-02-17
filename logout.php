<?php
   session_start();

   if(session_destroy()) {
      header("Location: http://localhost/kibblebit//workspace/flat-html5-css3-login-form/index.php");
   }
?>
