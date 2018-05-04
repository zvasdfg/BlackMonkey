<?php

// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
    header('Location: contact.php'); exit;
}
	
// get the posted data
$name = $_POST['contact_name'];
$email_address = $_POST['contact_email'];
$phone = $_POST['contact_phone'];
$message = $_POST['contact_message'];
	
// check that a name was entered
if (empty($name))
    $error = 'Debes Ingresar Un Nombre!.';
// check that an email address was entered
elseif (empty($email_address)) 
    $error = 'Debes Ingresar Tu Correo!.';
// check for a valid email address
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address))
    $error = 'Direccion de correo Invalida.';
// check that a phone number was entered
if (empty($phone))
    $error = 'Debes Ingresar tu Telefono!.';
// check that a message was entered
elseif (empty($message))
    $error = 'No hay Mensaje.';
		
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location: contact.php?e='.urlencode($error)); exit;
}

$headers = "From: $email_address\r\n"; 
$headers .= "Reply-To: $email_address\r\n";

// write the email content
$email_content = "Name: $name\n";
$email_content .= "Email Address: $email_address\n";
$email_content .= "Phone Number: $phone\n";
$email_content .= "Message:\n\n$message";
	

@mail('nsarellano@hotmail.com', 'BlackMonkey - Contacto', $email_content, $headers);
	

header('Location: contact.php?s='.urlencode('Atenderemos su mensaje, Gracias.')); exit;

?>