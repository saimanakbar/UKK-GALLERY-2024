<?php
    session_start();
    if(!isset($_SESSION['UserID'])) {
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Gallery</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="album.php">Album</a>
            <a href="foto.php">Foto</a>
            <a href="logout.php">Sign Out</a>
            <p>Wellcome: <b style="text-decoration: underline; color: red;"><?=$_SESSION['NamaLengkap']?></b></p>
        </nav>
    </header>

    <marquee behavior="" direction="right">
        <center><h2>Hello</h2></center>
        <hr style="width: 50%; border: 2px dotted lavender">
    </marquee>
    
</body>
</html>