<?php
include 'config.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "UPDATE parking_slots SET status='booked' WHERE id=$id";
    if ($conn->query($query)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
