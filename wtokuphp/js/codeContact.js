
function sendMessage() {
	var name = document.getElementById('name').value;
	var mail = document.getElementById('mail').value;
	var message = document.getElementById('message').value;
	
	var nameError = document.getElementById('nameError');
	var mailError = document.getElementById('mailError');
	var messageError = document.getElementById('messageError');
	
	var haveAt = 0;
	var at = "@";
	var flagName = 0;
	var flagMail = 0;
	var flagMessage = 0;
	
	if(name.length < 3)
	{
		nameError.innerHTML = "Błąd, zbyt krótkie imię (min. 3 znaki)";
		flagName = 0;
	}
	else
	{
		nameError.innerHTML = "";
		flagName = 1;
	}
	
	if((haveAt = mail.includes(at)) != true)
	{
		mailError.innerHTML = "Brak znaku '@' w adresie e-mail";
		flagMail = 0;
	}
	else
	{
		mailError.innerHTML = "";
		flagMail = 1;
	}
	
	if(message.length < 1)
	{
		messageError.innerHTML = "Wiadomość musi coś zawierać";
		flagMessage = 0;
	}
	else
	{
		messageError.innerHTML = "";
		flagMessage = 1;
	}
	
	if(flagName == 1 && flagMail == 1 && flagMessage == 1)
	{
		document.getElementById("formular").style.display = "none";
		document.getElementById("messageSentText").style.display = "block";
	}
}