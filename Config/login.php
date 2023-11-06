<?php
session_start();
include('koneksi.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE nama='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['level'] = $row['level'];

        header('location: form.php?page=home'); // Redirect to the welcome page
    } else {
        echo "<br>Gagal untuk login <br>Silahkan masukkan username dan password yang benar";
    }
}
?>
