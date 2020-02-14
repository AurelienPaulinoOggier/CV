<!DOCTYPE html>
<html>
	<head>
        <link rel="stylesheet" href="stylePF.css">
		<title> Projecten Berwerken </title>
	</head>
	<body>
        <form method="POST">
		<nav>
                <ul>
                    <li><a href="http://localhost/CV/P1.3Home.php" style="color: #ffedde; text-decoration: none;"> HOME <a/></li>
                    <li><a href="http://localhost/CV/P1.3CV.php" style="color: #ffedde; text-decoration: none;"> CV <a/></li>
                    <li><a href="http://localhost/CV/P1.3P.php" style="color: #ffedde; text-decoration: none;"> Projecten <a/></li>
                    <li><a href="http://localhost/CV/P1.3CVB.php" style="color: #ffedde; text-decoration: none;"> CV Berwerken <a/></li>
                    <li><a href="http://localhost/CV/P1.3PB.php" style="color: #ffedde; text-decoration: none;"> Projecten Bewerken <a/></li>
                    <li><a href="http://localhost/CV/P1.3Login.php" style="color: #ffedde; text-decoration: none;"> Login <a/></li>
                </ul>
		</nav>
		</form>
		
		<?php
		session_start();

		if(isset($_SESSION['login'])) {
			$name = $_SESSION['login'];
			echo "<h2>"."Welkom, ". $name->name. "<h2/>";
		}else {header('Location: P1.3Login.php');}
		
		$host = "localhost";
        $dbname = "cv";
        $username = "root";
        $password = "";

        $con = new PDO ("mysql:host=".$host.";dbname=".$dbname.";"
			,$username, $password);
		
		//&eacute;
		
		?>
	</body>
</html>