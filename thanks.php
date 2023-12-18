<?php

if ($_SERVER["REQUEST_METHOD"]=== "POST") {
    $name = $_POST['name'];
    $surname= $_POST['surname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
}

if (empty($name) || empty($surname) || empty($email) || empty($subject) || empty($message)) {
    echo "All fields are mandatory";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid E-mail format";
} else {
    echo "Thanks for your message!";
}