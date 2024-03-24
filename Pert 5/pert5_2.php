<!DOCTYPE html>
<html>
<head>
    <title>Pembelian Peralatan</title>
</head>
<body>
    <h2>Form Pembelian Peralatan</h2>
    <form method="post">
        <label>Nama Peralatan:</label><br>
        <select name="nama_peralatan">
            <option value="buku">Buku</option>
            <option value="mouse">Mouse</option>
            <option value="flashdisk">Flashdisk</option>
            <option value="pulpen">Pulpen</option>
        </select><br>
        <label>Jumlah:</label><br>
        <input type="text" name="jumlah"><br>
        <br>
        <input type="submit" value="Tambahkan">
    </form>
    <br>
    <?php
    class Peralatan {
        public $nama_peralatan;
        public $jumlah;
        public $harga_satuan;

        public function __construct($nama_peralatan, $jumlah) {
            $this->nama_peralatan = $nama_peralatan;
            $this->jumlah = $jumlah;
            // Tentukan harga satuan berdasarkan nama peralatan (contoh harga)
            $this->harga_satuan = $this->getHargaSatuan();
        }

        public function totalHarga() {
            return $this->jumlah * $this->harga_satuan;
        }

        private function getHargaSatuan() {
            switch ($this->nama_peralatan) {
                case 'buku':
                    return 17500; // Misal harga buku Rp10.000
                case 'mouse':
                    return 30000; // Misal harga mouse Rp50.000
                case 'flashdisk':
                    return 70000; // Misal harga flashdisk Rp30.000
                case 'pulpen':
                    return 22300; // Misal harga pulpen Rp5.000
                default:
                    return 0;
            }
        }
    }

    session_start();

    if (!isset($_SESSION['peralatan'])) {
        $_SESSION['peralatan'] = array();
    }

    if (!empty($_SESSION['peralatan'])) {
        echo "<h2>Daftar Pemesanan Peralatan Kantor</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Nama Peralatan</th><th>Jumlah</th><th>Harga Satuan</th><th>Total Harga</th></tr>";

        $total_harga = 0;

        foreach ($_SESSION['peralatan'] as $peralatan) {
            $jumlah_harga = $peralatan->totalHarga();
            echo "<tr><td>{$peralatan->nama_peralatan}</td><td>{$peralatan->jumlah}</td><td>{$peralatan->harga_satuan}</td><td>{$jumlah_harga}</td></tr>";
            $total_harga += $jumlah_harga;
        }

        // Hitung diskon
        $diskon = 0;
        if ($total_harga >= 500000) {
            $diskon = 0.10;
        } elseif ($total_harga >= 200000) {
            $diskon = 0.05;
        }

        $diskon_amount = $diskon * $total_harga;
        $jumlah_harus_dibayar = $total_harga - $diskon_amount;

        echo "<tr><td colspan='3'>Total Harga</td><td>{$total_harga}</td></tr>";
        echo "<tr><td colspan='3'>Diskon</td><td>{$diskon_amount}</td></tr>";
        echo "<tr><td colspan='3'>Jumlah Harus Dibayar</td><td>{$jumlah_harus_dibayar}</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
