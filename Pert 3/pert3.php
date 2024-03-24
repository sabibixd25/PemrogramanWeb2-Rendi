<?php
$NamaBarang = array('buku', 'mouse', 'flashdisk', 'pulpen');
$HargaBarang = array(17500, 30000, 70000, 22300);
$JumlBeli = $_POST['jmlbeli'] ?? array_fill(0, count($NamaBarang), 0);
$JumlahBayar = array_map(function($harga, $jumlah) {
    return $harga * $jumlah;
}, $HargaBarang, $JumlBeli);
$totalBayar = array_sum($JumlahBayar);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas Pertemuan 3</title>
</head>
<body>
    <h2>Data penjualan barang</h2>
    <form action="" method="post">
        <table border="1">
            <tr>
                <td>Nama Barang</td>
                <?php foreach($NamaBarang as $nama): ?>
                    <td><?php echo $nama; ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <?php foreach($HargaBarang as $harga): ?>
                    <td><?php echo $harga; ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Jumlah Beli</td>
                <?php foreach($JumlBeli as $jumlah): ?>
                    <td><input type="number" name="jmlbeli[]" value="<?php echo $jumlah; ?>"></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Jumlah Bayar</td>
                <?php foreach($JumlahBayar as $jumlah): ?>
                    <td><?php echo $jumlah; ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td colspan="<?php echo count($NamaBarang); ?>"><?php echo $totalBayar; ?></td>
            </tr>
        </table>
        <button type="submit">Hitung Total Bayar</button>
    </form>
</body>
</html>
