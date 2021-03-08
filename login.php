

<?php 

   //declaring seesion variables
   $_SESSION["username"] = "admin";
   $_SESSION["password"] = "admin123";

 //  echo "Session variables are set";

?>
<center>
	<form action = "welcome.php" method="post"> 

	<h2>Enter the correct details below </h2>

	<b>	Username: </b> <br/> <input type="text" name="username" placeholder =" Name = admin"> <br/><br/>

	<b>	Password: </b> <br/> <input type="password" name="password" placeholder="Password = admin123"> <br/> <br/>

		<input type="submit" name="submit" Value="Submit">
</center>
	</form>