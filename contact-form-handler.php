<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:" . $name . "<" . $visitor_email . ">\r\n";

$recipient = "contact@muazzimsaleem.com";

mail($recipient, $subject, $message, $mailheader)
    or die("Error");

echo '

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Thank you for contacting us. We will get back to you as soon as possible</h1>
    <p>To go back to homepage, <a href="index.html">Click Here</a></p>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>

';


// $email_from = 'muazzimsaleem@hotmail.com';
// $email_subject = "New Form Submission";
// $email_body = "User Name: $name.\n" .
//     "User Email: $visitor_email.\n" .
//     "User Message: $message.\n";

// $to = "contact@muazzimsaleem.com";

// // $headers = "From: $email_from \r\n";

// // $headers .= "Reply-To: $visitor_email \r\n";

// mail($to, $email_subject, $email_body);

// // header("Location: index.html");
