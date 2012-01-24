//PHP. Enviar Email.
<?php

	$nombre= $_POST['name'] ;
	$email= $_POST['email'] ;
	$telefono= $_POST['phonenumber'] ;
	$mensaje= $_POST['message'] ;
	$target="contacto@helianproject.nixiweb.com";
		mail($target,'Correo-Contacto','Mensaje: '.$mensaje.' Nombre: '.$nombre.' E-mail: '.$email.' Telefono '.$telefono);
	
	//redireccionar 
	Header("Location: http://helianproject.nixiweb.com/confirm_send_email.html");
			
?>
	
