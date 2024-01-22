<?php
@include('connect.php');

$select = "SELECT * FROM messages ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $select);

if (mysqli_num_rows($result) < 1) {
    echo "No notifications";
} else {
    $row = mysqli_fetch_array($result);
    echo $row['message'];
}
