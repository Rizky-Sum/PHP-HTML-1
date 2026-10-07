<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>

    <?php
        //1 praktik
        $judul = "Belajar PHP";
        $salam = "Halo dari PHP!";

        //2
        $nama ="Restu";
        $umur = 20;
        $tentang = "<b>Suka</b> Tidur";
        //2 praktik
        $sekolah = "SMK";
        $hobi = "Ngoding";
        $cita_cita = "Programmer";
    ?>

    <!-- 1 praktik -->
    <h1><?php echo $salam; ?></h1>

    <!-- 2 -->
    <p>Nama: <?php echo $nama; ?></p>
    <p>Umur: <?php echo $umur; ?> tahun</p>
    <p>Tentang: <?php echo htmlspecialchars($tentang); ?></p>
    <!-- 2 praktik -->
    <p>Sekolah: <?php echo $sekolah; ?></p>
    <p>Hobi: <?php echo $hobi; ?></p>
    <p>Cita-cita: <?php echo $cita_cita; ?></p>

    

</body>
</html>