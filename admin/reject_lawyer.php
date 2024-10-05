<?php
include 'db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Use the correct column name for the WHERE clause
    $sql = "UPDATE registration SET approval_status = 'rejected' WHERE user_id = $id";
    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
