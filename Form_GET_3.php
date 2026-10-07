<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From GET</title>
</head>
<body>
    <form method="GET">
    Nama:
        <input type="text" name="nama">

    <br><br>

    Kelas:
        <select name="kelas">
            <option>X</option>
            <option>XI</option>
            <option>XII</option>
        </select>

    <br><br>

        <button type="submit">Kirim</button>
    </form>

    <?php
    // 3
    if (isset($_GET['nama'], $_GET['kelas'])) {
        echo "<p>Halo, " . $_GET['nama'] . " (" . $_GET['kelas'] . ")!</p>";
}
?>


</body>
</html>