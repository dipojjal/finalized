<?php

session_start();

unset($_SESSION['is_logged_in']);
unset($_SESSION['user_email']);

header('location: index.php');

?>
