<?php

		//connection to database
		$conn = mysqli_connect('localhost','admin','admin','w_toku_php');

		//check connection
		if(!$conn){
			echo 'Błąd w łądczneiu z bazą danych:' . mysqli_connect_error();
		}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--znacznik do reponsywnośći ??-->
	<title>W TOKU</title>
	<meta name="description content" = "Witaj, zapraszamy. Znajdziesz na naszej stronie info o logopedzie."/>
	<!--<link rel="shortcut icon" href="img/logo.png">-->
	<link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="height=device-height, initial-scale=1.0">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<!--<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>-->
	<script src="js/codeOpinions.js"></script>
	<script src="js/codeContact.js"></script>
</head>

<body onload="currentSlide(1)">
	<nav>
		<ol>
			<li><a href="#home"> home </a></li>
			<li><a href="#offer"> oferta </a></li>
			<li><a href="#prices"> cennik </a></li>
			<li><a href="#aboutUs"> o nas </a></li>
			<li><a href="#opinions"> opinie </a></li>
			<li><a href="#contact"> kontakt </a></li>
			<li><a href="loginPage.php"> logowanie </a></li>
		</ol>
	</nav>

	<section id="home">
		<div class="container">
			<img src="img/logo.png" alt="logo poradni">
			<h1>poradnia logopedyczna</h1>
			<p> Witamy na stronie poradni. Zajmujemy się pomocą w odzyskaniu sprawności językowej osób, które:
			mają trudności w swobodnym wysławianiu się, zostały doświadczone przez problemy neurologiczne
			, mierzą się z chorobami lub chciałyby pracować nad jakością przekazu
			– zapraszam szefów i mówców. Proponuję fachową pomoc, popartą wieloletinm doświadczeniem.</p>
		</div>
	</section>

	<section id="offer">
		<div class="container">
			<h1>oferta</h1>
			<article>
				<div class="aboutOffer">
					<img src="img/ikona1.png" alt="ikona1">
				</div>
				<div class="aboutOffer">
					<h2>diagnoza wad wymowy</h2>
					<p>Diagnoza i korygowanie wad wymowy. Wspomaganie rozwoju mowy dzieci.
					Wczesne wspomaganie logopedyczne.</p>
				</div>
			</article>
			<article>
				<div class="aboutOffer">
					<img src="img/ikona3.png" alt="ikona1">
				</div>
				<div class="aboutOffer">
					<h2>terapia mowy</h2>
					<p>Indywidualna terapia mowy osób dorosłych po udarach, operacjach neurologicznych i w
					wybranych schorzeniach (m. in. Parkinson, SM, SLA, afazja, dyzartria).</p>
				</div>
			</article>
			<article>
				<div class="aboutOffer">
					<img src="img/ikona2.png" alt="ikona1">
				</div>
				<div class="aboutOffer">
					<h2>przemówienia publiczne</h2>
					<p>Pomoc w przygotowaniu wystąpień publicznych. Również konsultacje i poprawy publicznych wpisów,
					jak i artykułów.</p>
				</div>
			</article>
		</div>
	</section>

	<section id="prices">
		<div class="container">
			<h1>cennik</h1>
		</div>
		<div>
			<table>
				<tr>
					<th></th>
					<th>diagnoza wad wymowy</th>
					<th>terapia mowy</th>
					<th>przemówienia publiczne</th>
				</tr>
				<tr>
					<td><span>wizyta</span></td>
					<td>70zł/godz.</td>
					<td>90zł/godz.</td>
					<td>50zł/godz.</td>
				</tr>
				<tr>
					<td><span>pakiet (10 wizyt)</span></td>
					<td>60zł/godz.</td>
					<td>75zł/godz.</td>
					<td>40zł/godz.</td>
				</tr>
			</table>
		</div>
	</section>

	<section id="aboutUs">
		<div class="container">
			<h1>o nas</h1>
			<article>
				<div class="aboutUs">
					<h2>Katarzyna Porada</h2>
					<h3>specjalizacja: logopoedia</h3>
					<p>Pracuję w poradni od kilku lat. Specjalizuję się w pracy z dziećmi i młodzieżą.</p>
					<p>Opieram się na metodach sprawdzonych. Najważniejsza jest dla mnie cierpliwość i znalezienie
					dobrej komunikacji z dzieckiem.</p>
					<p>Ukończyłam studia magisterskie z logopedii na Uniwestytecie Warszawskim.</p>
					<p>Wiem jak ważna w życiu każdego człowieka jest mowa i komunikacja, dlatego
					staram się zadbać o naszych klientów najlepiej jak potrafię.</p>
				</div>
				<div class="aboutUs">
					<img src="img/woman1.jpg" alt="pracownik pierwszy zdjęcie">
				</div>
			</article>
			<article>
				<div class="aboutUs">
					<h2>Małgorzata Potrzeba</h2>
					<h3>specjalizacja: neurologopedia</h3>
					<p>Od długiego czasu zajmuje się przypadkami osób dorosłych i starszych z problemami mowy.</p>
					<p>Zawsze staram się personalizować zadania dla ludzi, z którymi pracuję. Ważne jest dla mnie, żeby
					zajęcia były pomocne, ale także ciekawe.</p>
					<p>Moje wykształcenie zdobyłam na Uniwestytecie Łódzkim.</p>
					<p>Doświadczenie zdobyłam podczas wielu godzin pracy z pacjentami w Ośrodku Rehabilitacji Poudarowej
					i Afazji.</p>
				</div>
				<div class="aboutUs">
					<img src="img/woman2.jpg" alt="pracownik drugi zdjęcie">
				</div>
			</article>
			<article>
				<h1 id="localization">gdzie nas znajdziesz</h1>
				<div class="aboutUs">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2528.0365382298205!2d17.942551316027817!3d50.68214677950803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471053bb3bd38e83%3A0xa96fc3d92d459931!2sPryzma.%20Dom%20Studenta%20Politechniki%20Opolskiej!5e0!3m2!1spl!2spl!4v1586460386649!5m2!1spl!2spl" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				<div class="aboutUs">
					<h2>poradnia logopedyczna " W TOKU "</h2>
					<p><span style="color: #E0A47E">adres :</span> ul.Stanisława Mikołajczyka 14, Opole</p>
					<p><span style="color: #E0A47E">numer kontaktowy :</span> +48 603 663 364</p>
					<p><span style="color: #E0A47E">adres e-mail :</span> wtoku@email.pl</p>
				</div>
			</article>
		</div>
	</section>

	<section id="opinions">

		<div class="container">
			<h1>opinie klientów</h1>

			<!-- Slideshow container -->
			<div class="slideshow-container">

			  <!-- Full-width images with number and caption text -->
			  <div class="mySlides fade">
				<img src="img/opinia1.png">
			  </div>

			  <div class="mySlides fade">
				<img src="img/opinia2.png">
			  </div>

			  <div class="mySlides fade">
				<img src="img/opinia3.png">
			  </div>

			  <div class="mySlides fade">
				<img src="img/opinia4.png">
			  </div>

			  <div class="mySlides fade">
				<img src="img/opinia5.png">
			  </div>

			  <!-- Next and previous buttons -->
			  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>

			<!-- The dots/circles -->
			<div style="text-align:center">
			  <span class="dot" onclick="currentSlide(1)"></span>
			  <span class="dot" onclick="currentSlide(2)"></span>
			  <span class="dot" onclick="currentSlide(3)"></span>
			  <span class="dot" onclick="currentSlide(4)"></span>
			  <span class="dot" onclick="currentSlide(5)"></span>
			</div>
		</div>
	</section>



	<!--form validation-->
	<?php
	$name = $mail = $message = '';
	$errors = array('name' => '', 'mail' => '', 'message' => '');
	$nameFlag = false;
	$mailFlag = false;
	$messageFlag = false;

	if(isset($_POST['submit'])){
		// check title
		if(empty($_POST['name'])){
			$errors['name'] = 'imie jest wymagane';
		} else{
			$name = $_POST['name'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
				$errors['name'] = 'imię musi składać się ze znaków i spacji';
			}
			else{
				$nameFlag = true;
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

		// check title
		if(empty($_POST['message'])){
			$errors['message'] = 'wiadomość jest wymagana';
		} else {
			$message = $_POST['message'];
			$messageFlag = true;
		}
	}
	?>


	<section id="contact">
		<div class="container">
			<h1>kontakt</h1>
			<div id="messageSentText" class="fade">Wiadomość wysłano, dziekujemy!</div>
			<form id="formular" action="site.php" method="post">
				<!--name-->
				<input id="name" name="name" type="text" value="<?php echo htmlspecialchars($name) ?>" placeholder="Jak mamy się do Ciebie zwracać?">
				<div class="red-text"><?php echo $errors['name']; ?></div>
				<!--email-->
				<input id="mail" name="mail" type="email" value="<?php echo htmlspecialchars($mail) ?>" placeholder="Podaj swojego maila, skontaktujemy się z Tobą!">
				<div class="red-text"><?php echo $errors['mail']; ?></div>
				<!--text message-->
				<textarea id="message" name="message" value="<?php echo htmlspecialchars($message) ?>" placeholder="treść"><?php echo $message;?></textarea>
				<div class="red-text"><?php echo $errors['message']; ?></div>
				<!--radio-->
				<br>
				<label>Szukam zajęć dla:</label>
				<div id="radioButtonsFormular">
					<input type="radio" id="forMe" name="forWho" value="dla mnie" checked="checked">
					<label for="forMe">mnie</label>
					<input type="radio" id="forChild" name="forWho" value="dla dziecka">
					<label for="forChild">dziecka</label>
					<input type="radio" id="forAdult" name="forWho" value="dla doroslego">
					<label for="forAdult">dorosłego</label>
				</div>
				<!--file-->
				<br><br><br>
				<label>Można wgrać opinię innych specjalistów:</label>
				<input type="file" name="file" id="fileButton">
				<br><br>
				<a href="#contact"><button type="submit" name="submit" onclick="sendMessage()">wysyłam</button></a>
			</form>
		</div>

		<!--printing sent form-->
		<?php
		// Function defnition
		function function_alert($message) {
		    // Display the alert box
		    echo "<script>alert('$message');</script>";
		}

		if($nameFlag == true && $mailFlag == true && $messageFlag == true){

			$name = mysqli_real_escape_string($conn, $_POST['name']);
			$mail = mysqli_real_escape_string($conn, $_POST['mail']);
			$message = mysqli_real_escape_string($conn, $_POST['message']);
			$forWho = mysqli_real_escape_string($conn, $_POST['forWho']);

			// create sql
			$sql = "INSERT INTO form_message(name,mail,message,for_who) VALUES('$name','$mail','$message','$forWho') ";

			//save to database
			if(mysqli_query($conn, $sql)){
				//success
				$newLine = '\n';
				$formContent = "WYSŁANO:".$newLine.$_POST['name'].$newLine.$_POST['mail'].$newLine.$_POST['message'].$newLine.$_POST['forWho'];
				function_alert($formContent);
			} else {
				//error
				echo 'błąd zapytania:' . mysqli_error($conn);
			}
		}
		?>


	</section>

</body>

<footer>
	<div class="copyright">
		<p>Copyright &copy; 2020 Basia Kowol</p>
	</div>
</footer>

</html>
