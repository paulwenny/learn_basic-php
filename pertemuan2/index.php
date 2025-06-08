<?php
// Pertemuan 2 - PHP Dasar || Sintaks PHP

    // Standar output
        // echo, print
            echo "ini echo, ";
            print "ini print, ";

        // print_r
            print_r("ini print_r, ");

        // var_dump
            var_dump("ini var_dump, ");


    // Penulisan Sintaks PHP
        // 1. PHP di dalam HTML
        // 2. HTML di dalam PHP

    // Variabel & Tipe Data
        // Variabel
            $nama = "paul";

    // Operator
        // 1. Aritmatika
            // +. -, /, *, %
                $x = 10;
                $y = 10;
                $hasil = $x + $y;

    // 2. Penggabungan String/ Concet (.)
        // Menggunakan (.)
            $nama_depan = "Paul";
            $nama_belakang = "Wenny";

    // 3. Assigmanet / Penugasan
        // =, +=, -=, *=, /=, %=
            $n = 10;
            $n += 10;

    // Operator Perbandingan
        // <, >, <=, >=, ==, !=

    // Operator Identitas
        // ===, !==

    // Operator Logika
        // &&, ||, !
            $logika = 30;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- PHP di dalam HTML -->
    <h1>Belajar, <?php echo"Menulis PHP di dalam HTML"?></h1>

    <!-- HTML di dalam PHP -->
    <?php
        echo "<h1> Belajar, Menulis HTML di dalam PHP </h1>"
    ?>

    <!-- Menanggil Variabel -->
    <h1>Memanggil isi Variabel = <?php echo $nama?></h1>

    <!-- Memanggil Hasil Opertor Aritmatika -->
    <h1>Hasli dari penjumlahan Aritmatika = <?php echo $hasil?></h1>

    <!-- Memanggil pengagabungan 2 variabel -->
    <h1>Menggabungkan 2 Hasil Variabel String <?php echo $nama_depan . " " . $nama_belakang?></h1>

    <!-- Memanggil Operator Assigmanet -->
    <h1>Hasli Operator Assigmanet += , <?php echo $n?></h1>

    <!-- Contoh Operator Perbandingan -->
    <h1>Hasli Operator Perbandingan, <?php var_dump(1 < 5)?></h1>

    <!-- Contoh Operator Identitas -->
    <h1>Hasli Operator Identitas, <?php var_dump(1 === "1")?></h1>

    <!-- Contoh Operator Logika -->
    <h1>Hasli Operator Logika, <?php var_dump($logika < 20 && $logika == 2)?></h1>
</body>
</html>
