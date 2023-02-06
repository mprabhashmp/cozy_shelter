<?php
session_start();

	unset($_SESSION["username"]);
	unset($_SESSION["status"]);
	session_destroy();
	echo '<script type="text/javascript">
                window.location.href="index.php";
                </script>';
?>