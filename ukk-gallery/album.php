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
    <title>Album | Gallery</title>
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

    <form action="tambah-album.php" method="post">
        <table>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="NamaAlbum" id="NamaAlbum" required></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="Deskripsi" id="Deskripsi" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
    <br><br>

    <h2>Halaman Album</h2>
    <hr  style="width: 100%; border: 2px solid lavender">

    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Nama Album</td>
            <td>Deskripsi</td>
            <td>Tanggal Dibuat</td>
            <td>Aksi</td>
        </tr>

            <?php
                include "koneksi.php";
                $UserID=$_SESSION['UserID'];
                $sql=mysqli_query($conn, "SELECT * FROM album WHERE UserID='$UserID'");
                while($data=mysqli_fetch_array($sql)) {
            ?>

        <tr>
            <td><?=$data['AlbumID']?></td>
            <td><?=$data['NamaAlbum']?></td>
            <td><?=$data['Deskripsi']?></td>
            <td><?=$data['TanggalDibuat']?></td>
            <td>
                <a href="hapus-album.php?AlbumID=<?=$data['AlbumID']?>">Delete</a>
                <a href="edit-album.php?AlbumID=<?=$data['AlbumID']?>">Edit</a>
            </td>
        </tr>

        <?php
            }
        ?>
    </table>

    
    
</body>
</html>