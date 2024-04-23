<?php

require 'koneksi.php';

// fungsi untuk menambahkan data mahasiswa baru
if(isset($_POST["simpan"])) {
    if(tambah($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil ditambahkan');
        window.location.href = 'data.php';
        </script>
        ";
    }
    else {
        echo "
        <script>
        alert('Data gagal ditambahkan');
        window.location.href = 'data.php';
        </script>
        ";
    }
}

$mhs = query("SELECT * FROM form_mhs");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Form Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Id</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Status</th>
            <th>Foto</th>
        </tr>
        <?php $i = 1;
        foreach ($mhs as $row) : ?>
        <tr>
            <td><?= $i.'.'?></td>
            <td><?= $row["id"]; ?></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["tempat_lahir"]; ?></td>
            <td><?= $row["tanggal_lahir"]; ?></td>
            <td><?= $row["agama"]; ?></td>
            <td><?= $row["status"]; ?></td>
            <td><img src="<?= $row["foto"]; ?>" width="90" height="120"></td>
        </tr>
        <?php $i++; endforeach; ?>
    </table>
</body>
</html>
