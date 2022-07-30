<?php

$_server = "localhost";
$username = "root";
$password = "";
$database = "comment_ewank";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // if check connection
    die("<script>alert('Connection Failed.')</script>");
}

?>