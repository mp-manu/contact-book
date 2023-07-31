<?php
require_once 'connection.php';
$contact_list_query = 'SELECT * FROM contacts';
$result = mysqli_query($conn, $contact_list_query);
while ($row = mysqli_fetch_assoc($result)){
   echo '<div class="row contact-card-item" id="contact'.$row['id'].'">
            <div class="col-md-12 contact-items">
                <h6>'.$row['fio'].' <a class="remove-btn" onclick="remove(this)" data-id="'.$row['id'].'" href="javascript:void(0)">x</a></h6>
                <p>'.$row['phone'].'</p>
            </div>
        </div>';
}