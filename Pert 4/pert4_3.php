<!DOCTYPE html>
<html>
<head>
    <title>Deret Bilangan Ganjil</title>
</head>
<body>
    <h2>Deret Bilangan Ganjil Habis Dibagi 3</h2>
    <form method="post">
        <label for="nilai_awal">Nilai Awal:</label>
        <input type="number" name="nilai_awal" required><br><br>

        <label for="nilai_akhir">Nilai Akhir:</label>
        <input type="number" name="nilai_akhir" required><br><br>

        <input type="submit" name="hitung" value="Hitung"><br><br>
    </form>

    <?php
    function hitung_deret($nilai_awal, $nilai_akhir) {
        $jumlah_bilangan = 0;
        $jumlah_nilai = 0;

        for ($i = $nilai_awal; $i <= $nilai_akhir; $i++) {
            if ($i % 2 != 0 && $i % 3 == 0) {
                echo $i . " ";
                $jumlah_bilangan++;
                $jumlah_nilai += $i;
            }
        }

        echo "<br><br>";
        echo "Jumlah bilangan: " . $jumlah_bilangan . "<br>";
        echo "Jumlah nilai bilangan: " . $jumlah_nilai . "<br>";
    }

    if (isset($_POST['hitung'])) {
        $nilai_awal = $_POST['nilai_awal'];
        $nilai_akhir = $_POST['nilai_akhir'];
        hitung_deret($nilai_awal, $nilai_akhir);
    }
    ?>

</body>
</html>
