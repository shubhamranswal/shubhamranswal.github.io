<?php
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $visitor_subject=$_POST['subject'];
    $message=$_POST['message'];

    $email_from='shubhamranswal@gmail.com';

    $email_sub='Website-Response';

    $email_body= "Email of Visitor: $visitor_email.\n". 
        "Visitor's Name       : $name.\n".
        "Visitor's Subject    : $visitor_subject.\n".
        "Visitor's Message    : $message.\n";
    
    $to="shubhamsinghranswal@gmail.com";

    $headers="From; $email_from \r\n";

    $headers .="Reply-to: $visitor_email \r\n";

    mail($to, $email_sub,$email_body,$headers);

    header("Location: index.html");


?>