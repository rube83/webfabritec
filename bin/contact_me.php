<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'info@fabritec.com.pe'; // PUT YOUR EMAIL ADDRESS HERE
$to1 = 'proyectos@fabritec.com.pe';
$email_subject = "Fabritec Contact Form:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Hemos recibido un nuevo mensaje desde el formulario de contacto de la página web.\n\n"."Estos son sus detalles:\n\nNombre: $name\n\nTelefono: $phone\n\nEmail: $email_address\n\nMensaje:\n$message";
$email_body1 = "Gracias por contactarse con nosotros.\n\n"."Estos son los detalles de su mensaje:\n\nNombre: $name\n\nTelefono: $phone\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "From: noreply@fabritec.com.pe\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
mail($to1,$email_subject,$email_body,$headers);
mail($email_address,$email_subject,$email_body1,$headers);
return true;			
?>