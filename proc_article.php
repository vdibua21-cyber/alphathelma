<?php
  $Name = $_POST['name'];
  $Email = $_POST['email'];
  $Phone = $_POST['phone'];
  $num_check = strlen($Phone);
  $name = $name;

  if($Name == '' || $Email == '' || $Phone == '')
    {
    $error = 'Your Name, Email, and Phone are required';
    include('index.php');
    exit;
    }

    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email format';
        include('index.php');
        exit;
    }

    if($num_check != 11)
    {
        $error = 'Enter a valid GSM number';
        include('article.php');
        exit;
    }

    $to = "abdsalamhamad3@gmail.com";
    $mail_sub = "Feedback from Website";
    $from = "From: no-reply@alphathelma.com\r\n";
    $body = 'Below is the infor that was filles'."\n"
  .'Name: '.$Name."\n"
  .'Email: '.$Email."\n"
  .'Phone: '.$Phone."\n"
  ."***************************\n\n"; 

    mail($to,$mail_sub,$body,$from);

    //save details in a text file
    $file = fopen('data.txt','a');
    fwrite($file,$body);
    fclose($file);

    $success = '<a href="https://wa.me/+2348031930275" target="_blank" class="btn btn-brand-primary fw-bold px-4 py-3 shadow text-uppercase w-100">Your seat has been reserved. <br><br>Contact Us on WhatsApp</a>';
    include('article.php');
    exit;
?>