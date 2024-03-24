<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilihan Provinsi dan Kota</title>
</head>
<body>
    <h2>Pilih Provinsi dan Kota</h2>
    <form action="" method="post">
        <label for="provinsi">Pilih Provinsi:</label>
        <select name="provinsi" id="provinsi">
            <option value="jateng">Jawa Tengah</option>
            <option value="jatim">Jawa Timur</option>
            <!-- Tambahkan opsi untuk provinsi lainnya sesuai kebutuhan -->
        </select>
        <input type="submit" name="submit" value="Pilih">
    </form>

    <?php
    // Daftar kota-kota untuk setiap provinsi
    $kota = array(
        "jateng" => array("Pilih Kota", "Solo", "Magelang", "Semarang", "Yogyakarta"),
        "jatim" => array("Pilih Kota", "Malang", "Sidoarjo", "Mojokerto", "Jember")
        // Tambahkan daftar kota untuk provinsi lainnya sesuai kebutuhan
    );

    // Proses form jika ada yang dipilih
    if(isset($_POST['submit'])) {
        $provinsi_terpilih = $_POST['provinsi'];

        // Tampilkan select kota untuk provinsi yang dipilih
        if(array_key_exists($provinsi_terpilih, $kota)) {
            echo "<label>Pilih Provinsi:</label>";
            echo "<select name='kota' id='kota'>";
            foreach ($kota[$provinsi_terpilih] as $k) {
                echo "<option value='$k'>$k</option>";
            }
            echo "</select>";
        } else {
            echo "<p>Pilihan provinsi tidak valid.</p>";
        }
    }
    ?>
</body>
</html>
