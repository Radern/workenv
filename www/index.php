<?php
include_once "includ.php";

$conn = mysqli_connect($servername, $username, $password) or die(mysqli_error());
echo "Connected to MySQL<br />";
mysqli_close($conn);
echo "Disconnected from MySQL<br />";
echo "phpinfo():<br />";
phpinfo();
?>
