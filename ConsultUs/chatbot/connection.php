<?php

$servername = "3.109.14.4";
$username = "ostechnix";
$password = "Password123#@!";
$dbname = "consultant_app";
$conn;

$conn = mysqli_connect($DBHOST, $DBUSER, $DBPASS, $DBNAME);

if (!$conn) {
    die("No Connection!");
?>
    <script>
        alert("Could Not Connection!")
    </script>
<?php
}

?>