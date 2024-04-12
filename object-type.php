<?php
 
 class produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;
    
    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit"; 
    }
 }

class CetakInfoProduk{ 
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// Mendefinisikan produk komik
$Produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

// Mendefinisikan produk game 
$Produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

echo "Komik : " . $Produk1->getLabel();
echo "<br>";
echo "Game : " . $Produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($Produk1);
?>
