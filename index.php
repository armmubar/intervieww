<html>
<head>
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Sign In</h2>

        </div>


        <div class="artikel">
            <form action="cek-login.php" method="post">
                <div class="grup">
                    <label for="email">Username</label>
                    <input type="text" name="username" placeholder="Masukkan Username Anda">
                </div>
                <div class="grup">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Masukkan Password Anda">
                </div>
                <div class="grup">
                    <input type="submit" name="login" value="Sign In">
                </div>

            </form>
        </div>
    </div>
</body>
</html>