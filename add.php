<?php
@include('connect.php');
@include('navbar.php');


if(isset($_POST['addnotification'])){
    $message = $_POST['message'];

    $insert = "INSERT INTO messages(message)VALUES('$message')";
    $result = mysqli_query($conn, $insert);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action=""method="POST">
            <label for="">Enter message here</label>
            <br>
            <br>
            <input type="text" name="message" required class="form-control">
            <br>
            <br>
            <button class="addnot" type="submit" name="addnotification">Submit</button>
            
        </form>
    </div>
</body>
<style>
    *{
        margin: 0;
    }
    .container{
        display: grid;
        place-items: center;
        padding: 150px;
    }
    
</style>
</html>