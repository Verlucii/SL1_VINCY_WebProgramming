<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="HomeHeader">
        <div class="TitleHeader">
            Aplikasi Pengelolaan Keuangan
        </div>
        <div class="ButtonHeader1">
            <div class="ButtonHeaderHome">
                <a href="home.php">Home</a>
            </div>
                <a href="profile.php">Profile</a>
            </div>
            <div class="ButtonHeader2">
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>
    <div class="HomeBody">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
            <?php
                echo "<p>Halo ";
                echo "<b>";
                echo $_SESSION['NamaDepanSession'];
                echo " ";
                echo $_SESSION['NamaTengahSession'];
                echo " ";
                echo $_SESSION['NamaBelakangSession']; 
                echo "</b>";
                echo " , Selamat datang di Aplikasi Pengelolaan Keuangan</p>";
            ?>
    </div>
</body>
</html>