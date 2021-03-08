<?php 

   //starting the session
  session_start();

  if (isset($_SESSION['username'])) {
  	echo "Welcome to other page <h2/> <p/>";
  	echo "<a href='welcome.php'> <input type=button name=back value=Back> </a>";

  } else {
  	echo "<script> location.href='login.php' </script>";
  }

?>


