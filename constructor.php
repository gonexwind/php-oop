<?php

class Produk
{
    public $judul, $penulis, $penerbit, $harga;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->judul, $this->penulis";
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Drickmann", "Sony Computer", 250000);
echo $produk1->getLabel();
echo $produk2->getLabel();

$produk3 = new Produk("Dragon Ball");
var_dump($produk3);
