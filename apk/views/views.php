<?php require ('../class/class.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>luas bentuk</title>
</head>
<body>
    <form method="post">
        <label for="sisi">Sisi Persegi</label>
        <input type="number" name="sisi" id="sisi" required><br>

        <label for="panjang">Panjang Persegi Panjang</label>
        <input type="number" name="panjang" id="panjang" required><br>

        <label for="lebar">Lebar Persegi</label>
        <input type="number" name="lebar" id="lebar" required><br>

        <label for="sisiAlas">Alas Segitiga</label>
        <input type="number" name="sisiAlas" id="sisiAlas" required><br>

        <label for="tinggi">Tinggi Segitiga</label>
        <input type="number" name="tinggi" id="tinggi" required><br>

        <input type="submit" name="calculate" value="Calculate">

    </form>

    <?php
    
    if (isset($_POST['calculate'])) {
        $aritmatika = new perhitungan;

        $sisi = $_POST['sisi'];
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $sisiAlas = $_POST['sisiAlas'];
        $tinggi = $_POST['tinggi'];

        $luasPersegi = $aritmatika->luasPersegi($sisi);
        $luasPersegiPanjang = $aritmatika->luasPerPan($panjang,$lebar);
        $luasSegitiga = $aritmatika->luasSegitiga($sisiAlas,$tinggi);

        echo "Luas Persegi = ".$luasPersegi."<br>";
        echo "Luas Persegi Panjang = ".$luasPersegiPanjang."<br>";
        echo "Luas Segitiga = ".$luasSegitiga."<br>";
    }

    ?>
</body>
</html>