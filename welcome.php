<?php 

   //starting the session
 
   $username ="admin";
   $password = "admin123";

  	session_start();
  
  	if(isset($_SESSION['username'])) {

  		echo "<h2> Welcome ".$_SESSION['username']."</h2>"."<br/>";

  		echo "<a href='otherpage.php'>Other Page </a>"."<p/>";

  		echo "<a href='logout.php'> <input type=button value=Logout name=logout></a>";

  	} else {

  		if($_POST['username']==$username && $_POST['password']==$password) {
  			$_SESSION['username']=$username;

  			echo "<script>location.href='welcome.php'</script>";

  		}  else {
  			echo "<script> alert('Access Denied!')</script>";
			  echo "<script> alert('Incorrect username or password')</script>";
			
			  
			  echo "<script>location.href='login.php'</script>";


  		}

  	}

?>


