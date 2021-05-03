<?php
$satuan = 1750; //harga satuan bolpoin
$jmlBeli = 12; //jumlah yang dibeli

echo "Rian akan membeli bolpoin sebanyak <b>$jmlBeli bolpoin</b> (1 lusin)<br>";
echo "<br>Harga satuan bolpoin adalah <b>Rp. $satuan</b><br>";

$totalBeli = HitungPembelian($satuan, $jmlBeli);

//5 adalah total lembar uang
//5000 adalah nominal
$uang = HitungUang(5, 5000);

HitungKembalian($totalBeli, $uang);

//menghitung uang yang dibawa
function HitungUang($jml, $nominal){

    $total = $jml * $nominal;

    echo "<br>Rian membawa <b>$jml</b> lembar pecahan <b>Rp. $nominal</b>";
    echo "<br>Sehingga jumlah uang Rian adalah $jml * $nominal = <b>Rp. $total</b>";
    return $total;
}

//menghitung total pembelian
function HitungPembelian($satuan, $jml){
    $totalBeli = $satuan * $jml;
    echo "<br>Harga total pembelian $jml bolpoin adalah $jml * Rp. $satuan = <b>Rp. $totalBeli</b><br>";
    return $totalBeli;
}

//pengecekan pembayaran
function HitungKembalian($total, $bayar){
    
    if($bayar < $total){
        echo "Maaf, uangnya kurang...";
    } else if($bayar == $total){
        echo "Terima kasih, uangnya pas...";
    }

    $kembalian = $bayar - $total;
    echo "<br><br>Jadi, masih ada kembaliannya sebesar Rp. $bayar - Rp. $total = <b>Rp. $kembalian</b>";
}
