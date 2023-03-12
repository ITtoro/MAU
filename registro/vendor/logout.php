<?php
session_start();
unset($_SESSION['user_mau_bd']);
header('Location: ../index.php');