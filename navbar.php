<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="count.js"></script>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <h1>Counter</h1>
        </div>
        <ul>
            <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="add.php" class="nav-link">Add</a>
            </li>
            <li class="nav-item" onClick="showDrop()" onmouseover="showDrop()" onmouseout="hideDrop()">
                <a href="" class="nav-link" id="counting">0</a>

                <div class="drop" id="dropdown">
                    <ul class="noti">
                        <li>
                            <p id="notification">awaiting</p>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</body>

</html>