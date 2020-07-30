<?php 

abstract class Produk {
    private $judul, $penulis, $penerbit, $harga;
    protected $diskon;

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul) {
        if (!is_string($judul)) {
            throw new Exception("JUDUL HARUS STRING",);
        }

        return $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis) {
        return $this->penulis = $penulis;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100) ;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }
}

?>s