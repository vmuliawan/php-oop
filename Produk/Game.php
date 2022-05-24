<?php

class Game extends Produk implements detailProduk{
    public $durasiGame;

    public function __construct($judul,$penerbit,$penulis,$harga,$durasiGame = 0){
        parent::__construct($judul,$penerbit,$penulis,$harga);
        $this->durasiGame = $durasiGame;
    }

    public function infoNya(){
        $str = "{$this->judul},{$this->getLabel()}, (Rp.{$this->harga})";
        return $str;
    }

    public function infoLengkap(){
        $str = "Game : " . $this->infoNya() . " - {$this->durasiGame} Jam.";
        return $str;
    }
}