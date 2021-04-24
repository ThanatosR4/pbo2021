<?php
    class Pegawai
    {
        public $nama;

        public function sapa()
        {
            echo "Halo " . $this->nama . " posisi saya saat ini adalah Captain \n" ;
        }
        public function masuk()
        {
            echo "Anda masuk esport Bigetron Red Alien pada tanggal " . date("d-m-y"). "\n";
        }
    }
    class KetuaJurusan extends Pegawai
    {
        public function sapa()
        {
            echo "Hei " . $this->nama . " dari devisi PUBGM Bigetron Red Alien \n" ;
        }
        public function parentSapa()
        {
            return parent::sapa();
        }
    }
          
    $ais = new KetuaJurusan();
    $ais ->nama = "Rahmat Ramadhan Al Hais";
    $ais->parentSapa();
    $ais->sapa();
    $ais->masuk();

?>