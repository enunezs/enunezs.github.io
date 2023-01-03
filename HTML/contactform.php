<?php

if (isset($_POST['submit'])){
    $mailFrom = $_POST['mail'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "contactp@enunezs.com"
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".&message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend")
}
?>