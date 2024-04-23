<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "datamhs_sti202102228";

$conn = mysqli_connect($host, $user, $pass, $db);

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows = $row;
    }
}

function tambah($data) {
    global $conn;

    $id = htmlspecialchars($data["id"]);
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $agama = htmlspecialchars($data["agama"]);
    $status = htmlspecialchars(implode(",", $data["status"]));
    $foto = upload();
    if(!$foto) {
        return false;
    }

    $query = "INSERT INTO form_mhs VALUES
    ($id, $nim, $nama, $alamat, $email, $tempat_lahir, $tanggal_lahir, $agama, $status, $foto)";
    mysqli_query($conn, $query);

    mysqli_affected_rows($conn);

}

function upload() {
    $namafoto = $_FILES['foto']['name'];
    $ukuranfoto = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmp_name = $_FILES['foto']['tmp_name'];

    //cek apakah tidak ada gambar yang di uload
    if($error === 4) {
        echo "
        <script>
        alery('unggah foto terlebih dahulu');
        </script>
        ";
        return false;
    }

    //cek upload user
    $ekstensi_benar = ['jpg', 'jpeg', 'png']; 
    $ekstensi_foto = explode('.', $namafoto);
    $ekstensi_foto = strtolower(end($ekstensi_benar));

    if(!in_array($ekstensi_foto, $ekstensi_benar)) {
        echo "
        <script>
        alery('file yang anda unggah bukan foto');
        </script>
        ";
    }

    //cek ukuran foto yang diupload
    if($ukuranfoto > 1000000) {
        echo "
        <script>
        alery('file yang anda unggah terlalu besar');
        </script>
        ";
    }

    move_uploaded_file($tmp_name, 'foto'.$namafoto);
    return $namafoto;

}

?>