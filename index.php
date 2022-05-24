<?php

require_once 'autoloading/init.php';

// instansi 
// $produk1 = new Komik("Nangturo","shonen jump","masashi kishimoto",30000,100);
// $produk2 = new Game("GTA : Sanandreas","Rockstar Games","Rockstar North",80000,80);

// $cetakProduk = new infoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();



use App\Service\User as serviceUser;
use App\Produk\User as produkUser;


new serviceUser();
echo "<br>";
new produkUser();





