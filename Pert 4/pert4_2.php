<!DOCTYPE html>
<html>
<head>
    <title>Deret Kelipatan</title>
</head>
<body>
    <h2>Membuat Deret Kelipatan</h2>
    <form method="post" action="">
        <label for="nilai_awal">Nilai Awal:</label>
        <input type="text" id="nilai_awal" name="nilai_awal" required><br><br>

        <label for="nilai_akhir">Nilai Akhir:</label>
        <input type="text" id="nilai_akhir" name="nilai_akhir" required><br><br>

        <label for="kelipatan">Kelipatan:</label>
        <input type="text" id="kelipatan" name="kelipatan" required><br><br>

        <input type="submit" value="Hitung">
    </form>

    <?php
    // Cek apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai-nilai dari form
        $nilai_awal = $_POST["nilai_awal"];
        $nilai_akhir = $_POST["nilai_akhir"];
        $kelipatan = $_POST["kelipatan"];

        // Inisialisasi variabel jumlah data
        $jumlah_data = 0;

        echo "<h3>Hasil deret kelipatan $kelipatan antara $nilai_awal dan $nilai_akhir adalah:</h3>";

        // Lakukan iterasi dari nilai_awal sampai nilai_akhir
        for ($i = $nilai_awal; $i <= $nilai_akhir; $i++) {
            // Periksa apakah nilai tersebut merupakan kelipatan dari kelipatan yang diinginkan
            if ($i % $kelipatan == 0) {
                // Jika ya, tambahkan 1 pada jumlah data dan cetak nilai tersebut
                $jumlah_data++;
                echo $i . " ";
            }
        }

        // Cetak jumlah data
        echo "<br><h3>Banyaknya data: $jumlah_data</h3>";
    }
    ?>
</body>
</html>
