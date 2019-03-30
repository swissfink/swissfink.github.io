<?php

$recepient = "you@yourdomain.com"; // Add Your Email
$sitename = "Osaka - One Page Portfolio Bootstrap 4"; // Add Your Site Name

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$text = trim($_POST["text"]);
$message = "Name: $name\nEmail: $email\nMessage: $text";

$pagetitle = "New request from site \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");