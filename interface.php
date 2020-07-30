<?php

interface InfoProduk {
    public function getInfoProduk();
}

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

class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {
         parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : {$this->getInfo()} - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk implements InfoProduk {
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }


    public function getInfoProduk() {
        $str = "Game : {$this->getInfo()} ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    private $daftarProduk = [];

    public function tambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= " - {$p->getInfoProduk()} <br> ";    
        }

        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Drickmann", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
