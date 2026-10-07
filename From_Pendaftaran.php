<!doctype html>
<html lang="id">
<head>
    <title>Pendaftaran Siswa</title>
</head>
<body>

    <h1>Pendaftaran Siswa</h1>

    <form method="POST">

    <input 
        name="nama" 
        placeholder="nama" 
        required
    >
    <br><br>
    <input 
        name="email" 
        type="email" 
        placeholder="email" 
        required
    >
    <br><br>
    <input 
        name="kelas" 
        type="text" 
        placeholder="kelas" 
        required
    >
    <br><br>
    <button type="submit">Daftar</button>
    </form>

    <?php
    if (isset($_POST['nama'], $_POST['email'], $_POST['kelas'])) {
        echo "<h2>Data Pendaftaran</h2>";
        echo "<p>Nama: " . $_POST['nama'] . "</p>";
        echo "<p>Email: " . $_POST['email'] . "</p>";
        echo "<p>Kelas: " . $_POST['kelas'] . "</p>";
    }
    ?>

</body>
</html>