<?php
if(isset($_POST["simpan"])) {
    //cek apakah data berhasil disimpan
    if(tambah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil di upload');
        document.location.href = 'data.php';
        </script>
        ";
    }
    else {
        echo "
        <script>
        alert('data gagal di upload');
        document.location.href = 'data.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <form action="data.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="id">Id</label>
                </td>
                <td>
                    :
                    <input type="text" name="id" id="id" require>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nim">NIM</label>
                </td>
                <td>
                    :
                    <input type="text" name="nim" id="nim" require>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    :
                    <input type="text" name="nama" id="nama" require>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="alamat">Alamat</label>
                </td>
                <td>
                    :
                    <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    :
                    <input type="text" name="email" id="email" require>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tempat_lahir">Tempat Lahir</label>
                </td>
                <td>
                    :
                    <input type="text" name="tempat_lahir" id="tempat_lahir" require>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                </td>
                <td>
                    :
                    <input type="text" name="tanggal_lahir" id="tanggal_lahir" require>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="agama">Agama</label>
                </td>
                <td>
                    :
                    <select name="agama" id="agama">
                       <option>Pilih Agama</option>
                       <optgroup label="Agama"></optgroup>
                       <option value="Islam">Islam</option>
                       <option value="Kristen">Kristen</option>
                       <option value="Katholik">Katholik</option>
                       <option value="Hindu">Hindu</option>
                       <option value="Buddha">Buddha</option>
                       <option value="Khonghucu">Khonghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="status">Status</label>
                </td>
                <td>
                    :
                    <input type="checkbox" name="status[]" id="status" value="Aktif" require>Aktif
                    <input type="checkbox" name="status[]" id="status" value="Tidak Aktif" require>Tidak Aktif
                </td>
            </tr>
            <tr>
                <td>
                    <label for="foto">Foto</label>
                </td>
                <td>
                    :
                    <input type="file" name="foto" id="foto" require>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="simpan">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>