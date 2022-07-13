<?php

if (isset($_POST['submit'])) {
    $key = $_POST['key'];
    $mode = $_POST['mode'];
    $tempo = $_POST['tempo'];
    $lyrics = $POST['lyrics'];
    $username = $POST['username'];
    $email = $POST['email'];

    $mailTo = "chuckhallidaypdx@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have received a new song form from ".$username.".\n\n".$key.".\n\n".$mode.".\n\n".$tempo.".\n\n".$lyrics;

    mail($mailTo, $headers, $txt);
    header("Location: songform.html?mailsend");
}