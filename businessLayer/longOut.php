<?php 
session_start();
session_unset("user");
session_unset("rol");
session_unset("user_status");
session_unset("isLogin");
session_destroy();
header("Location: ../index.php");

?>