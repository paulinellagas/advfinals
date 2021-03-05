<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'finals');

    $link = mysqli_connect('localhost', 'root', '', 'finals');

    if ($link === false) {
        die('Error: Could not connect . ' . mysqli_connect_error());
    }

