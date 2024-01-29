<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["name"];
  $email = $_POST["email"];
  $pesan = $_POST["message"];

  $to = "vinawanda518@gmail.com";
  $subject = "Pesan dari $name";
  $message = "Name: $name\nEmail: $email\nMessage: $message";

  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo "Message sent successfully";
  } else {
    echo "Message failed to send, please use the icon feature available on the website page";
  }
}
?>
