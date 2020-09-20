<?php

ob_start();
$lifetime=600;
  session_start();
  setcookie(session_name(),session_id(),time()+$lifetime);

//session_destroy();

defined("DB_HOST") ? null : define ("DB_HOST", "sql213.epizy.com");
defined("DB_USER") ? null : define ("DB_USER", "epiz_26591232");
defined("DB_PASS") ? null : define ("DB_PASS", "V7yGMunJdNJ7c");
defined("DB_NAME") ? null : define ("DB_NAME", "epiz_26591232_book_rental");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
require_once("functions.php");

?>