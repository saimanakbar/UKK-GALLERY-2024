<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing | Gallery</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
        .footer {
            margin-top: 175px;
            padding: 5px;
            background-color: lavender;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['UserID'])) {
    ?>
        <header>
            <nav>
                <a href="register.php">Sign Up</a>
                <a href="login.php">Sign In</a>
            </nav>
        </header>
    <?php
        }else{
    ?>
        <header>
            <nav>
                <a href="index.php">Home</a>
                <a href="album.php">Album</a>
                <a href="foto.php">Foto</a>
                <a href="logout.php">Sign Out</a>
                <p>Wellcome: <b style="text-decoration: underline; color: red;"><?=$_SESSION['NamaLengkap']?></b></p>
            </nav>
        </header>
    <?php
        }
    ?>

        <marquee behavior="" direction="right">
            <center><h2>Hello</h2></center>
            <hr style="width: 50%; border: 2px dotted lavender">
        </marquee>
        <br><br>
        <hr  style="width: 100%; border: 2px solid lavender">

        <table width="100%" border="1" cellpadding="5" cellspacing="0">
            <tr>
                <td>ID</td>
                <td>Judul</td>
                <td>Deskripsi</td>
                <td>Foto</td>
                <td>Uploader</td>
                <td>Jumlah Like</td>
                <td>Aksi</td>
            </tr>

            <?php
                include "koneksi.php";
                $sql=mysqli_query($conn, "SELECT * FROM foto,user WHERE foto.UserID=user.UserID");
                while($data=mysqli_fetch_array($sql)) {
            ?>

                <tr>
                    <td><?=$data['FotoID']?></td>
                    <td><?=$data['JudulFoto']?></td>
                    <td><?=$data['DeskripsiFoto']?></td>
                    <td>
                        <img src="gambar/<?=$data['LokasiFile']?>" width="200px">
                    </td>
                    <td><?=$data['NamaLengkap']?></td>
                    <td>
                        <?php
                            $FotoID=$data['FotoID'];
                            $sql2=mysqli_query($conn, "SELECT * FROM likefoto WHERE FotoID='$FotoID'");
                            echo mysqli_num_rows($sql2);
                        ?>
                    </td>
                    <td>
                        <a href="like.php?FotoID=<?=$data['FotoID']?>">Like</a>
                        <a href="komentar.php?FotoID=<?=$data['FotoID']?>">Comment</a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
        
        <div class="footer">
            <div class="copyright">
                <h5>Copyright @No Name.</h5>
            </div>
        </div>
</body>
</html>