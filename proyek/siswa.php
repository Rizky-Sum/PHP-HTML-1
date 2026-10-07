<?php
$title = "Data Siswa";
include 'header.php';

$siswa = [
    ["nama" => "Andi", "kelas" => "X", "nilai" => 85],
    ["nama" => "Budi", "kelas" => "XI", "nilai" => 78],
    ["nama" => "Citra", "kelas" => "XII", "nilai" => 92],
];
?>

<h2>Daftar Siswa</h2>

<table border="1" cellpadding="6">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Nilai</th>
    </tr>

    <?php foreach ($siswa as $i => $s): ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $s['nama'] ?></td>
            <td><?= $s['kelas'] ?></td>
            <td><?= $s['nilai'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
include 'footer.php';
?>