<?php

if ($_POST['stopspam'] != ""){
 // Es un SPAMbot
 exit();

} else {
 // Es un usuario real, proceder a enviar el formulario.

}
 ?><?php 
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$asunto = 'Consulta web';
	$mensaje = "Nombre: ".$nombre." Email: $email Mensaje:".$_POST['mensaje'];


	if(mail('marie.acevedo@gmail.com', $asunto, $mensaje)){
		echo ".";
	}
 ?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>121Design</title>
    <meta charset="utf-8">
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="266823ec-6789-4160-862c-b138f9a0fef0";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="buckymaler.com">
    <link rel="stylesheet" href="assets/css/main.css">
  </head>
  <body>
    <section id="hero">
		
	
      <header>
       
      </header>
		 <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
      <div class="wrapper">
        <div class="welcome">
          <h1>Gracias por comunicarte, en breve te responderemos </h1>
          
        </div>
        
      </div>
    </section>
   
	  
  </body>
</html>