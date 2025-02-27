<?php
session_start();
session_unset();
session_destroy();
header("Location: localhost/login.php");
exit;
?>