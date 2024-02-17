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
    <title>Edit Album | Gallery</title>
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

    <h2>Halaman Edit Album</h2>
    <hr style="width: 100%; border: 2px solid lavender">

    <form action="update-album.php" method="post">
        <?php
            include "koneksi.php";
            $AlbumID=$_GET['AlbumID'];
            $sql=mysqli_query($conn,"SELECT * FROM album WHERE AlbumID='$AlbumID'");
            while($data=mysqli_fetch_array($sql)){
        ?>
        <input type="text" name="AlbumID" value="<?=$data['AlbumID']?>" hidden>
        <table>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="NamaAlbum" value="<?=$data['NamaAlbum']?>" required></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="Deskripsi" value="<?=$data['Deskripsi']?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Edit"></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </form>
</body>
</html>