<?php

ob_start();
$lifetime=600;
  session_start();
  setcookie(session_name(),session_id(),time()+$lifetime);
  $_SESSION['quantity'] = 1;

//session_destroy();

defined("DB_HOST") ? null : define ("DB_HOST", "localhost");
defined("DB_USER") ? null : define ("DB_USER", "root");
defined("DB_PASS") ? null : define ("DB_PASS", "");
defined("DB_NAME") ? null : define ("DB_NAME", "book_rental");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
require_once("functions.php");

?>