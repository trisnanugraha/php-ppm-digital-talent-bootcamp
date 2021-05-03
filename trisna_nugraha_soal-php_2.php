<?php
    //array nominal uang dan jumlah lembar
    $uang = [
        '10000' => 3,
        '5000' => 4,
        '20000' => 5
    ];

    $hargaMainan = 55000;

    echo "Setyo mempunyai uang dengan nominal sebagai berikut :<br>";

    tampilUang($uang);

    echo "<br><br>Ia akan membeli mainan seharga <b>Rp. $hargaMainan</b>";
    echo "<br><br>Berapa jumlah uang Setyo setelah membeli mainan?<br>";

    $sisa = cekPembayaran($uang, $hargaMainan);

    tampilUang($sisa);

    //pengecekan uang dengan total bayar
    function cekPembayaran($uang, $hargaMainan){
        $sisaUang = $uang;
        $harga = $hargaMainan;
        echo "<br>Perhitungan uang : ";
        while($harga != 0){
            if($harga >= 20000){
                echo "<br>$harga - ";
                $harga -= 20000;
                $sisaUang['20000'] -= 1;
                echo "20000 = $harga";
            }
            else if($harga >= 10000){
                echo "<br>$harga - ";
                $harga -= 10000;
                $sisaUang['10000'] -= 1;
                echo "10000 = $harga";
            }
            else if($harga >= 5000){
                echo "<br>$harga - ";
                $harga -= 5000;
                $sisaUang['5000'] -= 1;
                echo "5000 = $harga";
            }
        }
        echo "<br>";
        return $sisaUang;
    }

    //menampilkan nominal uang beserta jumlah lembar dan total uang keseluruhan
    function tampilUang($total){
        $totalAkhir = 0;
        $totalNominal = 0;
        foreach($total as $nominal => $jumlah){
            $totalNominal = $nominal * $jumlah;
            echo "<br>Nominal Rp. $nominal sebanyak $jumlah lembar.";
            $totalAkhir += $totalNominal;
        }
        echo "<br>Total uang sekarang adalah <b>Rp. $totalAkhir</b>";
    }
?>