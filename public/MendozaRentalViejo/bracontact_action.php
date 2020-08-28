<?php
  // Here we get all the information from the fields sent over by the form.
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $to = 'horacioroz@gmail.com';
  $subject = 'Consulta desde www.mendozarental.com (consulta en portugués)';
  $message = 'Nombre: '.$name."\r\n".'Email: '.$email."\r\n".'Teléfono: '.$phone."\r\n".'Mensaje: '.$message;
  $headers = 'From: '.$name. "\r\n";

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
    mail($to, $subject, $message, $headers); //This method sends the mail.
    echo "<p class='success'>Mensagem enviada corretamente. Responderemos sua  consulta brevemente.</p>"; // success message
  } else {
    echo "<p class='error'>Os campos com * são obrigatórios</p>";
  }
?>
