<?php

class Komik extends Produk implements detailProduk {
    public $jumlahHalaman;

    public function __construct($judul,$penerbit,$penulis,$harga,$jumlahHalaman = 0){
        parent::__construct($judul,$penerbit,$penulis,$harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function infoNya(){
        $str = "{$this->judul},{$this->getLabel()}, (Rp.{$this->harga})";
        return $str;
    }

    public function infoLengkap(){
        $str = "Komik : " . $this->infoNya() . " - {$this->jumlahHalaman} Halaman.";
        return $str;
    }
}