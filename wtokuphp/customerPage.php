<?php

		//connection to database
		$conn = mysqli_connect('localhost','admin','admin','w_toku_php');

		//check connection
		if(!$conn){
			echo 'Błąd w łądczneiu z bazą danych:' . mysqli_connect_error();
		}

		session_start();

		$userMail = $_SESSION['$userMail'];

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
	<link rel="stylesheet" href="css/styleCustomer.css">
</head>

<body>
	<nav>
		<ol>
			<li><a href="customerPage.php"> o mnie </a></li>
      <li><a href="newMeetingPage.php"> umów się </a></li>
			<li><a href="site.php #home"> wyloguj </a></li>
		</ol>
	</nav>

	<section id="meetings">
		<div class="container">
		<div class="row">

			<?php
			//printing out data from database to screen

			$sql = "SELECT first_name, last_name, tel FROM user WHERE e_mail = '$userMail'";
			$result = mysqli_query($conn, $sql);
			if($result)
				$aboutUser = mysqli_fetch_all($result, MYSQLI_ASSOC);

				foreach($aboutUser as $aboutUserSingleInfo){ ?>

							<form class="infoAboutUser" action="newMeetingPage.php" method="post">
								<div class="info">
									<p>imię:</p>
									<?php echo htmlspecialchars($aboutUserSingleInfo['first_name']); ?>
								</div>
								<div class="info">
									<p>nazwisko:</p>
									<?php echo htmlspecialchars($aboutUserSingleInfo['last_name']); ?>
								</div>
								<div class="info">
									<p>numer telefonu:</p>
									<?php echo htmlspecialchars($aboutUserSingleInfo['tel']); ?>
								</div>
								<div class="info">
									<p>adres e-mail:</p>
									<?php echo htmlspecialchars($userMail); ?>
								</div>
							</form>

				<?php } ?>

		</div>
	</div>
	</section>


</body>

</html>
