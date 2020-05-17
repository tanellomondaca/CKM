<?php
//Check for empty fields
echo  "Hola";


$name = "tanello";
$email = "hola@hola.com";
$phone = "999999";
$message = "hola";

// Create the email and send the message
$to = "tanello.mondaca@gmail.com"; // Add your email address in between the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = "Website Contact Form:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";
$header = "From: noreply@ckmsolutions.cl\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$header .= "Reply-To: $email";	

ini_set('display_errors', '1');
mail($to, $subject, $body, $header);

echo "esoooo";

if(!mail($to, $subject, $body, $header))
  {http_response_code(500);
  }else{
    echo "nihun error";
  }
  
?>
