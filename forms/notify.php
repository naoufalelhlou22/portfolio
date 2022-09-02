<?php
if (isset($POST['submit'])) {
  $name = $_POST['name'];
  $subject = "Notify me request"
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];
  
  $mailTo = "naoufal.elhlou@etu.uae.ac.ma";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;
  
  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
  
?>
