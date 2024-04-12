<?php

class Contoh{
    public static $angka = 1; // Mendefinisikan properti statis $angka dengan nilai awal 1

    public function halo(){ // Mendefinisikan metode non-statis halo()
        return "Halo ". self::$angka++ . "kali . <br>"; // Mengembalikan string "Halo " ditambah nilai properti $angka, kemudian nilai properti $angka akan ditambahkan dengan 1
    }
}

$obj = new Contoh; // Membuat objek dari kelas Contoh
echo $obj->halo(); // Memanggil metode halo() dari objek $obj, mencetak string "Halo 1 kali. ", kemudian menambahkan nilai properti $angka menjadi 2
echo $obj->halo(); // Memanggil metode halo() dari objek $obj lagi, mencetak string "Halo 2 kali. ", kemudian menambahkan nilai properti $angka menjadi 3
echo $obj->halo(); // Memanggil metode halo() dari objek $obj lagi, mencetak string "Halo 3 kali. ", kemudian menambahkan nilai properti $angka menjadi 4

echo "<hr>"; // Menambahkan garis pemisah horizontal

$obj2 = new Contoh; // Membuat objek baru dari kelas Contoh
echo $obj2->halo(); // Memanggil metode halo() dari objek $obj2, mencetak string "Halo 1 kali. ", kemudian menambahkan nilai properti $angka menjadi 2
echo $obj2->halo(); // Memanggil metode halo() dari objek $obj2 lagi, mencetak string "Halo 2 kali. ", kemudian menambahkan nilai properti $angka menjadi 3
echo $obj2->halo(); // Memanggil metode halo() dari objek $obj2 lagi, mencetak string "Halo 3 kali. ", kemudian menambahkan nilai properti $angka menjadi 4
