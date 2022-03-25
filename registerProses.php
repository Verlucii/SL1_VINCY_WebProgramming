<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //Validasi kelengkapan 
        $ListError = []; //array penampung error
        //If Else Logic
        if(empty($_POST['NamaDepan'])){
            array_push($ListError,"<span> Nama Depan can't be empty </span>");
        }else{
            $NamaDepan = $_POST['NamaDepan'];
            $_SESSION['NamaDepanSession'] = $NamaDepan;
        }
        if(empty($_POST['NamaTengah'])){
            array_push($ListError,"<span> Nama Tengah can't be empty </span>");
        }else{
            $NamaTengah = $_POST['NamaTengah'];
            $_SESSION['NamaTengahSession'] = $NamaTengah;
        }
        if(empty($_POST['NamaBelakang'])){
            array_push($ListError,"<span> Nama Belakang can't be empty </span>");
        }else{
            $NamaBelakang = $_POST['NamaBelakang'];
            $_SESSION['NamaBelakangSession'] = $NamaBelakang;
        }
        if(empty($_POST['TempatLahir'])){
            array_push($ListError,"<span> Tempat Lahir can't be empty </span>");
        }else{
            $TempatLahir = $_POST['TempatLahir'];
            $_SESSION['TempatLahirSession'] = $TempatLahir;
        }
        if(empty($_POST['TglLahir'])){
            array_push($ListError,"<span> Tgl Lahir can't be empty </span>");
        }else{
            $TglLahir = $_POST['TglLahir'];
            $_SESSION['TglLahirSession'] = $TglLahir;
        }
        if(empty($_POST['NIK'])){
            array_push($ListError,"<span> NIK can't be empty </span>");
        }else{
            $NIK = $_POST['NIK'];
            $_SESSION['NIKSession'] = $NIK;
        }
        if(empty($_POST['WargaNegara'])){
            array_push($ListError,"<span> Warga Negara can't be empty </span>");
        }else{
            $WargaNegara = $_POST['WargaNegara'];
            $_SESSION['WargaNegaraSession'] = $WargaNegara;
        }
        if(empty($_POST['Email'])){
            array_push($ListError,"<span> Email can't be empty </span>");
        }else{
            $Email = $_POST['Email'];
            $_SESSION['EmailSession'] = $Email;
        }
        if(empty($_POST['NoHp'])){
            array_push($ListError,"<span> No HP can't be empty </span>");
        }else{
            $NoHp = $_POST['NoHp'];
            $_SESSION['NoHpSession'] = $NoHp;
        }
        if(empty($_POST['Alamat'])){
            array_push($ListError,"<span> Alamat can't be empty </span>");
        }else{
            $Alamat = $_POST['Alamat'];
            $_SESSION['AlamatSession'] = $Alamat;
        }
        if(empty($_POST['KodePos'])){
            array_push($ListError,"<span> Kode Pos can't be empty </span>");
        }else{
            $KodePos = $_POST['KodePos'];
            $_SESSION['KodePosSession'] = $KodePos;
        }
        if ($_FILES['FotoProfil']['error'] != 0){
            array_push($ListError,"<span> Foto Profil must be uploaded </span>");
        }else{
            $File_Name = $_FILES['FotoProfil']['name'];
            $File_Temp = $_FILES['FotoProfil']['tmp_name'];
            $dirTujuan = "FotoProfil/";
            $_SESSION['FotoProfilSession'] = $dirTujuan.$File_Name;
            if (!is_dir('FotoProfil')) mkdir('FotoProfil');
            move_uploaded_file($File_Temp,$dirTujuan.$File_Name);
        }
        if(empty($_POST['Username'])){
            array_push($ListError,"<span> Username can't be empty </span>");
        }else{
            $Username = $_POST['Username'];
            $_SESSION['UsernameSession'] = $Username;
        }
        if(empty($_POST['Password1'])){
            array_push($ListError,"<span> Password 1 can't be empty </span>");
        }else{
            $Password1 = $_POST['Password1'];
            $_SESSION['Password1Session'] = $Password1;
        }
        if(empty($_POST['Password2'])){
            array_push($ListError,"<span> Password 2 can't be empty </span>");
        }else{
            $Password2 = $_POST['Password2'];
            $_SESSION['Password2Session'] = $Password2;
        }
        //Jika ada error 
        if(sizeof($ListError) != 0){
    ?>   
        <div class="ListOfError">
            <b>List Of Error</b>
            <br>
            <?php
                foreach($ListError as $ListErrors){
                    echo $ListErrors;
                    echo "<br>";
                }
            ?>
        </div>
    <?php
        }else{
            header("location:welcome.php");
        }
    ?>
</body>
</html>
