<?php
session_start();
session_destroy();

header("Location:login_signup.php?change=ok#tologin");
?>