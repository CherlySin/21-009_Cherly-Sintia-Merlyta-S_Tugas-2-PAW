<?php
    // variabel baru
    $lengkap = ($_POST["namaL"]);
    $panggil = ($_POST["namaP"]);
    $age = (int)$_POST["usia"];
    $ttl = (int)$_POST["lahir"];
    $height = (float)$_POST["tinggi"];
    $brt = (float)$_POST["berat"];

    //menampilkan data
    echo "Nama Lengkap = " . $lengkap . "<br>";
    echo "Nama Panggilan = " . $panggil . "<br>";
    echo "Umur = " . $age . "<br>";
    echo "Tanggal Lahir = " . $ttl . "<br>";
    echo "Tinggi Badan = " . $height . "<br>";
    echo "Berat Badan = " . $brt . "<br>";
?>