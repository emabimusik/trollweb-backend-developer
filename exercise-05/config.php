<?php
    session_start();
    require_once 'GoogleAPI/vendor/autoload.php';
    $gClient = new Google_Client();
    $gClient->setClientId('825066006642-2guh849rsb5oartvevcnmsge8m09oagh.apps.googleusercontent.com');
    $gClient->setClientSecret('xWQJkBi9FKs3bGhekpltReDm');
    $gClient->setApplicationName('Social Login');
    $gClient->setRedirectUri('http://localhost:8888/GoogleLogin/g-callback.php');
    $gClient->addScope('https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email');
