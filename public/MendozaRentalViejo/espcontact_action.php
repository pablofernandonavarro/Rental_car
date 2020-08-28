<?php
  // Here we get all the information from the fields sent over by the form.
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
   
  $to = 'horacioroz@gmail.com, mendozarental@gmail.com, info@mendozarental.com';
  $subject = 'Consulta desde www.mendozarental.com (consulta en español)';
  $message = 'Nombre: '.$name."\r\n".'Email: '.$email."\r\n".'Teléfono: '.$phone."\r\n".'Mensaje: '.$message;
  $headers = 'From: '.$name. "\r\n";
   
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
    mail($to, $subject, $message, $headers); //This method sends the mail.
    echo "<p class='success'>Mensaje enviado correctamente. Responderemos su consulta a la brevedad.</p>"; // success message
  } else {
    echo "<p class='error'>Recuerde que los campos con * son obligatorios!</p>";
  }
?>