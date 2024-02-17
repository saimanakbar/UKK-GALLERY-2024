<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Gallery</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
        body {
            background-color: lavenderblush;
        }
        .login {
            margin: 300px;
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
        <div class="login">
        <h2>Sign In</h2>

        <form action="proses-login.php" method="post">
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
                    <td></td>
                    <td><input type="submit" value="Sign In"></td>
                </tr>
            </table>
        </form>
        <p>Belum punya akun? <a href="register.php">Sign Up</a></p>
        <p>Halaman utama <a href="index.php">Index</a></p>
        </div>
    </center>
    
</body>
</html>