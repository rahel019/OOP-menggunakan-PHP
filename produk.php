<?php
 
 // jualan produk
 // komik
 // game

 class produk {
    public $judul = "Judul",
           $Penulis ="Penulis",
           $Penerbit = "Penerbit",
           $harga = 0;
    
//Metode getLabel() mengembalikan string yang berisi informasi tentang penulis dan penerbit dari produk.
           public function getlabel(){
            return "$this->Penulis, $this->Penerbit"; 
           }
 }

 $Produk3 = new Produk();
 $Produk3->Judul = "Naruto";
 $Produk3->Penulis = "Masashi Kishimoto";
 $Produk3->Penerbit ="Shonen Jump";
 $Produk3->harag = 30000;

 echo "Komik : $Produk3->Penulis,$Produk3->Penerbit";
 echo "<br>";
 echo $Produk3->getLabel();
