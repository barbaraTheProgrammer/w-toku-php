<?php

		//connection to database
		$conn = mysqli_connect('localhost','admin','admin','w_toku_php');

		//check connection
		if(!$conn){
			echo 'Błąd w łądczneiu z bazą danych:' . mysqli_connect_error();
		}

?>

<?php


	if(isset($_POST['delete'])){

		$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

		$sql = "DELETE FROM meeting WHERE id = $id_to_delete";

		if(mysqli_query($conn, $sql)){
			header('Location: newMeetingPage.php');
		} else {
			echo 'query error: '. mysqli_error($conn);
		}

	}

  if(isset($_POST['cancelDeleting'])){
			header('Location: newMeetingPage.php');
	}

	// check GET request id param
	if(isset($_GET['id'])){

		// escape sql chars
		$id = mysqli_real_escape_string($conn, $_GET['id']);

		// make sql
		$sql = "SELECT * FROM meeting WHERE id = $id";

		// get the query result
		$result = mysqli_query($conn, $sql);

		// fetch result in array format
		$meeting = mysqli_fetch_assoc($result);

	}

?>

<!DOCTYPE html>
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
	<link rel="stylesheet" href="css/styleDeleteMeeting.css">
</head>

	<div class="container deleteForm">
		<?php if($meeting): ?>

      <h1>Usunąć zapytanie o wizytę?</h1>
      <p><?php echo $meeting['specialist']; ?></p>
			<p><?php echo $meeting['date']; ?></p>
			<p><?php echo date($meeting['time']); ?></p>

			<!-- DELETE FORM -->
			<form action="deleteMeeting.php" method="POST">
				<input type="hidden" name="id_to_delete" value="<?php echo $meeting['id']; ?>">
				<input type="submit" name="delete" value="usuń" class="btn">
        <input type="submit" name="cancelDeleting" value="powrót" class="btn">
			</form>

		<?php endif ?>
	</div>

</html>
