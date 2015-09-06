<?php
  
  // sends valid headers (hidden info about email)
  // to prevent getting put in spam directory
  
  require_once('class.phpmailer.php');
  
  //$_POST["email"] = "bendvent@gmail.com";
  
  if (isset($_POST["email"])){
    
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $website = $_SERVER['HTTP_HOST'];
    $notes = $_POST["notes"];

    
    // validation
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
        exit("Please enter a valid E-mail and fill in all fields.");
        }
    if($phone == "" || $first_name == "" || $last_name == "" || $notes == "" ){
        exit("Please fill in all fields");
    }
    
    $mail = new PHPMailer();
    
    $mail->From = $email;
    
    $mail->FromName = $first_name . " " .$last_name;
    
    $mail->Subject = "Contact from: ".$website;
    
    $mail->Body = "Form Content: \n
First Name: \n"
.$first_name . "\n
Last Name: \n"
.$last_name . "\n
Email: \n"
.$email . "\n
Phone Number: \n"
.$phone . "\n

Message: \n"
.$notes;
    
    // add as many addresses as you want
    
    $mail->AddAddress("kyleih@optonline.net", "Kyle Hamilton");
    $mail->AddAddress("oldbookshop1@hotmail.com", "Doug Palmieri");
    $mail->AddAddress("aprilsette@gmail.com", "April Sette");
    
    if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      //echo "Message Sent";
    }
  }
  