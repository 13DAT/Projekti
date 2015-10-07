<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["user_name"]);
header("Location:user_login_session.php");
?>