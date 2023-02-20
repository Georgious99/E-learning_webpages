<?php
  $to = "finalyearproject446@gmail.com";
  $subject = "MCQ Results";
  $message = "The results of the MCQ are as follows:\n\n";
  $message .= "Question 1: RSA encryption\n";
  $message .= "Answer: " . $_POST["question1"] . "\n\n";
  $headers = "From: no-reply@example.com\r\n";
  mail($to, $subject, $message, $headers);
?>