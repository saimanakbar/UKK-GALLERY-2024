<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Gallery</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
        body {
            background-color: lavenderblush;
        }
        .register {
            margin: 250px;
            width: 500px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            justify-content: center;
            border-top: 2px solid black;
            border-bottom: 2px solid black;
            border-radius: 25%;
            background-color: lavender;
        }

        h2 {
            font-family: 'Times New Roman', Times, serif;
            text-decoration: underline;
            width: 250px;
            border-top: 2px solid black;
            border-bottom: 2px solid black;
            border-radius: 10%;
        }
    </style>
</head>
<body>
    <center>
    <div class="register">
        <h2>Sign Up</h2>

        <form action="proses-register.php" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="Username" id="Username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="Password" id="Password" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="Email" id="Email" required></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" name="NamaLengkap" id="NamaLengkap" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="Text" id="Text" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Sign Up"></td>
                </tr>
            </table>
        </form>
        <p>Sudah punya akun? <a href="login.php">Sign In</a></p>
        <p>Halaman utama <a href="index.php">Index</a></p>
    </div>
</center>
    
</body>
</html>