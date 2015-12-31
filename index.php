<?php

    //
    error_reporting(E_ALL);
    ini_set('display_errors','On');
    ini_set('html_errors','On');
    ini_set('log_errors','On');

    //
    date_default_timezone_set('UTC');

    // composer autoload
    require_once(__DIR__.'/vendor/autoload.php');

    echo 'Your IP is ';
    var_dump(HelloWorld\Client\User::getIp());
    echo "\n";
