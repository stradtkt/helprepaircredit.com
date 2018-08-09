<?php

if(isset($_POST['submit'])){
    $to = "completecreditrepairservices@gmail.com"; // this is your Email address
    $from = $_POST['helprepaircredit.com']; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = "Form submission from helprepaircredit.com";
    $subject2 = "Copy of your form submission";
    $message = $email . " " . "\n" . $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message ". "\n\n" . $name . "\n\n" . $_POST['message'] ."\n\n" . $phone . "\n\n" . $email;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Credit Repair | Credit Repair Services</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="credit cards, credit repair, credit repair services, credit score">
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.ico">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">

  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="assets/theme/assets/vendor/bootstrap/css/bootstrap.css">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/theme/assets/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/theme/assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="assets/theme/assets/vendor/fancybox/jquery.fancybox.css">
  <link rel="stylesheet" href="assets/theme/assets/vendor/cubeportfolio/css/cubeportfolio.min.css">
  <link rel="stylesheet" href="assets/theme/assets/vendor/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="assets/css/fa/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/fa/css/all.min.css">
  <link rel="stylesheet" href="assets/js/remodal/dist/remodal.css">
  <link rel="stylesheet" href="assets/js/remodal/dist/remodal-default-theme.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/theme/assets/css/front.css">
  <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>