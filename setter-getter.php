<?php

class Produk {
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

    public function getPenulis() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
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

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {
         parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }


    public function getInfoProduk() {
        $str = "Game : ".parent::getInfoProduk()." ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Drickmann", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

// $produk2->harga = 5000;
$produk2->setDiskon(10);
echo $produk2->getHarga();
echo "<hr>";

// echo $produk2->judul;
$produk3 = new Produk("Nisekoi", "Author", "Shounen", 25000, 40);
$produk3->setJudul("300");
echo $produk3->getJudul();
