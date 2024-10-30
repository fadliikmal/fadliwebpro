<?php

$angka1 = 9;
echo "angka ke 1 = $angka1 <br>";

$angka2 = 4;
echo "angka ke 2 = $angka2 <br>";

$angka3 = 5;
echo "angka ke 3 = $angka3 <br>";

$menu = 4;

$rata = ($angka1 + $angka2 + $angka3)/3;

$jumlah = $angka1 + $angka2 + $angka3;

$perkalian = $angka1 * $angka2;

echo "Pilihan = $menu<br>";

if ($menu == 1){
    echo "Rata Rata = $rata";
}elseif($menu == 2){
    echo "Penjumlahan = $jumlah ";
}elseif($menu == 3){
    echo "Rata Rata = $rata <br>";
    echo "Penjumlahan = $jumlah";
}elseif($menu == 4){
    echo "perkalian = $perkalian ";
}
else {
    echo "tidak ada pilihan";
}

?>