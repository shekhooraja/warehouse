<?php

include('functions.php');

connect("DELETE FROM validsessions WHERE username = '".$_SESSION['username']."'");

session_destroy();

echo "<script type='text/javascript'>location.href = 'login.php'; </script>";

?>