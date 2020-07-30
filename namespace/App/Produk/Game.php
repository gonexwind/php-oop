<?php 

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

?>