<?php

// Deklarasi kelas Produk
class Produk {
  
    // Properti dari kelas Produk
    public $judul,        
           $penulis,      
           $penerbit,    
           $harga;       

    // Constructor untuk menginisialisasi nilai awal properti
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Method untuk mendapatkan label penulis dan penerbit produk
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    // Method untuk mendapatkan informasi lengkap tentang produk
    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

} 

// Deklarasi kelas Komik yang merupakan turunan dari kelas Produk
class Komik extends Produk{
    public $jmlHalaman;

    // Constructor untuk inisialisasi properti kelas Komik
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){

        parent::__construct($judul, $penulis, $penerbit, $harga); // Memanggil constructor kelas induk

        $this->$jmlHalaman = $jmlHalaman;

    }

    // Method untuk mendapatkan informasi produk komik
    public function getInfoProduk(){
        $str = "Komik : ".parent::getInfoProduk()." - {$this->jmlHalaman} Halaman.";
        return $str;

    }
}

// Deklarasi kelas Game yang merupakan turunan dari kelas Produk
class Game extends Produk{
    public $waktuMain;
    
    // Constructor untuk inisialisasi properti kelas Game
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){

        parent::__construct($judul, $penulis , $penerbit , $harga); // Memanggil constructor kelas induk

        $this->$waktuMain = $waktuMain;

    }

    // Method untuk mendapatkan informasi produk game
    public function getInfoProduk(){
        $str = "Game :  ".parent::getInfoProduk()." ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

// Deklarasi kelas CetakInfoProduk
class CetakInfoProduk{ 
    // Method untuk mencetak informasi produk
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// Mendefinisikan objek produk komik
$produk1 = new Komik ("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

// Mendefinisikan objek produk game 
$produk2 = new Game ("Uncharted", "Neil Druckmann", "Sony Computer", 250000,50);

// Menampilkan informasi lengkap produk
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
?>
