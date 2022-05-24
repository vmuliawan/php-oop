<?php

abstract class Produk {
    // public merupakan visibility dari variabel
    protected $judul,$penerbit,$penulis;
    protected $diskon;
    protected $harga;

    // fungsi construct
    public function __construct($judul,$penerbit,$penulis,$harga){
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
       return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setJudul($judul){
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function getLabel(){
        return "$this->penerbit, $this->penulis";
    }
    
    abstract public function infoNya();

};