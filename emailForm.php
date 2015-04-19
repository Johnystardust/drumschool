<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 4/14/2015
 * Time: 12:08 PM
 */

//if(!isset($_POST['submit'])){
//    // This page should not be accessed directly. Need to submit the from.
//    echo 'error; you need to submit the form';
//}

// Save the data
$name = $_POST["name"];
$client_email = $_POST["email"];
$reason = $_POST["reason"];
$location = $_POST["location"];
$message = $_POST["message"];

// Additional data
$time = time();
$date = strftime("%d/%m/%y %H:%M", $time);

// Create the body from the data
$email_body = "You have recieved a new email from {$name}.\n".
    "With the email-address {$client_email}.\n\n".
    "The reason for the email: {$reason}.\n".
    "The location i'm interested: {$location}.\n\n".
    "Here is the message:\n".
    "{$message}\n\n".
    "Message send at: {$date}.\n";


// Subject and Where to send
$email_subject = $reason;
$to = "info@thedrumschool.nl";

// Headers
$headers  = "From: $client_email \r\n";

// Mail it
mail($to, $email_subject, $email_body, $headers);

// Redirect back to te home page
header('Location: index.php');