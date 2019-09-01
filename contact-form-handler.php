<?php
if(isset($_POST['submit']))
{
    $name = $_Post['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $massage = $_POST['massage'];

    $email_from = 'StronaMonika@sm.pl';
    $email_subject = "Nowa wiadomość od Użytkownika!";
    $email_body = "Nazwa Użytkownika: $name.\n".
                    "Email Użytkownika: $email.\n".
                        "Telefon Użytkownika: $phone.\n".
                            "Wiadomość Użytkownika: $massage.\n";

    $to = 'patrex.bielski@gmail.com';
    $headers = "Od: $email_from \r\n";
    $headers .= "Odbisz: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
}
?>