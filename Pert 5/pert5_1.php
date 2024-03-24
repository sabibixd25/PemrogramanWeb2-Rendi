<!DOCTYPE html>
<html>
<body>

<div style="border: 1px solid black; padding: 10px; margin: 20px; width: fit-content;">
    <h2>Menghitung Luas Segiempat</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Panjang: <input type="number" name="panjang" value="20"><br>
        Lebar: <input type="number" name="lebar" value="10"><br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $luas = $panjang * $lebar;
        echo "<div style='margin-top: 20px;'>";
        echo "<span style='float: left;'>Panjang</span>";
        echo "<span style='display: inline-block; width: 100px; text-align: center;'>Lebar</span>";
        echo "<span style='float: right;'>Luas</span>";
        echo "<hr>";
        echo "<div style='margin-top: 20px;'>";
        echo "<span style='float: left;'>$panjang</span>";
        echo "<span style='display: inline-block; width: 170px; text-align: center;'>$lebar</span>";
        echo "<span style='float: right;'>$luas</span>";
        echo "</div>";
    }
    ?>

</div>

</body>
</html>
