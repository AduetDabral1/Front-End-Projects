<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ./Login.php');
}
session_destroy();
header('location: ./Index.php');
?>