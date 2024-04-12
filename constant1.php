<?php
class Coba{
    const NAMA = 'Rahel';
}
echo Coba::NAMA;

echo "<br>";

echo __LINE__;

echo "<br>";

echo __FILE__;

echo "<br>";

function Coba(){
    return __FUNCTION__;
}
echo Coba();
echo "<br>";

class KelasCoba{
    public $kelas = __CLASS__;
}
$obj = new KelasCoba;
echo $obj->kelas;
?>
