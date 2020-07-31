<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message']


    $email_from = 'drizzyigfx@gmail.com';

    $email_subject = "New Form from lectr.tk";

    $email_body = "User: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Message: $message.\n";

                    $to = "drizzyigfx@gmail.com";

                    $headers = "From $email_form \r\n";

                    $headers .= "Reply-To: $visitor_email \r\n";

                    mail($to,$email_subject,$email_body,$headers);

                    header("Location: contact.html");

?>