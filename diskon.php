<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon</title>
</head>
<body>

    <h2>Penghitung Diskon Belanja</h2>
    
    <form method="POST">
        <label for="total_belanja">Nama Barang:</label>
        <label for="total_belanja">Total Belanja (Rp):</label>
        <input type="number" name="total_belanja" id="total_belanja" required>
        <br><br>
        <input type="submit" value="Hitung Diskon">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $total_belanja = $_POST['total_belanja'];
        $diskon = 0;

        if ($total_belanja > 200000) {
            $diskon = 20;
        } elseif ($total_belanja > 100000) {
            $diskon = 10;
        }

        $potongan = ($diskon / 100) * $total_belanja;
        $total_setelah_diskon = $total_belanja - $potongan;

        echo "<h3>Detail Diskon</h3>";
        echo "Total Belanja: Rp " . number_format($total_belanja, 0, ',', '.') . "<br>";
        echo "Diskon: $diskon%<br>";
        echo "Potongan Harga: Rp " . number_format($potongan, 0, ',', '.') . "<br>";
        echo "Total Setelah Diskon: Rp " . number_format($total_setelah_diskon, 0, ',', '.') . "<br>";
    }
    ?>

</body>
</html>