<!DOCTYPE html>
<html lang="en">
<head>
    <title>pemograman1.com</title>
</head>
<body>
    <h2>Pemograman 1 2023</h2>
    <br>
    <a href="formuser.php">+ Tambah User</a>
    <br>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Password</th>
            <th>Level</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi,"select * from user");
            while($d = mysqli_fetch_array($data)){
            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama'];?></td>
            <td><?php echo $d['password'];?></td>
            <td><?php echo $d['level'];?></td>
            <td><?php echo $d['status'];?></td>
            <td>
                <a href="">Edit</a>
                <a href="">Hapus</a>
            </td>
        </tr>
        <?php
            }
            ?>
    </table>
</body>
</html>