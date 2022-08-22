<?php
$nombre=$_POST['Nombre'];
$email=$_POST['Email'];
$asunto=$_POST['Asunto'];
$para='minisupereltriangulo1806@gmail.com';
$mensaje='Dejanos tus dudas u opiniones';

if($_POST['submit']){
	if(mail($para,$titulo)){
		Echo "Mensaje enviado, muchas gracias.";
	}
	else{
		Echo"Fallo el envio";
	}
}