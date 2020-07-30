<?php

class Produk
{
    public $judul = "Judul";
    public $penulis = 'penulis';
    public $penerbit = "penerbit";
    public $harga = "harga";

    public function printLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->propertiBaru = 'hahaha';
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = 'Naruto';
$produk3->penulis = 'Masashi Kishimoto';
$produk3->penerbit = 'Shonen Jump';
$produk3->harga = 30000;

var_dump($produk3);
echo "Komik : $produk3->penulis, $produk3->harga"; 
echo "<br>";
echo $produk3->printLabel(); 

$produk4 = new Produk();
$produk4->judul = 'Uncharted';
$produk4->penulis = 'Neil Drickmann';
$produk4->penerbit = 'Sony Computer';
$produk4->harga = 250000;

var_dump($produk4);