<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Pertemuan 6</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        h2 {
            text-align: Center;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="Luas">Alas : </label>
        <input type="text" name="alas"> </br></br>
        <label for="Luas">Tinggi : </label>
        <input type="text" name="tinggi"> </br></br>
        <input type="submit" name="proses" value="Proses">
    </form>
    <h2>Menghitung Luas Segitiga</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Alas</th>
            <th>Tinggi</th>
            <th>Luas</th>
        </tr>
        <?php
        session_start();
        if (!isset($_SESSION['segitiga'])) {
            $_SESSION['segitiga'] = [];
        }

        if (isset($_POST['proses'])) {
            $alas = $_POST["alas"];
            $tinggi = $_POST["tinggi"];
            if (count($_SESSION['segitiga']) < 5) {
                $luas = 0.5 * $alas * $tinggi;
                $_SESSION['segitiga'][] = array("alas" => $alas, "tinggi" => $tinggi, "luas" => $luas);
            } else {
                session_unset();
                session_destroy();
            }
        }

        $no = 1;
        foreach ($_SESSION['segitiga'] as $data) {
            echo "<tr>";
            echo "<td>{$no}</td>";
            echo "<td>{$data['alas']}</td>";
            echo "<td>{$data['tinggi']}</td>";
            echo "<td>{$data['luas']}</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
