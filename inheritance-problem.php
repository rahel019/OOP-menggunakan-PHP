<?php

class Produk {
  
    public $judul,        
           $penulis,      
           $penerbit,    
           $harga,        
           $jmlHalaman,   // Jumlah halaman (hanya untuk produk tipe "komik")
           $waktuMain,    // Waktu main (hanya untuk produk tipe "Game")
           $tipe;         // Tipe produk

    // Constructor untuk menginisialisasi nilai awal properti
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    // Method untuk mendapatkan label penulis dan penerbit produk
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    // Method untuk mendapatkan informasi lengkap tentang produk
    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        // Menambahkan informasi tambahan berdasarkan tipe produk
        if ($this->tipe == "komik"){
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }  
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
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "komik");

// Mendefinisikan objek produk game 
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

// Menampilkan informasi lengkap produk
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
?>
