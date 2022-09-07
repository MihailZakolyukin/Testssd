<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'testssd');

    if (!$connect) {
        die('Error connect to DataBase');
    }