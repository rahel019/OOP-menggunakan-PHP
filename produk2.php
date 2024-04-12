<?php
 
 // jualan produk
 // komik
 // game

 class produk {
    public $judul = "Judul",
           $Penulis ="Penulis",
           $Penerbit = "Penerbit",
           $harga = 0;
    
           public function getlabel(){
            return "$this->Penulis, $this->Penerbit"; 
           }
 }
//mendefinisikan produk komik
 $Produk3 = new Produk();
 $Produk3->Judul = "Naruto";
 $Produk3->Penulis = "Masashi Kishimoto";
 $Produk3->Penerbit ="Shonen Jump";
 $Produk3->harag = 30000;

//mendefinisikan produk game 
 $Produk4 = new produk();
 $Produk4->Judul ="Uncharted";
 $Produk4->Penulis = "Neil Druckmann";
 $Produk4->Penerbit ="Sony computer";
 $Produk4->harag = 250000;

 echo "Komik : " . $Produk3->getLabel();
 echo "<br>";
 echo "Game : " . $Produk4->getLabel();