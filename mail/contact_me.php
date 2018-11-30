<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['apellido'])     ||
   empty($_POST['email'])     ||
   empty($_POST['asunto'])       ||
   empty($_POST['mensaje'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = $_POST['name'];
$apellido = $_POST['apellido'];
$email_address = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
   
// Create the email and send the message
$to = 'mail@mail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Ha recibido un nuevo mensaje desde su sitio web de:  $name";
$email_body = "Ha recibido un nuevo mensaje desde su sitio web.\n\n".
"Estos son los detalles:\n
Nombre: $name\n
Apellido: $apellido\n
Email: $email_address\n
Asunto: $asunto\n
Mensaje:\n$mensaje";

$headers = "From: lulimonaco@id4you.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
