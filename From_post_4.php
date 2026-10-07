<!doctype html>
<html lang="id">
<head>
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <form method="POST">
        <input 
            name="user" 
            placeholder="username" 
            required
        >

        <br><br>

        <input 
            name="pass" 
            type="password" 
            placeholder="password" 
            required
        >

        <br><br>

        <button type="submit">Login</button>
    </form>

    <?php
    if (isset($_POST['user'], $_POST['pass'])) {

        if ($_POST['user'] === 'admin' && $_POST['pass'] === '12345') {
            echo "<p>Login berhasil</p>";
        } else {
            echo "<p>Username atau password salah</p>";
        }
    }
    ?>

</body>
</html>