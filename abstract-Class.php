<?php

// Mendefinisikan kelas abstrak Buah
abstract class Buah {
    protected $warna;

    // Metode abstrak makan yang harus diimplementasikan oleh kelas turunannya
    abstract public function makan();

    // Metode untuk mengatur warna buah
    public function setWarna($warna){
        $this->warna = $warna;
    }
}

// Mendefinisikan kelas Apel yang memperluas kelas Buah
class Apel extends Buah {
    // Implementasi metode makan untuk Apel
    public function makan(){
        //kunyah
        //sampai bagian tengah
    }
}

// Mendefinisikan kelas Jeruk yang memperluas kelas Buah
class Jeruk extends Buah {
    // Implementasi metode makan untuk Jeruk
    public function makan(){
        //Kupas
        //kunyah
    }
}

// Membuat objek Apel
$apel = new Apel();
// Memanggil metode makan dari Apel
$apel->makan();

?>
