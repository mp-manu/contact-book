<?php
require_once 'connection.php';

$id = $_POST['id'];

$insert = "DELETE FROM contacts WHERE id=".$id;
if (mysqli_query($conn, $insert)) {
    echo 1;
} else {
    echo $insert;
}