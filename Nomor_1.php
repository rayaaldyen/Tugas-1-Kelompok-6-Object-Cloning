<?php 
class rumus{
    var $jari2;

    function __construct($r){
    $this->jari2 = $r;
    }
    function luas(){
        $phi = 22/7;
    return $phi * $this->jari2**2;
    }
}
echo "Menghitung luas dua buah lingkaran\n";
$input = (int)readline("Masukkan jari-jari = \n");
$lingkaran1 = new rumus($input);
$lingkaran2 = clone $lingkaran1;

echo "\nluas lingkaran satu = ".$lingkaran1->luas()."\n";
echo "luas lingkaran dua (cloning lingkaran pertama)= ".$lingkaran2->luas()."\n\n";

$input2 = (int)readline("Ubah jari-jari pada lingkaran dua = \n");
$lingkaran2->jari2 = $input2;
echo "\nluas lingkaran satu = ".$lingkaran1->luas()."\n";
echo "luas lingkaran dua (cloning lingkaran pertama)= ".$lingkaran2->luas()."\n";