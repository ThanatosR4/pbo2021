<?php
    class Mahasiswa {
        public $nim  ; 
        public $nama ;
        public $tanggal_lahir ;
        public $jenis_kelamin ; 
        
        public function tampilkanAngkatan() {
            echo "$this->nama merupakan angkatan 2019 yang mempunyai NIM $this->nim " ;
        }
        public function tampilkanUmur() {
            echo " dan juga dia merupakan seorang $this->jenis_kelamin yang lahir pada tanggal $this->tanggal_lahir  <br>" ;
        }
        }

        
    

?>