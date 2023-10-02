<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = 'mojmelon@gmail.com';
    $subject = 'Nowa wiadomośc od:' . $name;
    $headers = 'From' . $email;

    if (mail($to, $subject, $message, $headers)){
        echo 'Wiadomość została wysłana. Dziękujemy za kontakt!';
    } else {
        echo 'Wystąpił błąd podczas wysyłania wiadomości';
    }
}

?>