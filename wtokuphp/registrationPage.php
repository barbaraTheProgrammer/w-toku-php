<?php

		//connection to database
		$conn = mysqli_connect('localhost','admin','admin','w_toku_php');

		//check connection
		if(!$conn){
			echo 'Błąd w łądczneiu z bazą danych:' . mysqli_connect_error();
		}

	$firstName = $lastName = $mail = $tel = $password = $passwordAgain = '';
	$errors = array('firstName' => '', 'lastName' => '', 'mail' => '', 'tel' => '', 'password' => '' , 'passwordAgain' => '');
	$firstNameFlag = false;
	$lastNameFlag = false;
	$mailFlag = false;
	$telFlag = false;
	$passwordFlag = false;
	$passwordAgainFlag = false;

	if(isset($_POST['submit'])){

		// check first name
		if(empty($_POST['firstName'])){
			$errors['firstName'] = 'imię jest wymagane';
		} else{
			$firstName = $_POST['firstName'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $firstName)){
				$errors['firstName'] = 'można używać tylko liter i spacji';
			} else {
				$firstNameFlag = true;
			}
		}

		// check last name
		if(empty($_POST['lastName'])){
			$errors['lastName'] = 'nazwisko jest wymagane';
		} else{
			$lastName = $_POST['lastName'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $lastName)){
				$errors['lastName'] = 'można używać tylko liter i spacji';
			} else {
				$lastNameFlag = true;
			}
		}

		// check email
		if(empty($_POST['mail'])){
			$errors['mail'] = 'e-mail jest wymagany';
		} else{
			$mail = $_POST['mail'];
			if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
				$errors['mail'] = 'e-mail musi być poprawny';
			}
			else{
				$mailFlag = true;
			}
		}

		// check telephone
		if(empty($_POST['tel'])){
			$errors['tel'] = 'numer telefonu jest wymagane';
		} else{
			$tel = $_POST['tel'];
			if(!preg_match('/^[0-9]*$/', $tel)){
				$errors['tel'] = 'można używać tylko cyfr';
			} else {
				$telFlag = true;
			}
		}

		// check password
		if(empty($_POST['password'])){
			$errors['password'] = 'hasło jest wymagane';
		} else{
			$password = $_POST['password'];
			if(!preg_match('/^[a-zA-Z0-9]+/', $password)){
				$errors['password'] = 'hasło musi mieć litrę i cyfrę';
			} else {
				$passwordFlag = true;
			}
		}

		// check password secound
		if(empty($_POST['passwordAgain'])){
			$errors['passwordAgain'] = 'powtórz hasło';
		} else{
			$passwordAgain = $_POST['passwordAgain'];
			if($password != $passwordAgain){
				$errors['passwordAgain'] = 'hasło niepoprawnie powtórzone';
			} else {
				$passwordAgainFlag = true;
			}
		}


		if($firstNameFlag==true&& $lastNameFlag==true&&$mailFlag==true&&$telFlag==true&&$passwordFlag==true&&$passwordAgainFlag==true){
			// escape sql chars
			$firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
			$lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
			$mail = mysqli_real_escape_string($conn, $_POST['mail']);
			$tel = mysqli_real_escape_string($conn, $_POST['tel']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);


			// create sql
			$sql = "INSERT INTO user(first_name,last_name,e_mail,tel,password) VALUES('$firstName','$lastName','$mail','$tel','$password')";

			// save to db and check
			if(mysqli_query($conn, $sql)){
				// success
				header('Location: loginPage.php');
			} else {
				echo 'błąd zapytania: '. mysqli_error($conn);
			}
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
	<link rel="stylesheet" href="css/styleRegistration.css">
</head>

<body>
	<nav>
		<ol>
      <li><a href="site.php"> home </a></li>
			<li><a href="loginPage.php"> powrót </a></li>
		</ol>
	</nav>

  <div class="container">
    <section class ="registerContainer" id="registerArea">
      <h1> zarejestuj się</h1>
			<form action="registrationPage.php" method="post">
				<input type="text" name="firstName" value="<?php echo htmlspecialchars($firstName) ?>" placeholder="imię">
				<div class="red-text"><?php echo $errors['firstName']; ?></div>
	      <input type="text" name="lastName" value="<?php echo htmlspecialchars($lastName) ?>" placeholder="nazwisko">
				<div class="red-text"><?php echo $errors['lastName']; ?></div>
	      <input type="text" name="mail" value="<?php echo htmlspecialchars($mail) ?>" placeholder="e-mail">
				<div class="red-text"><?php echo $errors['mail']; ?></div>
	      <input type="text" name="tel" value="<?php echo htmlspecialchars($tel) ?>" placeholder="telefon">
				<div class="red-text"><?php echo $errors['tel']; ?></div>
	      <br><br><br><br>
	      <input type="password" name="password" placeholder="hasło">
				<div class="red-text"><?php echo $errors['password']; ?></div>
	      <input type="password" name="passwordAgain" placeholder="powtórz hasło">
				<div class="red-text"><?php echo $errors['passwordAgain']; ?></div>
	      <button type="submit" name="submit">zarejestuj</button>
			</form>
    </section>
  </div>

</body>

</html>
