<?php
include '../Config/koneksi.php'
if ($_SERVER["request_method"] == "POST"){
    $id = $_POST["id_user"];
    $nama = $_POST["nama"];
    $password = $_POST["password"];
    $level = $_POST["level"];
    $status = $_POST["status"];
    $query = "UPDATE user SET nama='$nama', password='$password', level='$level', status='$status' WHERE id=$id";
    if (mysqli_query($koneksi, $query)){
        echo Data User berhasil diperbarui
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
    mysqli_close($koneksi)
}
?>