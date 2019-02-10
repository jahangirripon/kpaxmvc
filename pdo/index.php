<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'pdotest';

    // create dsn = database source name
    $dsn = 'mysql:host=' .$host. ';dbname='. $dbname;

    // create pdo instance
    $pdo = new PDO($dsn, $user, $password);