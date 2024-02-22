<?php

if (isset($_POST['email'])) {    
    $userMail = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    if ($userMail === false) {
        echo "Invalid email format";
        exit;
    }
    //"hanale2002@skola.goteborg.se";
    $to = 's103154@gmail.com';
    $subject = "New email subscription";
    $message = "Email: " . $userMail;
    $headers = [
        "From" => "webmaster@example.com"
    ];

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully";
    } else {
        echo "Failed to send email";
    }
}
