<!DOCTYPE html>
<html>
<head>
    <title>Input Transaksi</title>
</head>
<body>
    <h1>Input Transaksi</h1>
    <form action="process_transaction.php" method="post">
        <label for="member_id">Member:</label>
        <select name="member_id">
            <option value="1">Raysha (Gold)</option>
            <option value="2">Reina (Silver)</option>
            <option value="3">Nur Anisa (Platinum)</option>
        </select><br>

        <label for="category_id">Kategori Barang:</label>
        <select name="category_id">
            <option value="1">Elektronik</option>
            <option value="2">ATK</option>
            <option value="3">Sembako</option>
        </select><br>

        <label for="product_id">Nama Barang:</label>
        <input type="text" name="product_id" required><br>

        <label for="quantity">Jumlah Transaksi:</label>
        <input type="number" name="quantity" required><br>

        <input type="submit" value="Simpan Transaksi">
    </form>
</body>
</html>