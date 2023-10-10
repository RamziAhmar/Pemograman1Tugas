<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <?php
        include '../config/koneksi.php';
        if (isset($_GET['id_user'])){
            $id = $_GET['id_user'];
            $query = "SELECT * FROM user WHERE id = $id";
            $result = mysqli_query($koneksi,$query);
            if (mysqli_num_rows($result)==1){
                $row = mysqli_fetch_assoc($result)
    ?>
    <h2>Edit User</h2>
    <form method="post" action="update_user.php">
        <input type="hidden" name="id" values="<?php echo $row['id_user'];?>">
        <label for="nama">Nama</label>
        <input type="text" name="nama" values="<?php echo $row['nama'];?>">
        <label for="password">Password</label>
        <input type="password" name="password" values="<?php echo $row['password'];?>">
        <label for="level">Level</label>
        <select name="level" id="">
            <option value="1" <?php if ($row['level']==1) echo 'selected'; ?>>Admin</option>
            <option value="2" <?php if ($row['level']==2) echo 'selected'; ?>>Staff</option>    
            <option value="3" <?php if ($row['level']==3) echo 'selected'; ?>>Supervisor</option>
            <option value="4" <?php if ($row['level']==4) echo 'selected'; ?>>Manager</option>
        </select><br>
        <label for="status">Status</label>
        <select name="Status" id="">
            <option value="0" <?php if ($row['level']==0) echo 'selected'; ?>>Aktif</option>
            <option value="1" <?php if ($row['level']==1) echo 'selected'; ?>>Tidak Aktif</option>    
        </select>
        <input type="submit" values="Update">
    </form>
    <?php
        } else {
            echo "User tidak ditemukan";
        }
        mysqli_close($koneksi);
    } else {
        echo "Parameter ID user tidak diberikan";
    }
    ?>
</body>
</html>