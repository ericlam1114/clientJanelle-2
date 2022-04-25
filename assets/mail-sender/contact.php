<?php


// Taking all values
$name 		= $_POST['name'];
$email 		= $_POST['email'];
$subject 	= "contact form submission by ".$name;
$msg 		= $_POST['msg'];
$output 	= "Name: ".$name."\n\nEmail: ".$email."\n\nMessage: ".$msg;
$to 		= 'janelle@straightenupbyjanelle.com';
// $headers	= 'FROM: "'.$email.'"';

mail($to, $subject, $output); 




