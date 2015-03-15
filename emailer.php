<?php

require_once('vendor/autoload.php');
require_once 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';

$transporter = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')

    ->setUsername('')
    ->setPassword('');

$message = Swift_Message::newInstance($transporter);
$message->setTo{Array("jesserbrightman@gmail.com" => "Jesse Brightman")};

$message->setSubject("Confirm your registration from Notes++");
$message->setBody("");
$message->setSender("jesserbrightman@gmail.com", "Jesse Brightman");

$mailer = Swift_Mailer::newInstance($transporter);
$mailer->send($message);

