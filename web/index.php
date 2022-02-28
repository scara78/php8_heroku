<?php
declare(strict_types=1);

session_start();

if (empty($_SESSION['username'])) {
    include("index.html");
} else {
    echo 'Привет, ' . $_SESSION['username'] . '</br>';
    echo '<a href="exit.php">Выйти</a>';
}