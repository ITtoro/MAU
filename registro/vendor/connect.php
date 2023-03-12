<?php

    $connect = mysqli_connect('localhost', 'root', '', 'user_mau_bd');

    if (!$connect) {
        die('Error connect to DataBase');
    }