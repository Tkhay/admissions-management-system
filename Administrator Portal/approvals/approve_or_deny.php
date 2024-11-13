<?php

include('db_connect.php');  

//Will add feature where admin can post comments
$request_id = $_POST['id'];
$status = $_POST['status'];
$admin_comments = mysqli_real_escape_string($conn, $_POST['admin_comments']);


$sql = "UPDATE admission_requests SET submission_status = '$status', admin_comments = '$admin_comments' WHERE id = $request_id";

if (mysqli_query($conn, $sql)) {
    
    header('Location: admin_dashboard.php');
} else {
    echo "Error: " . mysqli_error($conn);
}

