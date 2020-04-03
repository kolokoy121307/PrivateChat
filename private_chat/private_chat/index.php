<?php
session_start();
$user_id = empty($_SESSION['user_id']) ? NULL : $_SESSION['user_id'];

//Connect to database
include "connection.php";

if ( empty($user_id) ) {
	include "login.php";
} else {
	include "chat.php";
}
?>