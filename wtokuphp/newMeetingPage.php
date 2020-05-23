<?php

		//connection to database
		$conn = mysqli_connect('localhost','admin','admin','w_toku_php');

		//check connection
		if(!$conn){
			echo 'Błąd w łądczneiu z bazą danych:' . mysqli_connect_error();
		}

		$date = $time = $specialist = '';

		//saving data to database
		if(isset($_POST['submit'])){

			if(($_POST['date'] != null) || ($_POST['time'] != null)){
				$date = mysqli_real_escape_string($conn, $_POST['date']);
				$time = mysqli_real_escape_string($conn, $_POST['time']);
				$specialist = mysqli_real_escape_string($conn, $_POST['specialist']);

				$sql = "INSERT INTO meeting(date,time,specialist) VALUES('$date','$time','$specialist')";

				if(mysqli_query($conn, $sql)){
					// success
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
	<link rel="stylesheet" href="css/styleNewMeeting.css">
</head>

<body>
	<nav>
		<ol>
			<li><a href="customerPage.php"> o mnie </a></li>
      <li><a href="newMeetingPage.php"> umów się </a></li>
			<li><a href="site.php #home"> wyloguj </a></li> <!--Dodać powiadomienie wylogowano i wylogować-->
		</ol>
	</nav>

  <section id="addNewMeeting">
		<div class="container">
			<h2>Wyślij zapytanie o kolejną wizytę</h2>
			<form action="newMeetingPage.php" method="post">
				<p>Data:<input type="date" name="date" required></p>
				<p>Godzina:<input type="time" name="time" min="09:00" max="18:00" required> od 9:00 do 18:00</p>
				<p>Specjalista:<select name="specialist" id="specialist">
											  <option value="Katarzyna Porada">logopeda Katarzyna Porada</option>
											  <option value="Malorzata Potrzeba">neurologopeda Małorzata Potrzeba</option>
											</select></p>
				<button type="submit" name="submit">Wyślij zapytanie</button>
			</form>
		</div>
  </section>

	<section id="meetings">
		<div class="container">
		<div class="row">

			<?php
			//printing out data from database to screen

			$sql = 'SELECT id, date, time, specialist FROM meeting ORDER BY created_at ';
			$result = mysqli_query($conn, $sql);
			if($result)
				$meetings = mysqli_fetch_all($result, MYSQLI_ASSOC);

			foreach($meetings as $meeting){ ?>

						<form class="meetingCard" action="newMeetingPage.php" method="post">
							<div class="inline"><?php echo htmlspecialchars($meeting['date']); ?></div>
							<div class="inline"><?php echo htmlspecialchars($meeting['time']); ?></div>
							<div class="inline"><?php echo htmlspecialchars($meeting['specialist']); ?></div>
							<a class="btn brand z-depth-0 inline" href="deleteMeeting.php?id=<?php echo $meeting['id'] ?>">usuń zapytanie</a>
						</form>

			<?php } ?>

		</div>
	</div>
	</section>


</body>

</html>
