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
			<p>Data:<input type="date" required></p>
			<p>Godzina:<input type="time" min="09:00" max="18:00" required> od 9:00 do 18:00</p>
			<p>Specjalista:<select id="specialist">
										  <option value="worker1">logopeda Katarzyna Porada</option>
										  <option value="worker2">neurologopeda Małorzata Potrzeba</option>
										</select></p>
			<button type="submit">Wyślij zapytanie</button>
		</div>
  </section>


</body>

</html>
