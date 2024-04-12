<?php

class Produk {
  
    public $judul,        
           $penulis,      
           $penerbit,    
           $harga,        
           $jmlHalaman,   // Jumlah halaman (hanya untuk produk tipe "komik")
           $waktuMain;    // Waktu main (hanya untuk produk tipe "Game")

    // Constructor untuk menginisialisasi nilai awal properti
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    // Method untuk mendapatkan label penulis dan penerbit produk
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    // Method untuk mendapatkan informasi lengkap tentang produk
    public function getInfoProduk(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }

} 

class Komik extends produk{
    public function getInfoProduk(){
        $str = "komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;

    }
}

class Game extends produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

// Mendefinisikan kelas CetakInfoProduk
class CetakInfoProduk{ 
    // Method untuk mencetak informasi produk
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// Mendefinisikan objek produk komik
$produk1 = new Komik ("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "komik");

// Mendefinisikan objek produk game 
$produk2 = new Game ("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

// Menampilkan informasi lengkap produk
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
?>
