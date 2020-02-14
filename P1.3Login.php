<!DOCTYPE html>
<html>
	<head>
	
        <link rel="stylesheet" href="stylePF.css">
		<title> Login </title>
				
	</head>
	<body>
        <form method="POST">
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<h1>Login</h1>
		<h3>Naam:<input name="name" type="name"><br/>
		Wachtwoord:  <input name="wachtwoord" type="password"></h3>
		<h3><input type = "submit" name = "btnLogin" value = "inlogen" /><br/><br/>
		<input type = "submit" name = "btnHome" value= "terug naar Home" /></h3>
		</form>
		
		<?php
		session_start();
		$host = "localhost";
        $dbname = "cv";
        $username = "root";
        $password = "";

        $con = new PDO ("mysql:host=".$host.";dbname=".$dbname.";"
			,$username, $password);
		
		if(isset($_POST{'btnHome'})){
			Header("location: P1.3Home.php");
		}
		
		if(isset($_POST{'btnLogin'})){	
			$name = $_POST["name"];
			$wachtwoord = $_POST["wachtwoord"];
		
			$query = "SELECT * FROM login WHERE name = '$name' AND password = '$wachtwoord'";
			$stm = $con->prepare($query);
			$stm->execute();
			$login = $stm->fetch(PDO::FETCH_OBJ);
				
			if($login != false){$_SESSION['login'] = $login;

				Header("location: P1.3Home.php");
					
			}else echo "<h3>Naam en/of Wachtwoord is fout</h3>";
		}		
		?>
	</body>

</html>