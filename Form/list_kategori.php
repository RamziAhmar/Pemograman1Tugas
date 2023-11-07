<?php
    if (!isset($_SESSION['nama'])) {
        header('location: ../login.html'); // Redirect to the login page if not logged in
        exit(); }
?>
<!DOCTYPE html>
<html>
<head>
    <title>List Kategori</title>
</head>
<body>
    <h2>Pemograman 1 2023</h2>
    <br>
    <a href="?page=lkategori">+ Tambah Kategori</a>
    <br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nama Kategori</th>
            <th>Diskon</th>
        </tr>
        <?php
                include '../Config/koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"select * from kategori");
                while($d = mysqli_fetch_array($data)){
            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama_kategori']; ?></td>
            <td><?php echo $d['diskon']; ?></td>

            <td>
                <a href="edit_kategori.php?id=<?php echo $d['id_kategori']; ?>">Edit</a>
                <a href="hapus_kategori.php?id=<?php echo $d['id_kategori']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
                }
                ?>
    </table>
</body>
</html>