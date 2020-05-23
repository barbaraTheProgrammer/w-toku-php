<?php

		//connection to database
		$conn = mysqli_connect('localhost','admin','admin','w_toku_php');

		//check connection
		if(!$conn){
			echo 'Błąd w łądczneiu z bazą danych:' . mysqli_connect_error();
		}

		session_start();

	$mail = $password = '';
	$error = '';


	if(isset($_POST['submit'])){

		$userMail = mysqli_real_escape_string($conn,$_POST['mail']);
		$userPassword = mysqli_real_escape_string($conn,$_POST['password']);

		$sql = "SELECT id FROM user WHERE e_mail = '$userMail' and password = '$userPassword'";
		$result = mysqli_query($conn,$sql);
		$userId = mysqli_fetch_array($result, MYSQLI_ASSOC);

		$count = mysqli_num_rows($result);

		// If result matched $myusername and $mypassword, table row must be 1 row

		if($count == 1) {
			$_SESSION['$userMail'] = $userMail;
			header("location: newMeetingPage.php");
		}else {
			 $error = "e-mail lub hasło są niewłaściwe";
		}
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--znacznik do reponsywnośći ??-->
	<title>W TOKU</title>
	<meta name="description content" = "Witaj, zapraszamy. Znajdziesz na naszej stronie info o logopedzie."/>
	<link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="height=device-height, initial-scale=1.0">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/styleLogin.css">
</head>

<body>
	<nav>
		<ol>
			<li><a href="site.php #home"> home </a></li>
			<li><a href="site.php #offer"> oferta </a></li>
			<li><a href="site.php #prices"> cennik </a></li>
			<li><a href="site.php #aboutUs"> o nas </a></li>
			<li><a href="site.php #opinions"> opinie </a></li>
			<li><a href="site.php #contact"> kontakt </a></li>
			<li><a href="loginPage.php"> logowanie </a></li>
		</ol>
	</nav>

  <div class="container">
    <section class ="loginContainer" id="loginArea">
		<form action="loginPage.php" method="post">
			<h1> zaloguj się</h1>
			<input type="text" name="mail" placeholder="e-mail">
			<input type="password" name="password" placeholder="hasło">
			<div class="red-text"><?php echo $error; ?></div>
			<button type="submit" name="submit" class="">zaloguj</button>
			<div id="registration" >
				<a href="registrationPage.php">zarejestruj się</a>
			</div>
		</form>
    </section>
  </div>

</body>

</html>
