<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact_book";

$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn) {
    die("Не удалось подключиться к: " . mysqli_connect_error());
}
