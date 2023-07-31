<?php
require_once 'connection.php';

$fio = $_POST['fio'];
$phone = $_POST['phone'];
$insert = "insert into contacts values(default, '$fio','$phone', NOW(), NOW())";
if (mysqli_query($conn, $insert)) {
    echo "<div class='row contact-card-item' id='contact".mysqli_insert_id($conn)."'>
            <div class='col-md-12 contact-items'>
                <h6>".$fio." <a class='remove-btn' onclick='remove(this)' data-id='".mysqli_insert_id($conn)."' href='javascript:void(0)'>x</a></h6>
                <p>".$phone."</p>
            </div>
        </div>";
} else {
    echo $insert;
}
