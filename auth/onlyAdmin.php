<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
// print_r($_SESSION);
if (!isset($_SESSION["user"]) || $_SESSION["user"]["user_role"] != "admin") {

    header("location: ../index.php");
    exit();
}
