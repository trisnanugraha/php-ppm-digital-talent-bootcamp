<?php
    $_biayaCabangAwal = 10000; //nilai awal biaya pengeluaran
    $_biayaCabang = 30100; //biaya cabang ke 68
    $_cabang = 68; //cabang ke 68
    $cabang = 81; //cabang yang akan dicari biaya pengeluarannya

    echo "Biaya pengeluaran toko kelontong cabang ke 1 adalah <b>Rp. $_biayaCabangAwal</b><br>";
    echo "<br>Biaya pengeluaran toko kelontong cabang ke 68 adalah <b>Rp. $_biayaCabang</b><br>";

    $biayaCabang = HitungPengeluaran($_biayaCabangAwal, $_biayaCabang, $_cabang);
    HitungPengeluaranCabang($biayaCabang, $cabang, $_biayaCabangAwal);

    //menentukan biaya pengeluaran cabang
    function HitungPengeluaran($biayaCabangAwal, $biayaCabang, $cabang){
        $biayaTanpaAwal = $biayaCabang - $biayaCabangAwal;
        $biayaTiapCabang = $biayaTanpaAwal / ($cabang - 1);
        echo "<br>Biaya pengeluaran toko kelontong tiap cabang adalah :";
        echo "<br>$biayaCabang - $biayaCabangAwal = $biayaTanpaAwal";
        echo "<br>$biayaTanpaAwal / ($cabang - 1) = $biayaTiapCabang";
        echo "<br>** Mengapa $cabang - 1 ? karena cabang ke 1 memiliki biaya pengeluaran yang berbeda.";
        echo "<br><br>Jadi biaya pengeluaran toko kelontong tiap cabang (setelah cabang ke 1) adalah <b>Rp. $biayaTiapCabang</b>";
        
        return $biayaTiapCabang;
    }

    //menghitung total pengeluaran cabang x
    function HitungPengeluaranCabang($biayaPerCabang, $cabang, $biayaCabangAwal){
        $biaya = ($cabang - 1) * $biayaPerCabang + $biayaCabangAwal;

        echo "<br><br>Biaya pengeluaran toko kelontong cabang ke 81 adalah :";
        echo "<br>($cabang - 1) * $biayaPerCabang + $biayaCabangAwal = $biaya";
        echo "<br>** Mengapa $cabang - 1 ? karena cabang ke 1 memiliki biaya pengeluaran yang berbeda.";
        echo "<br><br>Jadi biaya pengeluaran toko kelontong ke 81 adalah <b>Rp. $biaya</b>";
    }
?>
