<?php
 
 // jualan produk
 // komik
 // game

 class produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;
    
           public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit",$harga= 0 ){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;

           }


           public function getlabel(){
            return "$this->penulis, $this->penerbit"; 
           }
 }
//mendefinisikan produk komik
 $Produk1 = new Produk( "naruto","Masashi Kishimoto","Shonen Jump",30000);

//mendefinisikan produk game 
 $Produk2 = new produk("Uncharted","Neil Druckmann","Sony computer",250000);
 $produk3 = new produk("dragon ball");


 echo "Komik : " . $Produk1->getLabel();-
 echo "<br>";
 echo "Game : " . $Produk2->getLabel();
 echo "<br>";
 var_dump($produk3);