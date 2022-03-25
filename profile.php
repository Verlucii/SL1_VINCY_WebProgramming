<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="HomeHeader">
        <div class="TitleHeader">
            Aplikasi Pengelolaan Keuangan
        </div>
        <div class="ButtonHeader1">
                <a href="home.php">Home</a>
            <div class="ButtonHeaderHome">  
                <a href="profile.php">Profile</a>
            </div>
        </div>
        <div class="ButtonHeader2">
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="HomeBody">
        <br>
        <br>
        <div class="HomeBodyTitle">
            <h4>Profil Pribadi</h4>
        </div>
        <div class="Form2">
            <div class="boxForm">
                <div class="card">
                    <div class="tag">Nama Depan</div>
                        <?php 
                            echo $_SESSION['NamaDepanSession'];
                        ?>
                    </div>
                <div class="card">
                    <div class="tag">Tempat Lahir</div>
                        <?php 
                            echo $_SESSION['TempatLahirSession'];
                        ?>
                </div>
                <div class="card">
                    <div class="tag">Warga Negara</div>
                        <?php 
                            echo $_SESSION['WargaNegaraSession'];
                        ?>
                </div>
                <div class="card">
                    <div class="tag">Alamat</div>
                        <?php 
                            echo $_SESSION['AlamatSession'];
                        ?>
                </div>
            </div>


            <div class="boxForm">
                <div class="card">
                    <div class="tag">Nama Tengah</div>
                        <?php 
                            echo $_SESSION['NamaTengahSession'];
                        ?>
                    </div>
                <div class="card">
                    <div class="tag">Tanggal Lahir</div>
                        <?php 
                            echo $_SESSION['TglLahirSession'];
                        ?>
                </div>
                <div class="card">
                    <div class="tag">Email</div>
                        <?php 
                            echo $_SESSION['EmailSession'];
                        ?>
                </div>
                <div class="card">
                    <div class="tag">Kode Pos</div>
                        <?php 
                            echo $_SESSION['KodePosSession'];
                        ?>
                </div>
            </div>


            <div class="boxForm">
                <div class="card">
                    <div class="tag">Nama Belakang</div>
                        <?php 
                            echo $_SESSION['NamaBelakangSession'];
                        ?>
                    </div>
                <div class="card">
                    <div class="tag">NIK</div>
                        <?php 
                            echo $_SESSION['NIKSession'];
                        ?>
                </div>
                <div class="card">
                    <div class="tag">No HP</div>
                        <?php 
                            echo $_SESSION['NoHpSession'];
                        ?>
                </div>
                <div class="card">
                <div class="tag">Foto Profil</div>
                    <div class="image">
                        <img src="
                        <?php 
                            $FotoProfil = $_SESSION['FotoProfilSession'];
                            echo "$FotoProfil";
                        ?>" 
                        alt="" srcset="">
                    </div>
                </div>
        </div>  
    </div>
</body>
</html>