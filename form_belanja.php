<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Belanja Online</title>
</head>
<body>
<div class="container mt-5">
    <h2>Belanja Online</h2>
    <form method="POST" action="form_belanja.php">
        <div class="form-group">
            <label for="customer">Customer</label>
            <input type="text" class="form-control" id="customer" name="customer" required>
        </div>
        <div class="form-group">
            <label for="produk">Pilih Produk</label><br>
            <input type="radio" id="tv" name="produk" value="TV" required>
            <label for="tv">TV (Rp. 4.200.000)</label><br>
            <input type="radio" id="kulkas" name="produk" value="KULKAS">
            <label for="kulkas">Kulkas (Rp. 3.100.000)</label><br>
            <input type="radio" id="mesin_cuci" name="produk" value="MESIN CUCI">
            <label for="mesin_cuci">Mesin Cuci (Rp. 3.800.000)</label><br>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required min="1">
        </div>
        <button type="submit" class="btn btn-primary" name="proses">Kirim</button>
    </form>

    <?php
    // Menangkap data
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        // Menentukan harga produk
        $harga_produk = 0;
        if ($produk == "TV") {
            $harga_produk = 4200000;
        } elseif ($produk == "KULKAS") {
            $harga_produk = 3100000;
        } elseif ($produk == "MESIN CUCI") {
            $harga_produk = 3800000;
        }

        // Menghitung total belanja
        $total_belanja = $harga_produk * $jumlah;

        // Menampilkan hasil
        echo "<h3>Nama Customer: $customer</h3>";
        echo "<h3>Produk Pilihan: $produk</h3>";
        echo "<h3>Jumlah Beli: $jumlah</h3>";
        echo "<h3>Total Belanja: Rp " . number_format($total_belanja, 0, ',', '.') . "</h3>";
    }
    ?>
</div>


</body>
</html>