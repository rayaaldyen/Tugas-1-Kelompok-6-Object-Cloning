<?php
    class Perusahaan_Makanan
    {
        private $kodeKaryawan = 000;
        private $jabatan;
    
        function getKodeKaryawan() {
            return $this->kodeKaryawan;
        }
         
        function setJabatan($jabatan) {
            $this->jabatan = $jabatan;
        }
        function getJabatan() {
            return $this->jabatan;
        }
         
        function __clone() {  
            $this->kodeKaryawan++;  
       }  
    }
     
    $karyawan1 = new Perusahaan_Makanan();
     
  
     
    $karyawan1->setJabatan("Cookers");
     
    $karyawan2 = clone $karyawan1;
     
    
    $karyawan2->setJabatan("Waiter");
     
     
    echo "Kode Karyawan 1 : kyr" ,$karyawan1->getKodeKaryawan();
    echo "\nJabatan Karyawan 1 : ", $karyawan1->getJabatan(),"\n";
     
    echo "\nKode Karyawan 2 : kyr" , $karyawan2->getKodeKaryawan();
    echo "\nJabatan Karyawan 2 : ", $karyawan2->getJabatan();
?>