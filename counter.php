<?php
@include('connect.php');

$select = "SELECT * FROM messages";
$result = mysqli_query($conn,$select);

echo mysqli_num_rows($result);

?>