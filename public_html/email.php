<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'Im Alex, Im just testing'; 
    $to = 'eacunagon@gmail.com'; 
    $subject = 'Hello';
    			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit'] ) {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Tu mensaje ha sido enviado!</p>';
	} else { 
	    echo '<p>Algo salio mal!!</p>'; 
	} 
    } 
?>